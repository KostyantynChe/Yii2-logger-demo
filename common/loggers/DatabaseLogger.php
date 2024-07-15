<?php

namespace common\loggers;

use common\interfaces\LoggerInterface;
use common\models\Database;

class DatabaseLogger implements LoggerInterface
{
    private $type = 'database'; // Default type

    public function send(string $message): void
    {
        $model = new Database();
        $model->send($message);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        if ($loggerType === 'database') {
            $this->send($message);
        }
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
