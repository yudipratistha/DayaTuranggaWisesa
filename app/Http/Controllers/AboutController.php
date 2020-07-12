<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about =  About::all();
        // return response()->json($about);
        return view('admin.about.about', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, ['about_photo' => 'file|max:5000']);
        $about_count = About::all();
       
        if($about_count->isEmpty()){
            $about = new About();
            $about->about_title = $request->about_title;
            $about->about_location = $request->about_location;
            $about->about_description = $request->about_description;

            $about_photo_extension = $request->file('about_photo')->extension();

            $about_path = 'about/';
            Storage::disk('public')->makeDirectory($about_path);

            $path = $request->file('about_photo')->storeAs(
                'public/'.$about_path, $request->about_title.'.'.$about_photo_extension
            );
            $about->about_photo_path = $about_path.$request->about_title.'.'.$about_photo_extension;
        }
        
        $about->save();

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
        $about = About::find($id);
        
        return response()->json(array('data_about' => $about));
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
        $this->validate($request, ['about_photo' => 'file|max:5000']);

        $about = About::find($id);
        $about->about_title = $request->about_title;
        $about->about_location = $request->about_location;
        $about->about_description = $request->about_description;
        
        $about_photo_extension = $request->file('about_photo');

        if(!empty($about_photo_extension)){
            $about_photo_path = $about->about_photo_path;
            Storage::delete('public/'.$about->about_photo_path);
            $about_photo_path = substr($about_photo_path, 0, 6);
            $path = $request->file('about_photo')->storeAs(
                'public/'.$about_photo_path, $request->about_title.'.jpg'
            );
            $about->about_photo_path = $about_photo_path.$request->about_title.'.jpg';
        }

        $about->save();
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
        //
    }
}
