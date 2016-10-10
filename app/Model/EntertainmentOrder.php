<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * 文章
 * @package App\Model
 */
class EntertainmentOrder extends Model
{
    protected $table = 'entertainment_order';

    public function getEntertainment()
    {
        return $this->belongsTo('App\Model\Entertainment','entertainment_id','id');
    }
}
