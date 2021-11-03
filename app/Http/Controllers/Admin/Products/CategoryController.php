<?php 
namespace App\Http\Controllers\Admin\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products\Category;

class CategoryController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.products.category.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      return view('admin.products.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' =>'required',
      ]);
      $category = new Category;
      $category->title = $request->name;
      $category->save();
      $request->session()->flash('message',__('categories.massages.created_succesfully'));
      return redirect(route('admin.products.category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $category = Category::find($id);
      return view('admin.products.category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id , Request $request)
    {
      $category = Category::find($id);
      $category->update(['title'=>$request->title]);
      $request->session()->flash('message',__('categories.massages.updated_succesfully'));
      return redirect(route('admin.products.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id , Request $request)
    {
      $category = Category::find($id);
      $category->delete();
      $request->session()->flash('message',__('categories.massages.deleted_succesfully'));
      return redirect(route('admin.products.category.index'));
    }
  
}