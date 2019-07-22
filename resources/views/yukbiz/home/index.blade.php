@extends('yukbiz.layouts.app')

@section('content')

<h1>RESUME</h1>

    <div class="containerw3layouts-agileits">

      <div id="verticalTab" class="resp-vtabs w3-agile" style="display: block; width: 100%; margin: 0px;">

        <ul class="resp-tabs-list agileits-w3layouts">
          <li class="resp-tab-item"><span>About</span></li>
          <li class="resp-tab-item"><span>Experience</span></li>
          <li class="resp-tab-item agileinfo"><span>Education</span></li>
          <li class="resp-tab-item"><span>Skills</span></li>
          <li class="resp-tab-item"><span>Contact</span></li>
        </ul>

        <div class="resp-tabs-container">

          <div class="resp-tab-content">
            <div class="agileabout">
              <div class="agileabout-image w3-agileits">
                <img src="{{url('riyan/riyan.jpg')}}" alt="W3layouts">
              </div>
              <div class="agileabout-info">
                <ul>
                  @foreach($about as $about)
                  <li><div class="li1">Name</div><div class="li2">:</div><div class="li3">{{$about->name}}</div><div class="clearfix"></div></li>
                  <li><div class="li1">Birthday</div><div class="li2">:</div><div class="li3">{{$about->birthday}}</div><div class="clearfix w3-agileits"></div></li>
                  <li><div class="li1">Phone</div><div class="li2">:</div><div class="li3">{{$about->phone}}5</div><div class="clearfix"></div></li>
                  <li><div class="li1">Email</div><div class="li2 agileinfo">:</div><div class="li3"><a class="mail" href="mailto:mail@example.com">{{$about->email}}</a></div><div class="clearfix"></div></li>
                  <li><div class="li1">Website</div><div class="li2">:</div><div class="li3"><a href="#">{{$about->website}}</a></div><div class="clearfix"></div></li>
                  <li><div class="li1 agileinfo">Address</div><div class="li2">:</div><div class="li3 w3-agileits">{{$about->address}}</div><div class="clearfix wthree"></div></li>
                  @endforeach
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>

          <div class="resp-tab-content">
            <div class="work">
              @foreach($pengalamans as $pengalamans1)
              <div class="work-info agileits-w3layouts">
                <h4>{{$pengalamans1->date}}</h4>
                <h5>{{$pengalamans1->perusahaan}}</h5>
                <p>{{$pengalamans1->pengalaman}}</p>
              </div>
              @endforeach
            </div>
          </div>

          <div class="resp-tab-content">
            <div class="work w3-agileits">
              @foreach($pendidikans as $pendidikans)
              <div class="work-info">
                <h4>{{$pendidikans->date}}</h4>
                <h5>{{$pendidikans->level}}</h5>
                <p>{{$pendidikans->name}}</p>
              </div>
              @endforeach
            </div>
          </div>

          <div class="resp-tab-content">
            <div class="our-skills">
              @foreach($skills as $skills1)
              <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-skill">
                <p class="lead">{{$skills1->name}}</p>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{$skills1->persen}};" aria-valuenow="{{$skills1->persen}}" aria-valuemin="0" aria-valuemax="100">{{$skills1->persen}}</div>
                </div>
              </div>
              </div>
              @endforeach
            </div>
          </div>

          <style>
            li.kecil {
                line-height: 1px;
            }
          </style>

          <div class="resp-tab-content">            
            <div class="agileabout-info aitsabout ">
              <ul >
                @foreach($kontak as $kontak)
                <li class="kecil"><div class="li1">Name</div><div class="li2 wthree">:</div><div class="li3">{{$kontak->name}}</div><div class="clearfix w3-agile"></div></li>
                <li><div class="li1 w3-agile">Birthday</div><div class="li2">:</div><div class="li3">{{$kontak->birthday}}</div><div class="clearfix"></div></li>
                <li class="kecil"> <div class="li1">Phone</div><div class="li2 w3-agile">:</div><div class="li3">{{$kontak->phone}}</div><div class="clearfix"></div></li>
                <li class="kecil"><div class="li1">Email</div><div class="li2">:</div><div class="li3"><a class="mail" href="mailto:{{$kontak->email}}">{{$kontak->email}}</a></div><div class="clearfix agile"></div></li>
                <li class="kecil"><div class="li1">Website</div><div class="li2">:</div><div class="li3"><a href="http://{{$kontak->website}}">{{$kontak->website}}</a></div><div class="clearfix"></div></li>
                <li class="kecil"><div class="li1 w3-agile">Address</div><div class="li2">:</div><div class="li3">{{$kontak->address}}</div><div class="clearfix"></div></li>
                @endforeach
              </ul>
            </div>
            <div class="clear"></div>
            <div class="social-icons w3layouts agileits">
              <h4>Follow Me on</h4>
              <ul>
                <li class="fb w3ls w3layouts agileits"><a href="https://www.facebook.com/riyan.fajri.3"><span class="icons w3layouts agileits"></span><span class="text w3layouts agileits">Facebook</span></a></li>
                <li class="twt w3ls w3layouts agileits"><a href="https://twitter.com/home?lang=id"><span class="icons w3layouts agileits"></span><span class="text w3layouts agileits">Twitter</span></a></li>
              </ul>
            </div>
          </div>
          <div class="clear"></div>

        </div>
        <div class="clear w3-agile"></div>

      </div>

    </div>      
<!-- End comScore Tag -->

@stop

