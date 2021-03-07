<?php 

namespace App\Http\Controllers\Admin\Specifications;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specifications\Material;

class MaterialController extends Controller 
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $materials = Material::get(); 
        return view('admin.specifications.material.index',['materials'=>$materials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.specifications.material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);
        $material = new Material;
        $material->title = $request->name;
        $material->save();
        return redirect(route('admin.specifications.material.index'));
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
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      
    }
  
}