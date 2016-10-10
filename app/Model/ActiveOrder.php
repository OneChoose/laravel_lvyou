<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * 文章
 * @package App\Model
 */
class ActiveOrder extends Model
{
    protected $table = 'active_order';

    public function getActive()
    {
        return $this->belongsTo('App\Model\Active','active_id','id');
    }

}
