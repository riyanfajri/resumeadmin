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
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <ol class="breadcrumb">
              <li><a href="{{url('/home')}}">Home</a></li>
              <li><a href="#">Index</a></li>
            </ol>
            <ul class="spost_nav">
                @foreach($news as $news1)
                 <li>
                      <a href=""><img alt="" class="gambar" src="{{asset($news1->img)}}"> </a>
                                
                    <a class="catg_title" style="font-weight: bold; font-size: 19px;" href="{{url('/',[$news1->link])}}">{{$news1->judul}}</a>
                    <p>{{$news1->teaser}}</p>
                 </li>
               @endforeach
            </ul>
            {!!$news->links()!!} 
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        @include('yukbiz.home.beritapopuler')    
        
      </div>
    </div>
  </section>


@section('javascript')
<script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>   
     <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "HH:mm:ss"
        });
    </script>

     @parent
     @stop
@stop