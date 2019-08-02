<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = ['name','slug','image','content','category_id','status'];

    public $grid_column = [
    	'id' => 'ID',
    	'name' => [
            'type' => 'option',
            'label' => 'Tên bài viết',
            'value' => 'title',
            'image' => [
                'field' => 'image',
                'w'=>50,
            ]
        ],
        'category_id' => [
            'type' => 'relation',
            'value' => 'cat.title',
            'label' => 'Danh mục'
        ],
    ];

    public function cat(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
