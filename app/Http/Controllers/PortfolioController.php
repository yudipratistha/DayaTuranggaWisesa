<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
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
        $portfolio_tags = PortfolioTag::all();
        $portfolios = Portfolio::all();
        return view('admin.portfolio.portfolio', compact('portfolios', 'portfolio_tags'));
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
        $portfolio = new Portfolio();
        $portfolio->portfolio_name = $request->portfolio_title;
        $portfolio->portfolio_tag_id = $request->portfolio_tag;

        $portfolio_extension = $request->file('portfolio_photo')->extension();

        $portfolio_path = 'portfolio/';
        Storage::disk('public')->makeDirectory($portfolio_path);

        $path = $request->file('portfolio_photo')->storeAs(
            'public/'.$portfolio_path, $request->portfolio_title.'.'.$portfolio_extension
        );
        $portfolio->portfolio_photo_path = $portfolio_path.$request->portfolio_title.'.'.$portfolio_extension;
        
        $portfolio->save();

        return response()->json('success');
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
        $portfolio = Portfolio::find($id);
        
        return response()->json(array('data_portfolio' => $portfolio));
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
        $portfolio = Portfolio::find($id);
        $portfolio->portfolio_name = $request->portfolio_title_edit;
        $portfolio->portfolio_tag_id = $request->portfolio_tag_edit;

        $portfolio_photo_extension = $request->file('portfolio_photo_edit');

        if(!empty($portfolio_photo_extension)){
            $portfolio_photo_path = $portfolio->portfolio_photo_path;
            Storage::delete('public/'.$portfolio->portfolio_photo_path);
            $portfolio_photo_path = substr($portfolio_photo_path, 0, -17);
            $path = $request->file('portfolio_photo_edit')->storeAs(
                'public/'.$portfolio_photo_path, $request->portfolio_title_edit.'.jpg'
            );
            $portfolio->portfolio_photo_path = $portfolio_photo_path.$request->portfolio_title_edit.'.jpg';
        }

        $portfolio->save();

        // $portfolio_tag = Portfolio::with(array('PortfolioTag'=>function($query){
        //     $query->select('id','portfolio_tag_name');
        // }))->get();
        // return response()->json($portfolio_tag);
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
        $portfolio = Portfolio::find($id);
        $portfolio_photo_path = substr($portfolio->portfolio_photo_path, 0, -9);
        Storage::deleteDirectory('public/'.$portfolio_photo_path);
        $portfolio->delete();

        return response()->json('success');
    }
}
