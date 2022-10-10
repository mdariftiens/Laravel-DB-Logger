<?php

namespace Mdariftiens\DBlog\Services;

use Monolog\Logger;

class LogMonolog
{
    public function __invoke(array $config)
    {
        $logger = new Logger('custom');
        $logger->pushHandler(new LogHandler());
        $logger->pushProcessor(new LogProcessor());

        return $logger;
    }
}
