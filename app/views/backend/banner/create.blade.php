@extends('backend')
@section('icon','fa-file-word-o')
@section('title','Thêm mới sản phẩm')
@section('modal_file','Thư viện hình ảnh')

@section('toolbar')
	@section('back','Quay lại danh sách')
@stop()
@section('main')
<form class="cmxform" method="POST" action="{{route('banner.store')}}" novalidate="novalidate">
	@csrf
    <fieldset>
      <div class="row">
      	<div class="col-md-9">
      		<div class="card">
      			<div class="card-body">
	      			<div class="form-group @error('name') has-error @enderror">
  		                <label for="name">Tên banner (Bắt buộc, tối đa 200 ký tự)</label>
  		                <input id="name" class="form-control" name="name" value="{{old('name')}}">
  		                @error('name')
  						   <label class="error mt-2 text-danger">{{ $message }}</label>
  						@enderror
		            </div>
		            
	                <div class="form-group @error('link') has-error @enderror">
		                <label for="link">Đường dẫn (Bắt buộc, tối đa 200 ký tự)</label>
		                <input id="link" class="form-control "  name="link" value="{{old('link')}}">
		                @error('link')
						   <label class="error mt-2 text-danger">{{ $message }}</label>
						@enderror
	                </div>
	                <div class="form-group">
		                <label for="desc">Nội dung chi tiết</label>
		                <textarea name="desc" id="desc" class="form-control">{{old('desc')}}</textarea>
	                </div>
      			</div>
      		</div>
      		
      	</div>
      	<div class="col-md-3">
      		<div class="card">
      			<div class="card-body">
					<div class="form-group @error('ordering') has-error @enderror">
  		                <label for="ordering">Thứ tự sắp xếp</label>
  		                <input id="ordering" class="form-control" name="ordering" value="{{old('ordering')}}">
  		                @error('ordering')
  						   <label class="error mt-2 text-danger">{{ $message }}</label>
  						@enderror
		            </div>
		            <div class="form-group @error('position') has-error @enderror">
  		                <label for="position">Kiểu banner</label>
  		               <select name="position" class="form-control">
  		               	<option value="banner">Quảng cáo đầu trang</option>
  		               	<option value="ads">Quảng cáo bên trang</option>
  		               </select>
  		                @error('position')
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
	                	<img src="{{url('/')}}{{old('image')}}" alt="" id="show_img" class="img-responsive">
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