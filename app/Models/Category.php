<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['name','slug','image','desc','ordering','type','status'];

    public $grid_column = [
    	'id' => 'ID',
    	'title' => 'Tên sản phẩm',
    	'slug' => 'Đường dẫn',
    	'posts' => [
    		'type' => 'relation',
    		'value' => 'posts.count',
    		'label' => 'Tổng số sản phẩm'
    	]
    ];

    public function posts(){
        return $this->hasMany(Post::class,'category_id','id');
    }
}
