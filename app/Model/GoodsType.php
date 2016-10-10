<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * ����
 * @package App\Model
 */
class GoodsType extends Model
{
    protected $fillable = ['updated_at', 'created_at'];
    protected $table = 'goods_type';

    public function childrenGoodsType()
    {
        return $this->hasMany('App\Model\GoodsType', 'parent_id', 'id');
    }
    public function parentGoodsType()
    {
        return $this->belongsTo('App\Model\GoodsType', 'parent_id', 'id');
    }
}
