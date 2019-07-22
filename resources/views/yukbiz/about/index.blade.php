@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>
<section id="contentSection">
    <div class="row">
      <div class="col-xs-12">
        <div class="left_content">
          <div class="contact_area">
            <h2>About Us</h2>
            <?php echo $about->keterangan ?>
           
          </div>
        </div>
      </div>
    </div>
</section>
 
       

@stop