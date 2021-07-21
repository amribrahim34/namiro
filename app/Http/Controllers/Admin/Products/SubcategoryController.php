<?php 
namespace App\Http\Controllers\Admin\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products\Subcategory;
use App\Models\Products\Category;

class SubcategoryController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        $subcategories = Subcategory::with('category')->get();
        return view('admin.products.subcategory.index',[
            'subcategories'=>$subcategories
        ]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.products.subcategory.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required'
        ]);
        $subcategory = new Subcategory;
        $subcategory->title = $request->title;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        return redirect(route('admin.products.subcategory.index'));
      
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
        $subcategory = Subcategory::find($id);
        return view('admin.products.subcategory.edit',['subcategory'=>$subcategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id , Request $request)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->update(['title'=>$request->title]);
        $request->session()->flash('message',__('subcategories.massages.updated_succesfully'));
        return redirect(route('admin.products.subcategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id , Request $request)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        $request->session()->flash('message',__('subcategories.massages.deleted_succesfully'));
        return redirect(route('admin.products.subcategory.index'));
    }
  
}