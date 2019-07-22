@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>

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
                            <li class="breadcrumb-item active" aria-current="page">Keuangan</li>
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
                    @foreach($keuangans as $keuangans1)

                    <?php $isinews = DB::table('isinews')->where('id_keuangan',$keuangans1->id)->first(); ?>
                        <!-- Single Catagory Post -->
                        <li class='p1520 art-list pos_rel' data-sort="1">   
                            <div class="fr mt5 pos_rel">
                                <a href="{{ route('keuangans.show',[$keuangans1->id]) }}">
                                    <img src="{{asset($keuangans1->img)}}" class="bgwhite" height="90" width="120" alt="{{asset($keuangans1->judul)}}" style="padding-top:18px"  />
                                </a>
                            </div>
                            <div class='mr140'">
                                <h3 style="line-height:12px;">
                                    <a href="{{ route('keuangans.show',[$keuangans1->id]) }}">
                                        {{$keuangans1->judul}}                    
                                    </a>
                                </h3>
                                <div class="grey2 pt5 f13 ln18">
                                    {{ substr($isinews->isi, 0, 135)}}
                                </div>
                                <div class="grey pt5">
                                        
                                    <span class="mr7">
                                        <a href="" title="Regional" class="fbo2 tsa-2">Regional</a>
                                    </span>
                                                        <span class='fa fa-clock-o mr7'></span>
                                    <time class="foot timeago" title="2019-05-17 08:57:52">{{Carbon::parse("$keuangans1->created_at")->diffForHumans()}} </time>
                                </div>
                                <div class="sharecot pos_abs nw" data-href="" data-title="{{$keuangans1->judul}}" data-via="tribunjateng"></div>
                            </div>
                            <div class="cl2"></div>
                        </li>
                    @endforeach
                        <!-- Pagination -->
                        
                        <nav>
                            <ul class="pagination">
                                {!! $keuangans->links() !!}
                            </ul>
                        </nav>

                    </div>
                </div>

                @include('yukbiz.kanan.kanan')
        </div>
    </div>

    @stop