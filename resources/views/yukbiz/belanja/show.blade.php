@extends('yukbiz.layouts.app')

@section('content')

<?php use Carbon\Carbon; ?>

    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                             <li class="breadcrumb-item"><a href="{{url('/belanja')}}"><i class="fa fa-home" aria-hidden="true"></i> Belanja</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$belanja->judul}}</li>
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

                    <?php $isinews = DB::table('isinews')->where('id_produk',$belanja->id)->paginate(1); ?>
                        <!-- Single Catagory Post -->
                        <div class="blog-thumb mb-30">
                            <img src="{{asset($belanja->img)}}" alt="">
                        </div>

                        <div class="post-content">
                             <div class="post-meta">
                                    <a href="#">{{Carbon::parse("$belanja->created_at")->toFormattedDateString()}}</a>
                                   
                                </div>
                            <h1 class="post-title">{{$belanja->judul}}</h1>
                            <!-- Post Meta -->
                            <p style="line-height:25px;">
                                @foreach($isinews as $isinews1)
                                    <?php echo nl2br(str_replace('', '  ', htmlspecialchars($isinews1->isi))) ?>
                                @endforeach
                            </p>

                            <!-- Like Dislike Share 
                            <div class="like-dislike-share my-5">
                                <h4 class="share">240<span>Share</span></h4>
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                            </div>
                            -->
                            <!-- Post Author 
                            <div class="post-author d-flex align-items-center">
                                <div class="post-author-thumb">
                                    <img src="img/bg-img/52.jpg" alt="">
                                </div>
                                <div class="post-author-desc pl-4">
                                    <a href="#" class="author-name">Alan Shaerer</a>
                                    <p>Duis tincidunt turpis sodales, tincidunt nisi et, auctor nisi. Curabitur vulputate sapien eu metus ultricies fermentum nec vel augue. Maecenas eget lacinia est.</p>
                                </div>
                            </div>
                            -->
                    </div>
         
                        <!-- Pagination -->
                        
                        <nav>
                            <ul class="pagination">
                               {!!$isinews->links()!!}
                            </ul>
                        </nav>

                    </div>
                </div>

                @include('yukbiz.kanan.kanan')
        </div>
    </div>

    @stop