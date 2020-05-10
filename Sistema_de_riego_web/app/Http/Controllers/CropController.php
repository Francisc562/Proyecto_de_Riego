<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crop;

class CropController extends Controller
{   
   
    $crops = Crop::latest()->paginate(5);
    return view('admin.crop.index',compact('crops'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
	

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crop.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name'=> 'required',
            'type'=>'required',
            'humidity'=>'required',
              
        ]);

        Crop::create($request->all());

        return redirect()->route('crop.index')
                        ->with('success','Cultivo Registrado con exito');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crop = Crop::find($id);
        return view('admin.crop.show',compact('crop'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crop = Crop::find($id);
        return view('admin.crop.edit',compact('crop'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name'=> 'required',
            'type'=>'required',
            'humidity'=>'required'
        ]);

        Crop::find($id)->update($request->all());

        return redirect()->route('crop.index')
                        ->with('warning','Cultivo Actualizado con exito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Crop::find($id)->delete();

        return redirect()->route('Crop.index')
                        ->with('error','Cultivo eliminado');
    }