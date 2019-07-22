<?php use Carbon\Carbon; ?>
<aside class="right_content">
          <div class="single_sidebar">
          <h2><span>Berita Populer</span></h2>
              <ul class="spost_nav">
                    @foreach($beritapopuler as $beritapopuler)
                      <li class="pb15 art-list pos_rel">
                        <div class="media"> <a href="{{url('/',[$beritapopuler->link])}}" class="media-left"> <img alt="" src="{{asset($beritapopuler->img)}}"> @if($beritapopuler->video != null) <i class="fa fa-play playoverlay"></i> @endif </a>
                          <div class="media-body"> <a href="{{url('/',[$beritapopuler->link])}}" class="catg_title"> {{$beritapopuler->judul}}</a> </div>
                        </div>
                      </li>
                    @endforeach  
                </ul>
            </div>
        </aside> 