@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>

<div class="cl2"></div>
			<div class="content">
		<div class="fl w677">
			<div class="bsh ovh">	
	<div class="fbo bsht p1030"><h1 class="f22">Indeks Tag </h1></div>
	<div class="pl20">
		

		<div class="lsi pt20 pb20 mb20" style="">
			<ul>
				@foreach($berita as $berita1)
				<li class="ptb10">
					<h3><a href="{{url('/tag',[$berita1->name])}}" class="f14 fbo2" title="{{$berita1->name}}">{{$berita1->name}}</a></h3>
				</li>
				@endforeach

			</ul>
		</div>
		 <div id="paginga">
	        {!!$berita->links()!!}
	    </div>
				<div class="cl2"></div>
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
 @include('yukbiz.home.beritapopuler') 
<!-- END CRITEO TAG -->		
<!-- End comScore Tag -->

@stop