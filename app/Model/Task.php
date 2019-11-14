<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    /**
     * 指定批量賦值欄位。
     *
     * @var array
     */
    protected $fillable = [
        'task',
    ];

    /**
     * 指定需要處理的日期格式欄位。
     *
     * @var array
     */
    protected $dates = [ 'deleted_at' ];

}
