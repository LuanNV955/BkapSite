@extends('backend')
@section('icon','fa-file-word-o')
@section('title','Thêm mới sản phẩm')
@section('modal_file','Thư viện hình ảnh')

@section('toolbar')
	@section('back','Quay lại danh sách')
@stop()
@section('main')
<form class="cmxform" method="POST" action="{{route('post.store')}}" >
	@csrf
    <fieldset>
      <div class="row">
      	<div class="col-md-9">
      		<div class="card">
      			<div class="card-body">
	      			<div class="form-group @error('name') has-error @enderror">
  		                <label for="name">Tên sản phẩm (Bắt buộc, tối đa 180 ký tự)</label>
  		                <input id="name" class="form-control" name="name" value="{{old('name')}}">
  		                @error('name')
  						   <label class="error mt-2 text-danger">{{ $message }}</label>
  						@enderror
		            </div>
	                <div class="form-group @error('slug') has-error @enderror">
		                <label for="slug">Đường dẫn tĩnh (Bắt buộc, tối đa 180 ký tự)</label>
		                <input id="slug" class="form-control "  name="slug" value="{{old('slug')}}">
		                @error('slug')
						   <label class="error mt-2 text-danger">{{ $message }}</label>
						@enderror
	                </div>
	                <div class="form-group">
		                <label for="slug">Nội dung chi tiết</label>
		                <textarea name="desc" id="content" class="form-control" rows="3"></textarea>
	                </div>
      			</div>
      		</div>
      		
      	</div>
      	<div class="col-md-3">
      		<div class="card">
      			<div class="card-body">
      				<div class="form-group @error('category_id') has-error @enderror">
	                    <label for="category">Small select</label>
	                    <select name="category_id" class="form-control" id="category">
	                      <option value="">Chọn một</option>
	                      @foreach($cats as $cat)
	                      <option value="{{$cat->id}}">{{$cat->title}}</option>
	                      @endforeach
	                    </select>
	                    @error('category_id')
						   <label class="error mt-2 text-danger">{{ $message }}</label>
						@enderror
	                </div>
	                <div class="form-group @error('price') has-error @enderror">
		                <label for="price">Giá</label>
		                <input id="price" class="form-control "  name="price" value="{{old('price')}}">
		                @error('price')
						   <label class="error mt-2 text-danger">{{ $message }}</label>
						@enderror
	                </div>
	                <div class="form-group @error('sale_price') has-error @enderror">
		                <label for="sale_price">Giá khuyến mãi</label>
		                <input id="sale_price" class="form-control "  name="sale_price" value="{{old('sale_price')}}">
		                @error('sale_price')
						   <label class="error mt-2 text-danger">{{ $message }}</label>
						@enderror
	                </div>
      				<div class="form-group row">
	                    <div class="col">
	                      <p class="mb-2">Trạng thái</p>
	                      <label class="toggle-switch">
	                        <input name="status" value="1" type="checkbox" checked>
	                        <span class="toggle-slider round"></span>
	                      </label>                      
	                    </div>
                    </div>
                    <div class="form-group">
	                	<input type="hidden" id="image" name="image" value="{{old('image')}}">
	                	<img src="{{url('/')}}{{old('image')}}" alt="" id="show_img"  style="width: 100%">
	                    <button type="button" class="btn btn-danger btn-block" id="select_img">Chọn ảnh</button>
	                </div>
      				<button class="btn btn-primary" type="submit" ><i class="fa fa-save"></i> Lưu lại</button>
      				<button class="btn btn-default" type="submit" ><i class="fa fa-arrow-left"></i> Bỏ qua</button>
      			</div>
      		</div>
      	</div>      </div>
      
    </fieldset>
</form>
@stop()