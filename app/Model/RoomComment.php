<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * 评论房间
 * @package App\Model
 */
class RoomComment extends Model
{
    protected $table = 'room_comment';

    public function member()
    {
        return $this->belongsTo('App\Model\Member', 'member_id', 'id');
    }
    public function room()
    {
        return $this->belongsTo('App\Model\Room', 'room_id', 'id');
    }
}
