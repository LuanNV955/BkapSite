<?php 
return [
	[
		'name' =>'Trang chính',
		'route' => 'backend.index',
		'icon' => 'fa-home'
	],
	[
		'name' =>'QL bài viết',
		'route' => 'post.index',
		'icon' => 'fa-file-word-o',
		'items' => [
			[
				'name' =>'Danh sách bài viết',
				'route' => 'post.index',
				'icon' => 'fa-file-word-o'
			],
			[
				'name' =>'Thêm mới bài viết',
				'route' => 'post.create',
				'icon' => 'fa-file-word-o'
			],
			[
				'name' =>'Danh mục bài viết',
				'route' => 'category.index',
				'icon' => 'fa-file-word-o'
			]
		]
	],
	[
		'name' =>'QL Banner',
		'route' => 'banner.index',
		'icon' => 'fa-file-word-o',
		'items' => [
			[
				'name' =>'Danh sách banner',
				'route' => 'banner.index',
				'icon' => 'fa-file-word-o'
			],
			[
				'name' =>'Thêm mới sản phẩm',
				'route' => 'banner.create',
				'icon' => 'fa-file-word-o'
			]
		]
	],

];	

 ?>