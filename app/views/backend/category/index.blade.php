@extends('backend')
@section('icon','fa-file-word-o')
@section('title','Quản lý danh mục')
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
				<form class="cmxform" method="POST" action="{{route('category.store')}}" novalidate="novalidate">
					@csrf
					<legend>Thêm mới</legend>
				
					<div class="form-group @error('name') has-error @enderror">
  		                <label for="name">Tên danh mục (Bắt buộc, tối đa 150 ký tự)</label>
  		                <input id="name" class="form-control" name="name" value="{{old('name')}}">
  		                @error('name')
  						   <label class="error mt-2 text-danger">{{ $message }}</label>
  						@enderror
		            </div>
					<div class="form-group @error('slug') has-error @enderror">
  		                <label for="slug">Link (Bắt buộc, tối đa 150 ký tự)</label>
  		                <input id="slug" class="form-control" name="slug" value="{{old('slug')}}">
  		                @error('slug')
  						   <label class="error mt-2 text-danger">{{ $message }}</label>
  						@enderror
		            </div>
		            <div class="form-group @error('desc') has-error @enderror">
  		                <label for="desc">Mô tả</label>
  		                <textarea name="desc" id="desc" class="form-control" rows="3" required="required">{{old('desc')}}</textarea>
  		                @error('desc')
  						   <label class="error mt-2 text-danger">{{ $message }}</label>
  						@enderror
		            </div>
		            <div class="form-group">
	                	<input type="hidden" id="image" name="image" value="{{old('image')}}">
	                	<img src="{{url('/')}}{{old('image')}}" alt="" id="show_img" style="width: 100%">
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