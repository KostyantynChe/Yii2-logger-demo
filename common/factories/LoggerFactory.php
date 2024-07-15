<?php
namespace common\factories;


use yii\base\InvalidArgumentException;
use Yii;

use common\interfaces\LoggerInterface;

class LoggerFactory
{
    public static function createLogger(string $type): LoggerInterface
    {
        //getting loggers from params
        $loggers = Yii::$app->params['DemoLoggers'];
        //if key exists in array, return new instance of class
        if (array_key_exists($type, $loggers)) {
            $className = $loggers[$type];
            return new $className;
        }
        else {
            throw new InvalidArgumentException('Logger type not found');
        }
    }
}
