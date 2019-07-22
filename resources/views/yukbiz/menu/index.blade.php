@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>

<style>
	.gambar{
	width: 160px;
	float: left;
	margin-right: 10px;
}
</style>

<section id="contentSection">
    <div class="row">
      <div class="col-xs-8">
        <div class="left_content">
          <div class="contact_area">
          	<ol class="breadcrumb">
              <li><a href="{{url('/home')}}">Home</a></li>
              <li><a href="#">{{$linkmenu->name}}</a></li>
            </ol>
            <ul class="spost_nav">
            	@foreach($berita as $berita1)
	             <li>
	                  <a href=""><img alt="" class="gambar" src="{{asset($berita1->img)}}"> </a>
	                 			
					<a class="catg_title" style="font-weight: bold; font-size: 19px;" href="{{url('/',[$berita1->link])}}">{{$berita1->judul}}</a>
					<p>{{$berita1->teaser}}</p>
	             </li>
               @endforeach
          	</ul>
          	{!!$berita->links()!!} 
          </div>
        </div>
      </div>

      <div class="col-xs-4">
        @include('yukbiz.home.beritapopuler')    
        
      </div>
    </div>
  </section>



@stop