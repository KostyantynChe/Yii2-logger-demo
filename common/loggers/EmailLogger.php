<?php

namespace common\loggers;

use common\interfaces\LoggerInterface;
use common\models\Email;

class EmailLogger implements LoggerInterface
{
    private $type = 'email'; // Default type

    public function send(string $message): void
    {
        $model = new Email();
        $model->send($message);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        if ($loggerType === 'email') {
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
