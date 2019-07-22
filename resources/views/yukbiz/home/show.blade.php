@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>


<?php
         
                    $date = date('Y-m-d H:i',strtotime($news->created_at));
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
                 
                    $tanggalIndonesia = $hari.", ".$tgl . " " . $bln . " " . $thn;
                    $format_waktu = date('h:i',strtotime($news->created_at));  

				$tag = DB::table('tags')->leftjoin('tag_news','tag_news.id_tag','=','tags.id')
					   ->where('tag_news.id_news',$news->id)
					   ->get();

				$tag1 = DB::table('tags')->leftjoin('tag_news','tag_news.id_tag','=','tags.id')
					   ->where('tag_news.id_news',$news->id)
					   ->first();
			
            
                ?>

<section id="contentSection">
    <div class="row">
      <div class="col-xs-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="{{url('/home')}}">Home</a></li>
              <li><a href="{{url($sections->link)}}">{{$sections->name}}</a></li>
              @if($topik != null ) 
              	<li class="active">{{$topik->name}} </li>
              @endif
            </ol>

            <h1>{{$news->judul}}</h1>
            <div class="post_commentbox">  <span><i class="fa fa-calendar"></i>{{$tanggalIndonesia}} {{$format_waktu}}</span> @if($tag1 != null)<i class="fa fa-tags"></i>@foreach($tag as $tag)<a href="{{url('/tag',[$tag->name])}}"> {{$tag->name}} </a> @endforeach @endif</div>

            <div class="cl2"></div>
            
            <div id="article_con" class="fl pt20 pos_rel">
        @if($news->video == null)
            <div id="artimg">
            <div class="pb20 ovh"><div class="ovh imgfull_div"><img style="float:none;height:auto" class="imgfull" src="{{asset($news->img)}}" width='700' height='393' alt="{{$news->judul}}" /></div><div class="cl2"></div><div class="cl2"></div><div class="arial f12 pt5 grey2">{{$news->judul}}</div></div>            </div>
        @else

            <div id="artimg">
                <div class="mb20 video"><iframe width="700" height="394" src="{{$news->video}}" frameborder="0" allowfullscreen ></iframe></div>          </div>
        @endif
<!--
            <div class="cl2 mr20 fl cright w160 mb20" id="articleright">
   
    <div id="fixads"></div>
    <div id="wideskyscraper" class="bggrey" style="height:600px;width:160px;padding:0px;z-index:2">
        <div style="width:160px; height:600px;">
    <div id='div-Left-WideSkyscraper' style='width:160px; height:600px;display:none'>
    </div>

        <div id="crt-1cd5d9e8" style="width:160px;height:600px;">
            sadf
        </div>

</div> 
 </div>
</div>
-->
    
            <div class="txt-article" >
                @foreach ($items as $item)  
                    <?php echo $item ?>
                @endforeach
            </div>
           {{ $items->links() }}
       </div>
    <!--
-->

            

            <div class="social_link">
              <ul class="sociallink_nav">

                <li><a href="#"><i class="fa fa-instagram"></i></a></li>

              </ul>
            </div>
            @if(count($berita_terkait) > 0)
            <div class="related_post">
              <h2>Berita Terkait <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
              	@foreach($berita_terkait as $berita_terkait)
            	<li>
                  <div class="media"> <a class="media-left" href="{{url('/',[$berita_terkait->link])}}"> <img src="{{asset($berita_terkait->img)}}" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="{{url('/',[$berita_terkait->link])}}">{{$berita_terkait->judul}}</a> </div>
                  </div>
                </li>
				@endforeach			
              </ul>
            </div>
            @endif
          </div>
        </div>
      </div>

      <div class="col-xs-4">
      	@include('yukbiz.home.beritapopuler') 
    </div>
  </section>

@stop