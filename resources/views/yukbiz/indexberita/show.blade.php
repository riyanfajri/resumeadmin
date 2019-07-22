@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/41.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Travel</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Index Berita</li>
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
                    <div class="pt10">
              
            <form action="{{ url('tampilkan') }}" method="GET">
                <span class='fbo f14 pr20'>Halaman 1</span>
                
                

                    <input class="datetime input" name="date" type="text">
                     
                <button class="button2" id="godate">Tampilkan</button>
                <span class="pl20 pr20"></span>
             </form>

            
            
                    
            </select>
        </div>
                <div class="pt10 pb10">
            <ul class="lsi">
                @foreach($indexberita as $indexberita1)

                <?php
         
                    $date = date('Y-m-d H:i',strtotime($indexberita1->created_at));
                    if($date == '0000-00-00')
                        return 'Tanggal Kosong';
                 
                    $tgl = substr($date, 8, 2);
                    $bln = substr($date, 5, 2);
                    $thn = substr($date, 0, 4);
                 
                    switch ($bln) {
                        case 1 : {
                                $bln = 'Januari';
                            }break;
                        case 2 : {
                                $bln = 'Februari';
                            }break;
                        case 3 : {
                                $bln = 'Maret';
                            }break;
                        case 4 : {
                                $bln = 'April';
                            }break;
                        case 5 : {
                                $bln = 'Mei';
                            }break;
                        case 6 : {
                                $bln = "Juni";
                            }break;
                        case 7 : {
                                $bln = 'Juli';
                            }break;
                        case 8 : {
                                $bln = 'Agustus';
                            }break;
                        case 9 : {
                                $bln = 'September';
                            }break;
                        case 10 : {
                                $bln = 'Oktober';
                            }break;
                        case 11 : {
                                $bln = 'November';
                            }break;
                        case 12 : {
                                $bln = 'Desember';
                            }break;
                        default: {
                                $bln = 'UnKnown';
                            }break;
                    }
                 
                    $hari = date('N', strtotime($date));
                    switch ($hari) {
                        case 0 : {
                                $hari = 'Minggu';
                            }break;
                        case 1 : {
                                $hari = 'Senin';
                            }break;
                        case 2 : {
                                $hari = 'Selasa';
                            }break;
                        case 3 : {
                                $hari = 'Rabu';
                            }break;
                        case 4 : {
                                $hari = 'Kamis';
                            }break;
                        case 5 : {
                                $hari = "Jum'at";
                            }break;
                        case 6 : {
                                $hari = 'Sabtu';
                            }break;
                        default: {
                                $hari = 'UnKnown';
                            }break;
                    }
                 
                    $tanggalIndonesia = $hari.",".$tgl . " " . $bln . " " . $thn;
                    $format_waktu = date('h:i',strtotime($indexberita1->created_at));                 
                ?>

                            <li class="ptb15">
                    <time class="grey">{{$tanggalIndonesia}} {{$format_waktu}}</time>
                                        <h4 class="red fbo2 f14"><a href="" title="Piala FA">Piala FA</a></h4>
                                        <h3 class="f16 fbo">
                        <a href="{{ route($indexberita1->menu.'.show',[$indexberita1->id]) }}" title="{{$indexberita1->judul}} ">
                           {{$indexberita1->judul}}                      
                        </a>
                    </h3>
                </li>
                @endforeach
                <nav>
                    <ul class="pagination">
                        {!! $indexberita->links() !!}
                    </ul>
                </nav>

            </ul>
        </div>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                       
                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-3">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Berita Populer</h5>
                </div>

                <!-- Catagory Widget -->
                
<div class="mb20 populer">   
    <div class="mt5 bdr mb15"></div>    
    <ul>
        @foreach($beritapopuler as $beritapopuler)
        <li id='div-NativeAds-Populer-1' class="pb5" style="display:none">
            <script type='text/javascript'>
            googletag.cmd.push(function() { googletag.display('div-NativeAds-Populer-1'); });
            </script>
        </li> 

        <li class="pb15 art-list pos_rel">
                        <div class="fr pos_rel">
                <a href="{{ route('news.show',[$beritapopuler->id]) }}" title="{{$beritapopuler->judul}}">
                    <img src="{{asset($beritapopuler->img)}}" class="pa5 shou bgwhite" eight="69" width="90" alt="ilustrasi-wanita-tidur-sleeping.jpg" />
                                    </a>
            </div>
                        <div class="mt5 mr110">
                <h3>
                    <a href="{{ route('news.show',[$beritapopuler->id]) }}">
                        {{$beritapopuler->judul}}                    </a>
                </h3>
                <div class="grey pt3"><span class="fa fa-clock-o mr7"></span><time class="grey foot timeago" title="2019-05-16 04:13:22">{{Carbon::parse("$beritapopuler->created_at")->diffForHumans()}} </time></div>
            </div>
            <div class="sharecot pos_abs nw" data-href="" data-title="" data-via="tribunpekanbaru"></div>
            <div class="cl2"></div>
        </li>
          @endforeach      
            </ul>
</div>  
                

            </div>
                </div>
            </div>
        </div>
    </div>

    @stop
    @section('javascript')
     @parent

    




@stop