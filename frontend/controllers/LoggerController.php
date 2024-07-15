<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\factories\LoggerFactory;
use common\interfaces\LoggerInterface;

class LoggerController extends Controller
{
    private function generateMessage()
    {
        //generate random message with alphabet characters and digits
        $message = '';
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < 10; $i++) {
            $message .= $characters[rand(0, $charactersLength - 1)];
        }
        return $message;
    }
    public function actionLog()
    {
        $defaultLogger = Yii::$app->params['DefaultLogger'];
        echo "Logging to default logger: $defaultLogger<br>\n";
        $this->actionLogTo($defaultLogger);
    }

    public function actionLogTo($type)
    {
        echo "Logging to $type logger<br>\n";
        $Logger = LoggerFactory::createLogger($type);
        $message = $this->generateMessage();
        $Logger->send($message);
    }

    public function actionLogToAll()
    {
        echo "Mass logging requested<br>\n";
        $loggers = Yii::$app->params['DemoLoggers'];
        foreach ($loggers as $type => $logger) {
            $this->actionLogTo($type);
        }
    }
}
