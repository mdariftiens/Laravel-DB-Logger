<?php

namespace Mdariftiens\DBlog\Services;

use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\NormalizerFormatter;

class LogFormatter extends NormalizerFormatter implements FormatterInterface
{
    /**
     * type
     */
    const LOG = 'log';
    const STORE = 'store';
    const CHANGE = 'change';
    const DELETE = 'delete';
    /**
     * result
     */
    const SUCCESS = 'success';
    const NEUTRAL = 'neutral';
    const FAILURE = 'failure';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function format(array $record)
    {
        $record = parent::format($record);

        return $this->getDocument($record);
    }

    /**
     * Convert a log message into an MariaDB Log entity
     * @param array $record
     * @return array
     */
    protected function getDocument(array $record)
    {
        $fills = $record['extra'];
        $fills['message'] = $record['message'];
        $fills['context'] = json_encode($record['context']);
        $fills['datetime'] = $record['datetime'];
        $fills['level'] = strtolower($record['level_name']);
        $fills['description'] = $record['message'];
        $fills['token'] = random_int(0,1222222222222);

        $context = $record['context'];
        if (!empty($context)) {
            $fills['type'] = array_key_exists('type', $context) ? $context['type'] : self::LOG;
            $fills['result'] = array_key_exists('result', $context)  ? $context['result'] : self::NEUTRAL;

            $fills = array_merge($record['context'], $fills);
        }

        return $fills;
    }

    public function formatBatch(array $records)
    {
        // TODO: Implement formatBatch() method.
    }
}
