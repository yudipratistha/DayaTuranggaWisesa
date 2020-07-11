<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Service;
use App\PortfolioTag;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::all();
        $portfolio_tags = PortfolioTag::all();
        // $portfolios = Portfolio::all();
        $portfolios = Portfolio::with(array('PortfolioTag'=>function($query){
            $query->select('id','portfolio_tag_name');
        }))->get();
        // $sliders = Storage::disk('public')->get('slider/test2.jpeg'); 
        // return redirect($sliders);
        return view('view.home', compact('sliders', 'services', 'portfolio_tags', 'portfolios'));
    }
}
