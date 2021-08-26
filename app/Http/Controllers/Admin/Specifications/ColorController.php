<?php 
namespace App\Http\Controllers\Admin\Specifications;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specifications\Color;


class ColorController extends Controller 
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $colors = Color::get(); 
        return view('admin.specifications.color.index',['colors'=>$colors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.specifications.color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required']);
        $color = new Color;
        $color->title = $request->title;
        $color->save();
        return redirect(route('admin.specifications.color.index'));
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
        $color = Color::find($id);
        return view('admin.specifications.color.edit',['color'=>$color]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id , Request $request)
    {
        $color = Color::find($id);
        $color->update(['title'=>$request->title]);
        $request->session()->flash('message',__('colors.massages.updated_succesfully'));
        return redirect(route('admin.specifications.color.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id , Request $request)
    {
        $color = Color::find($id);
        $color->delete();
        $request->session()->flash('message',__('colors.massages.deleted_succesfully'));
        return redirect(route('admin.specifications.color.index'));
    }

}
