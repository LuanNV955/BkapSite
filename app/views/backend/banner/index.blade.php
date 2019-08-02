@extends('backend')
@section('icon','fa-file-word-o')
@section('title','Quản lý sản phẩm')
@section('toolbar')
	@section('add','Thêm mới sản phẩm')
	@section('refresh','Làm mới danh sách')
@stop()
@section('main')
<div class="card">	
	<form action="{{route('banner.destroy',['banner'=>1])}}" method="POST" class="form-inline" role="form">
	<div class="add-items d-flex">
		<select name="" id="input" class="form-control" required="required">
			<option value="">Hello</option>
			<option value="">Hello</option>
			<option value="">Hello</option>
		</select>
		<input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
		<button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-search"></i></button>
	</div>
	</form>
<div class="table-responsive pt-3">
 {!!Grid::table($model)!!}
</div>
</div>
@stop()