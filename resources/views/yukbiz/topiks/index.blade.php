@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">TOPIK</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-3 mb-3 box-shadow">

                    <div class="f20 fbo2 bsht p2030">
                        <h2 class="f16 grey">TOPIK</h2>
                        <h1 class='f28 red'>{{$nametopik->name}}</h1>
                    </div>

                    <div class="" >
        <div class="p2030 pb2">
            <div style="height:20px">
    <div class="fl mr10" >
        <div class="fb-like" data-href="" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" data-share="true"></div>
    </div> 
    <div class="fl mr10" >
        <a href="http://twitter.com/share" data-url="" data-text="Topik: Pekanbaru - Tribunnews.com" class="twitter-share-button" data-count="horizontal" data-via="tribunnews" title="Tweet" style=" line-height:0px;">Tweet</a>
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    </div>
    <div class="fl">
        <!-- Place this tag where you want the +1 button to render. -->
        <div class="g-plusone" data-size="medium" data-annotation="bubble" data-href="http://pekanbaru.tribunnews.com/topic/pekanbaru"></div>
        
        <!-- Place this tag after the last +1 button tag. -->
        <script type="text/javascript">
          window.___gcfg = {lang: 'id'};
        
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
    </div>
    <div class="cl2"></div>
</div>      </div>
                <div class="lsi bdr">
            <ul>
                @foreach($topiks as $topiks1)
                            <li class="p2030" style="padding-top:0px; line-height:0px;">
                                        <div class="fl mr15 pos_rel" >
                        <a href="{{ route($topiks1->menu.'.show',[$topiks1->id]) }}" title="{{$topiks1->judul}}">
                            <img src="{{asset($topiks1->img)}}" class="img bgwhite" eight="100" width="130" alt="{{$topiks1->judul}}"  style="padding-top:10px" />
                                                    </a>    
                    </div>
                                        <div>
                        <h3 class="f22 ln24 fbo" >
                            <a href="{{ route($topiks1->menu.'.show',[$topiks1->id]) }}" title="RPAI Sosialisasikan Ambulance Prioritas Sambil Berbagi Takjil Kepada Pengendara">
                                {{$topiks1->judul}}                            </a>
                        </h3>
                         <time class="grey pt5">Sabtu, 18 Mei 2019 12:43</time>
                         <h5 class="black pt5">Relawan Patwal Ambulance Indonesia (RPAI) Koordinator wilayah Riau menggelar kegiatan berbagi takjil, kepada setiap pengendara</h5>
                    </div>
                    <div class="cl2"></div>                 
                </li>
                @endforeach
                <nav>
                    <ul class="pagination">
                        {!! $topiks->links() !!}
                    </ul>
                </nav>
                </ul>
                </div>
                </div>  
                


                    </div>
                </div>

               @include('yukbiz.kanan.kanan')
        </div>
    </div>

    @stop
    @section('javascript')
     @parent

    




@stop