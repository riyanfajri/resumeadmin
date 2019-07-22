@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>
<div class="cl2"></div>
			<div class="content">
		<div class="fl w677">
			
<div class="bsh ovh" style="min-height:1550px">
	<div class="f20 fbo2 bsht p2030">
		<h2 class="f16 grey">TOPIK</h2>
		<h1 class='f28 red'>{{$topik->name}}</h1>
	</div>
	<div class="" >
		<div class="p2030 pb2">
			<div style="height:20px">
	<div class="fl mr10" >
		<div class="fb-like" data-href="{{url('/topik',[$topik->name])}}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" data-share="true"></div>
	</div> 
	<div class="fl mr10">
		<a href="https://twitter.com/share" data-url="{{url('/topik',[$topik->name])}}" data-text="Topik: {{$topik->name}} - yukbiz.com" class="twitter-share-button" data-count="horizontal" data-via="yukbiz" title="Tweet">Tweet</a>
		<script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
	</div>

	<div class="fl">
		<!-- Place this tag where you want the +1 button to render. -->
		<div class="g-plusone" data-size="medium" data-annotation="bubble" data-href="https://pekanbaru.tribunnews.com/topic/siak"></div>
		
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
</div>		</div>
				<div class="lsi bdr">
	        <ul>
	        	@foreach($berita as $berita1)

	        	<?php
         
                    $date = date('Y-m-d H:i',strtotime($berita1->created_at));
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
                    $format_waktu = date('h:i',strtotime($berita1->created_at));  
            
                ?>
				<li class="p2030">
					<div class="fl mr15 pos_rel">
						<a href="{{url('/',[$berita1->link])}}" title="{{$berita1->judul}}">
							<img src="{{asset($berita1->img)}}" class="img bgwhite" eight="100" width="130" alt="{{$berita1->judul}}" />
													</a>	
					</div>
										<div>
						<h3 class="f20 ln24 fbo">
							<a href="{{url('/',[$berita1->link])}}" title="{{$berita1->judul}}">
								{{$berita1->judul}}							</a>
						</h3>
		  			     <time class="grey pt5">{{$tanggalIndonesia}} {{$format_waktu}}</time>
		  			     <h4 class="black pt5">{{$berita1->teaser}}</h4>
					</div>
					<div class="cl2"></div>					
				</li>  
      			@endforeach
		    </ul>
		</div>
	     <div id="paginga" class="p2030 mb10">
	           {!!$berita->links()!!}
	     </div>	
	</div>
</div>		</div>
		<div class="fr w300" id="boxright"   >
	    	<div id="boxright_fix" class="w300" >
			<div id='div-Right-MediumRectangle-1' style='width:300px; height:auto;min-height:250px;height:auto;display:none' class='mb20'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-Right-MediumRectangle-1'); });
</script>
</div>
<!-- BEGIN 477989 - Tribunnews - ID - 300x250 - Adblocking  -->
<div id="crt-1c7d8888" style="width:300px;height:250px;"></div>
<script type="text/javascript">
Criteo.events.push(function() {
    Criteo.DisplayAcceptableAdIfAdblocked({
        "zoneid": 477989,
        "containerid": "crt-1c7d8888",
        "overrideZoneFloor": false
    });
});
</script>
<!-- END CRITEO TAG -->		
@include('yukbiz.home.beritapopuler')    
<!-- End comScore Tag -->

@stop