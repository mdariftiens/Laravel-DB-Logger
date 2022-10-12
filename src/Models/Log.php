<?php

namespace Mdariftiens\DBlog\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    use SoftDeletes;

    /**
     * @var string $table
     */
    protected $table = 'logs';

    /**
     * @var array $guarded
     */
    protected $guarded = ['id'];

}
