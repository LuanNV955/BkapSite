@extends('backend')
@section('icon','fa-file-word-o')
@section('title','Quản lý sản phẩm')
@section('toolbar')
	@section('add','Thêm mới sản phẩm')
	@section('refresh','Làm mới danh sách')
@stop()
@section('main')
<div class="card">	
	<form action="" method="GET" class="form-inline" role="form">
	<div class="add-items d-flex">
		<select name="category_id" class="form-control">
			<option value="">Danh mục</option>
			@foreach($cats as $cat)
			<?php $selected = old('category_id') == $cat->id ? 'selected' : '' ;?>
			<option value="{{$cat->id}}" {{$selected}}>{{$cat->title}}</option>
			@endforeach
		</select>
		<input name="title" class="form-control todo-list-input" placeholder="Nhập tên sản phẩm" value="{{old('name')}}">
		<button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-search"></i></button>
	</div>
	</form>
<div class="table-responsive pt-3">
 {!!Grid::table($model)!!}
</div>
</div>
@stop()