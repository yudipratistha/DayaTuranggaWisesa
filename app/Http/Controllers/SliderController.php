<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->slider_name = $request->slider_name;
        $slider->slider_description = $request->slider_description;
        $slider->slider_animated = $request->slider_animated;

        $slider_photo_extension = $request->file('slider_photo')->extension();

        $slider_path = 'slider/';
        Storage::disk('public')->makeDirectory($slider_path);

        $path = $request->file('slider_photo')->storeAs(
            'public/'.$slider_path, $request->slider_name.'.'.$slider_photo_extension
        );
        $slider->slider_photo_path = $slider_path.$request->slider_name.'.'.$slider_photo_extension;

        $slider->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return response()->json(array('data_slider' => $slider));
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
        $this->validate($request, ['slider_photo_edit' => 'file|max:5000']);

        $slider = Slider::find($id);
        $slider->slider_name = $request->slider_name_edit;
        $slider->slider_description = $request->slider_description_edit;
        $slider->slider_animated = $request->slider_animated_edit;
        
        $slider_photo_extension = $request->file('slider_photo_edit');

        if(!empty($slider_photo_extension)){
            $slider_photo_path = $slider->slider_photo_path;
            Storage::delete('public/'.$slider->slider_photo_path);
            $slider_photo_path = substr($slider_photo_path, 0, -10);
            $path = $request->file('slider_photo_edit')->storeAs(
                'public/'.$slider_photo_path, $request->slider_name_edit.'.jpg'
            );
            $slider->slider_photo_path = $slider_photo_path.$request->slider_name_edit.'.jpg';
        }

        $slider->save();
        return response()->json('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider_photo_path = substr($slider->slider_photo_path, 0, -10);
        Storage::deleteDirectory('public/'.$slider_photo_path);
        $slider->delete();
        return response()->json('success');
    }
}
