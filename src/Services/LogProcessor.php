<?php


namespace Mdariftiens\DBlog\Services;

class LogProcessor
{
    public function __invoke(array $record)
    {
        $record['extra'] = [
            'user_id' => auth()->check() ? auth()->user()->id : NULL,
            'user_detail' => auth()->check() ? auth()->user() : NULL,
            'origin' => request()->headers->get('origin'),
            'ip' => request()->server('REMOTE_ADDR'),
            'user_agent' => request()->server('HTTP_USER_AGENT')
        ];

        return $record;
    }
}
