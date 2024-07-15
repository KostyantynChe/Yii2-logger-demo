<?php

return [
            'DemoLoggers' => [
                'email' => 'common\loggers\EmailLogger',
                'database' => 'common\loggers\DatabaseLogger',
                'file' => 'common\loggers\FileLogger',
            ],
            'DefaultLogger' => 'file'
];
