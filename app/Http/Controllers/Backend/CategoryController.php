<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('category.index',[
            'model' => new Category
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
            'name' => 'required|max:100',
            'slug' => 'required|unique:category|max:100',
        ],[
            'name.required' => 'Tên đanh mục không được để trống',
            'name.max' => 'Tên đanh mục chỉ cho phép tối đa 100 ký tự',
            'slug.required' => 'Đường dẫn tĩnh được để trống',
            'slug.unique' => 'Tên đanh mục không được để trống',
            'slug.max' => 'Đường dẫn tĩnh chỉ cho phép tối đa 100 ký tự'
        ]);

        if (Category::create($request->all())) {
            return redirect()->route('category.index')->with('success','Thêm mới đanh mục thành công');
        }else{
            return redirect()->back()->with('error','Thêm mới đanh mục không thành công, vui lòng thử lại');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $model = Category::find($id);
         $cats = Category::orderBy('name','ASC')->get();
         if ($model) {
             return view('category.edit',compact('model','cats'));
         }else{
            return view('error',['code'=> 404,'message'=>'Không tìm thấy danh mục này']);
         }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');
         $this->validate($request,[
            'name' => 'required|max:100',
            'slug' => 'required|max:100|unique:category,slug,'.$id,
        ],[
            'name.required' => 'Tên đanh mục không được để trống',
            'name.max' => 'Tên đanh mục chỉ cho phép tối đa 100 ký tự',
            'slug.required' => 'Đường dẫn tĩnh được để trống',
            'slug.unique' => 'Tên đanh mục không được để trống',
            'slug.max' => 'Đường dẫn tĩnh chỉ cho phép tối đa 100 ký tự'
        ]);
        if (Category::where('id',$id)->update($request->all())) {
            return redirect()->route('category.index')->with('success','Cập nhật sản phẩm thành công');
        }else{
            return redirect()->route('category.index')->with('error','Cập nhật sản phẩm thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Category::find($id);
        if ($model && $model->product->count()) {
            return redirect()->back()->with('error','Danh mục đang có sản phẩm , Không thể xóa danh mục này');
        }else{
             if (Category::destroy([$id])) {
                return redirect()->back()->with('success','Xóa danh mục thành công');
            }
        }
       

        return redirect()->back()->with('error','Xóa danh mục không thành công');
    }
}
