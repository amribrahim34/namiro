<?php 
namespace App\Http\Controllers\Admin\Specifications;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specifications\Size;
use Illuminate\Support\Facades\Auth;

class SizeController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sizes = Size::get(); 
        return view('admin.specifications.size.index',['sizes'=>$sizes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.specifications.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);
        $size = new Size;
        $size->title = $request->name;
        $size->save();
        return redirect(route('admin.specifications.size.index'));
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
        $size = Size::find($id);
        return view('admin.specifications.size.edit',['size'=>$size]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id , Request $request)
    {
        $size = Size::find($id);
        $size->update(['title'=>$request->title]);
        $request->session()->flash('message',__('sizes.massages.updated_succesfully'));
        return redirect(route('admin.specifications.size.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id , Request $request)
    {
        $size = Size::find($id);
        $size->delete();
        $request->session()->flash('message',__('sizes.massages.deleted_succesfully'));
        return redirect(route('admin.specifications.size.index'));
    }
  
}