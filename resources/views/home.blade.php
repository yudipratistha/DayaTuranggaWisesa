@extends('layouts.apps')

@section('content')
<ul class="filters">
    <li><a href="javascript:void(0);" data-filter="*">Todos</a></li>
    <li><a href="javascript:void(0);" data-filter="city">Cidade</a></li>
    <li><a href="javascript:void(0);" data-filter="cats">Gatos</a></li>
</ul>
<div id="container" class="isotope">
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/1"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/2"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/3"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/450/250/city/4"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/5"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/6"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/7"></div>
    <div class="grid-item" data-filter="city"><img src="http://lorempixel.com/250/250/city/8"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/1"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/2"></div>
    <div class="grid-item" data-filter="cats"><img src="http://lorempixel.com/250/250/cats/3"></div>

</div>

@endsection
