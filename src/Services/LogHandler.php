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

        try {
            $log = new Log();
            foreach ($record['formatted'] as $key => $item){
                if (in_array($key,['exception'])){
                    continue;
                }
                $log->{$key}  = $item;
            }
            $log->save();
        }
        catch (\Exception $exception){
            dd($exception);
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter(): FormatterInterface
    {
        return new LogFormatter();
    }
}
