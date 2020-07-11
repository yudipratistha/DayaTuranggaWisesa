<?php

namespace App\Http\Controllers;

use App\PortfolioTag;
use Illuminate\Http\Request;

class PortfolioTagController extends Controller
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
        $portfolioTags = PortfolioTag::all();
        return view('admin.portfolio.portfolio-tag', compact('portfolioTags'));
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
        $portfolio_tag = new PortfolioTag();
        $portfolio_tag->portfolio_tag_name = $request->portfolio_tag_name;
        $portfolio_tag->save();

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
        $portfolio_tag = PortfolioTag::find($id);
        
        return response()->json(array('data_portfolio_tag' => $portfolio_tag));
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
        $portfolio_tag = PortfolioTag::find($id);
        $portfolio_tag->portfolio_tag_name = $request->portfolio_tag_name_edit;
        $portfolio_tag->save();

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
        $portfolio_tag = PortfolioTag::find($id);
        $portfolio_tag->delete();

        return response()->json('success');
    }
}
