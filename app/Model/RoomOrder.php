<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * 客房
 * @package App\Model
 */
class RoomOrder extends Model
{
    protected $table = 'room_order';

    public function roomOrder()
    {
        return $this->belongsTo('App\Model\Room','room_id','id');
    }

}
