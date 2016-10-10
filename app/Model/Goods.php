<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * 文章
 * @package App\Model
 */
class Goods extends Model
{
    protected $table = 'goods';

    /**
     * 所属分类
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Model\GoodsType', 'typeid', 'id');
    }

}
