<?php
namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $model = new Post;
       
        return view('post.index',[
            'model' => new Post,
            'cats' => Category::orderBy('title','ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create',[
            'cats' => Category::orderBy('title','ASC')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $this->validate($request,[
            'title' => 'required|max:180',
            'price' => 'required|numeric|min:0|not_in:0',
            'sale_price' => 'less_than:price',
            'category_id' => 'required',
            'slug' => 'required|unique:Post|max:180',
        ],[
            'title.required' => 'Tên bài viết không được để trống',
            'title.max' => 'Tên bài viết chỉ cho phép tối đa 180 ký tự',
            'slug.required' => 'Đường dẫn tĩnh được để trống',
            'slug.unique' => 'Tên bài viết không được để trống',
            'slug.max' => 'Đường dẫn tĩnh chỉ cho phép tối đa 180 ký tự',
            'price.required' => 'Giá bài viết không được để trống',
            'price.min' => 'Giá bài viết phải > 0',
            'sale_price.less_than' => 'Giá khuyến mãi phải nhỏ hơn giá gốc',
            'price.not_in' => 'Giá bài viết phải > 0',
            'price.numeric' => 'Giá bài viết phải là số là > 0',
            'category_id.required' => 'Danh mục không được để trống'
        ]);

        if (Post::create($request->all())) {
            return redirect()->route('post.index')->with('success','Thêm mới bài viết thành công');
        }else{
            return redirect()->Backendk()->with('error','Thêm mới bài viết không thành công, vui lòng thử lại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $model = Post::find($id);
         if ($model) {
             return view('post.view',compact('model'));
         }else{
            return view('error',['code'=> 404,'message'=>'Không tìm thấy bài viết này']);
         }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $model = Post::find($id);
         $cats = Category::orderBy('title','ASC')->get();
         if ($model) {
             return view('post.edit',compact('model','cats'));
         }else{
            return view('error',['code'=> 404,'message'=>'Không tìm thấy bài viết này']);
         }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');
        if (!$request->status) {
            $request->merge(['status'=>0]);
        }
        
        $this->validate($request,[
            'title' => 'required|max:180',
            'price' => 'required|numeric|min:0|not_in:0',
            'sale_price' => 'less_than:price',
            'category_id' => 'required',
            'slug' => 'required|max:180|unique:Post,slug,'.$id,
        ],[
            'title.required' => 'Tên bài viết không được để trống',
            'title.max' => 'Tên bài viết chỉ cho phép tối đa 180 ký tự',
            'slug.required' => 'Đường dẫn tĩnh được để trống',
            'slug.unique' => 'Tên bài viết không được để trống',
            'slug.max' => 'Đường dẫn tĩnh chỉ cho phép tối đa 180 ký tự',
            'price.required' => 'Giá bài viết không được để trống',
            'price.min' => 'Giá bài viết phải > 0',
            'sale_price.less_than' => 'Giá khuyến mãi phải nhỏ hơn giá gốc',
            'price.not_in' => 'Giá bài viết phải > 0',
            'price.numeric' => 'Giá bài viết phải là số là > 0',
            'category_id.required' => 'Danh mục không được để trống'
        ]);

        // dd($request->all());
         if (Post::where('id',$id)->update($request->all())) {
             return redirect()->route('post.index')->with('success','Cập nhật bài viết thành công');
         }else{
             return redirect()->route('post.index')->with('error','Cập nhật bài viết thành công');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Post::destroy([$id])) {
            return redirect()->back()->with('success','Xóa bài viết thành công');
        }

        return redirect()->back()->with('error','Xóa bài viết không thành công');
    }
}
