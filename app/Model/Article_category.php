<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class admin
 * @package App\Model
 */
class Article_category extends Model
{
    protected $table = 'article_category';
    public function parentCategory()
    {
        return $this->belongsTo('App\Model\Article_category', 'parent_id', 'id');
    }

    public function childrenCategory()
    {
        return $this->hasMany('App\Model\Article_category', 'parent_id', 'id');
    }
}
