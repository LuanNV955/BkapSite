@extends('backend')
@section('icon','fa-file-word-o')
@section('title','Cập nhật danh mục: '.$model->name)
@section('modal_file','Thư viện hình ảnh')
@section('toolbar')
	@section('add','Thêm mới danh mục')
	@section('refresh','Làm mới danh sách')
@stop()
@section('main')

<div class="row">
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<form class="cmxform" method="POST" action="{{route('category.update',['id'=>$model->id])}}" >
					<input type="hidden" name="_method" value="PUT">
					@csrf
					<legend>Chỉnh sửa</legend>
				
					<div class="form-group @error('name') has-error @enderror">
  		                <label for="name">Tên danh mục (Bắt buộc, tối đa 150 ký tự)</label>
  		                <input id="name" class="form-control" name="name" value="{{$model->name}}">
  		                @error('name')
  						   <label class="error mt-2 text-danger">{{ $message }}</label>
  						@enderror
		            </div>
					<div class="form-group @error('slug') has-error @enderror">
  		                <label for="slug">Link (Bắt buộc, tối đa 150 ký tự)</label>
  		                <input id="slug" class="form-control" name="slug" value="{{$model->slug}}">
  		                @error('slug')
  						   <label class="error mt-2 text-danger">{{ $message }}</label>
  						@enderror
		            </div>
		            <div class="form-group @error('desc') has-error @enderror">
  		                <label for="desc">Mô tả</label>
  		                <textarea name="desc" id="desc" class="form-control">{{$model->desc}}</textarea>
  		                @error('desc')
  						   <label class="error mt-2 text-danger">{{ $message }}</label>
  						@enderror
		            </div>
		            <div class="form-group">
	                	<input type="hidden" id="image" name="image" value="{{$model->image}}">
	                	<img src="{{url('/')}}{{$model->image}}" alt="" id="show_img" style="width: 100%">
	                    <button type="button" class="btn btn-danger btn-block" id="select_img">Chọn ảnh</button>
	                </div>
					<button type="submit" class="btn btn-primary">Lưu lại</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card">
		<div class="table-responsive pt-3">
		 {!!Grid::table($model)!!}
		</div>
		</div>
	</div>
</div>

@stop()