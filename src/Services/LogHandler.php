<?php

namespace Mdariftiens\DBlog\Services;

use Mdariftiens\DBlog\Models\Log;
use Monolog\Formatter\FormatterInterface;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class LogHandler extends AbstractProcessingHandler
{
    public function __construct($level = Logger::DEBUG)
    {
        parent::__construct($level);
    }

    protected function write(array $record):void
    {
        $log = new Log();
        $log->fill($record['formatted']);
        $log->save();
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter(): FormatterInterface
    {
        return new LogFormatter();
    }
}
