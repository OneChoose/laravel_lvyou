<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * 文章
 * @package App\Model
 */
class Article extends Model
{
    protected $table = 'article';

    /**
     * 所属分类
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Model\Article_category', 'category_id', 'id');
    }

}
