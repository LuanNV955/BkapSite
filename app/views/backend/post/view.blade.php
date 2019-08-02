@extends('backend')
@section('icon','fa-file-word-o')
@section('title','Quản lý sản phẩm')
@section('toolbar')
	@section('add','Thêm mới sản phẩm')
	@section('refresh','Làm mới danh sách')
@stop()
@section('main')
<div class="card">	
	<div class="card-body">
		
		<div class="row">
			<div class="col-md-5">
				<img src="{{url('/')}}{{$model->image}}" alt="{{$model->name}}" style="width: 100%">
			</div>
			<div class="col-md-7">
				<h2 class="card-title">{{$model->name}}</h2>
				<div class="card-description">
					<p>Giá gốc: {{number_format($model->price)}} đ</p>
					<p>Giá khuyến mãi: {{number_format($model->sale_price)}} đ</p>
				</div>
				<div class="card-description">
					{!!$model->desc!!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop()