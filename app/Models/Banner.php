<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';

    protected $fillable = ['name','link','image','desc','ordering','position','status'];

    public $grid_column = [
    	'id' => 'ID',
    	'name' => [
            'type' => 'option',
            'value' => 'name',
            'label' => 'Tên banner',
            'image' => [
                'field' => 'image'
            ]
        ],
    	'link' => 'Đường dẫn'
    ];

}
