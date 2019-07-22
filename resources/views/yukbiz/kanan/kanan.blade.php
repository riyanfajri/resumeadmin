<?php use Carbon\Carbon; ?>
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
                    <img src="{{asset($beritapopuler->img)}}" class="pa5 shou bgwhite" eight="69" width="90" alt="{{asset($beritapopuler->judul)}}" />
                                    </a>
            </div>
                        <div class="mt5 mr110">
                <h3 style="line-height:12px;">
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