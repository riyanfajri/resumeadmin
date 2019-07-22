@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>

  <section id="sliderSection">
    <div class="row">
      <div class="col-xs-8">
        <div class="slick_slider">
         @foreach($subkanal as $subkanal)   
          <div class="single_iteam"> <a href="{{url('/',[$subkanal->link])}}"> <img src="{{asset($subkanal->img)}}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="{{url('/',[$subkanal->link])}}">{{$subkanal->judul}}</a></h2>
              <p>{{$subkanal->teaser}}</p>
            </div>
          </div>
         @endforeach
        </div>

        <div class="left_content">
           @if($ukm != null)
          <div class="single_post_content">
           
            <h2><span><a href="">UKM</a></span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="{{url('/',[$ukm->link])}}" class="featured_img"> <img alt="" src="{{asset($ukm->img)}}"> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{url('/',[$ukm->link])}}">{{$ukm->judul}}</a> </figcaption>
                    <p>{{$ukm->teaser}}</p>
                  </figure>
                </li>
              </ul>
            </div>
            

            <div class="single_post_content_right">
              <ul class="spost_nav">
                @foreach($ukm1 as $ukm1)
                <li>
                  <div class="media wow fadeInDown"> <a href="{{url('/',[$ukm1->link])}}" class="media-left"> <img alt="" src="{{asset($ukm1->img)}}"> </a>
                    <div class="media-body"> <a href="{{url('/',[$ukm1->link])}}" class="catg_title"> {{$ukm1->judul}}</a> </div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          @endif


          <div class="fashion_technology_area">
            @if($bisnis != null)
            <div class="fashion">
              <div class="single_post_content">

                <h2><span>Bisinis</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="{{url('/',[$bisnis->link])}}" class="featured_img"> <img alt="" src="{{asset($bisnis->img)}}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="{{url('/',[$bisnis->link])}}">{{$bisnis->judul}}</a> </figcaption>
                      <p>{{$bisnis->teaser}}</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                    @foreach($bisnis1 as $bisnis1)
                      <li>
                        <div class="media wow fadeInDown"> <a href="{{url('/',[$bisnis1->link])}}" class="media-left"> <img alt="" src="{{asset($bisnis1->img)}}"> </a>
                          <div class="media-body"> <a href="{{url('/',[$bisnis1->link])}}" class="catg_title">{{$bisnis1->judul}}</a> </div>
                        </div>
                      </li>
                    @endforeach 
                </ul>
              </div>
            </div>
            @endif

            @if($keuangan !=null)
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Keuangan</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="{{url('/',[$keuangan->link])}}" class="featured_img"> <img alt="" src="{{asset($keuangan->img)}}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="{{url('/',[$keuangan->link])}}">{{$keuangan->judul}}</a> </figcaption>
                      <p>{{$keuangan->teaser}}</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                    @foreach($keuangan1 as $keuangan1)
                      <li>
                        <div class="media wow fadeInDown"> <a href="{{url('/',[$keuangan1->link])}}" class="media-left"> <img alt="" src="{{asset($keuangan1->img)}}"> </a>
                          <div class="media-body"> <a href="{{url('/',[$keuangan1->link])}}" class="catg_title"> {{$keuangan1->judul}}</a> </div>
                        </div>
                      </li>
                    @endforeach
                </ul>
              </div>
            </div>
            @endif
          </div>

          @if($gayahidup != null)
          <div class="single_post_content">
            <h2><span>Gaya Hidup & Otomotif</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="{{url('/',[$gayahidup->link])}}"> <img src="{{asset($gayahidup->img)}}" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{url('/',[$gayahidup->link])}}">{{$gayahidup->judul}}</a> </figcaption>
                    <p>{{$gayahidup->teaser}}</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                @foreach($gayahidup1 as $gayahidup1)
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html{{url('/',[$gayahidup1->link])}}" class="media-left"> <img alt="" src="{{asset($gayahidup1->img)}}"> </a>
                      <div class="media-body"> <a href="{{url('/',[$gayahidup1->link])}}" class="catg_title"> {{$gayahidup1->judul}}</a> </div>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
          @endif
        </div>

      </div>
      <div class="col-xs-4">
        <aside class="right_content">
          <div class="single_sidebar">
          <h2><span>Berita Terkini</span></h2>
            <ul class="spost_nav">
                @foreach($newstengah as $newstengah1)
                  <li>
                    <div class="media"> <a href="{{url('/',[$newstengah1->link])}}" class="media-left"> <img alt="" src="{{asset($newstengah1->img)}}"> </a>
                      <div class="media-body"> <a href="{{url('/',[$newstengah1->link])}}" class="catg_title"> {{$newstengah1->judul}}</a> </div>
                    </div>
                  </li>
                @endforeach
            </ul>
            {!!$newstengah->links()!!}
        </div>
    </aside>

    <aside class="right_content">
          <div class="single_sidebar">
          <h2><span>Berita Populer</span></h2>

          <ul class="spost_nav">
                @foreach($beritapopuler as $beritapopuler)
                  <li>
                    <div class="media"> <a href="{{url('/',[$beritapopuler->link])}}" class="media-left"> <img alt="" src="{{asset($beritapopuler->img)}}"> </a>
                      <div class="media-body"> <a href="{{url('/',[$beritapopuler->link])}}" class="catg_title"> {{$beritapopuler->judul}}</a> </div>
                    </div>
                  </li>
                @endforeach  
            </ul>
        </div>
    </aside>  

    <aside class="right_content">
          <div class="single_sidebar">
          <h2><span>Tag Populer</span></h2>
          <ul>
                @foreach($tagpopuler as $tagpopuler)
                  <li class="cat-item"><a href="{{url('/tag',[$tagpopuler->name])}}">{{$tagpopuler->name}}</a></li>
                @endforeach  
            </ul>
        </div>
    </aside> 
      </div>
    </div>
  </section>



          
<!-- End comScore Tag -->

@stop

