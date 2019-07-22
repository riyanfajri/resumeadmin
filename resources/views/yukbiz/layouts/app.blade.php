<!DOCTYPE html>
<html lang="en">

<head>
    @include('yukbiz.partials.head')
</head>


<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NW9PNGJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


@include('yukbiz.partials.header')
                    @yield('content')

  
<!-- END footer -->
@include('yukbiz.partials.javascripts')
</body>
</html>