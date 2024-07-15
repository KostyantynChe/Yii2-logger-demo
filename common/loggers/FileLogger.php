<?php

namespace common\loggers;

use common\interfaces\LoggerInterface;
use common\models\File;

class FileLogger implements LoggerInterface
{
    private $type = 'file';

    public function send(string $message): void
    {
        $model = new File();
        $model->send($message);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {

    }
}
