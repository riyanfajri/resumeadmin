   <div id='div-Right-MediumRectangle-2' style='width:300px; height:250px;display:none' class='mb20'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-Right-MediumRectangle-2'); });
</script>
</div> 
                                                <div id='div-Right-MediumRectangle-3' style='width:300px; height:auto;min-height:250px;display:none' class='mb20'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-Right-MediumRectangle-3'); });
</script>
</div>  
            <script type="text/javascript">
function moveScroller_boxright() {
    var moveright = function() {
        var wct = $(window).scrollTop();
        var brfc = $("#boxright_fixc").offset().top - $(window).height();
        var brf = $("#boxright_fix");
        var wbr = $("#boxright").width();
        if(wct > ($("#boxright").offset().top - 120) && brfc < 0) {
            var vtop = 65;
            if($(".main-menu").css("opacity") == "1") vtop = 65 + $(".main-menu").height();
            brf.css({
                position: "fixed",
                top: vtop,
                width: wbr
            });
            $("#boxright_fixb").height(brf.height());       
        }
        else if(wct > brfc && brfc > 0) {
            brf.css({
                position: "fixed",
                bottom: "0px",
                width: wbr
            });
            $("#boxright_fixb").height(brf.height());
        } 
        else {
            brf.css({
                position: "relative",
                bottom: "",
                top : "",
                width: wbr
            });
            $("#boxright_fixb").height(0);
        }
    };
    $(window).scroll(moveright);
    moveright();
}
$(document).ready(function(){
    moveScroller_boxright();
});
</script>
<div class="f12 mb15" >
    <div class="nw dip">
        <h5>&copy; 2019 Yukbiz.com of <a href="" target="_blank">yukbiz.com</a>.</h5>
    </div>
    <div class="nw dip">
        <h5>All Right Reserved</h5>
    </div>
    <div class="nw dip">
        <h6><a class="grey" href="{{url('about',['us'])}}" title="About Us">About Us</a></h6>
        <span class="f10 grey pl5 pr5">&#8226;</span>
    </div>
    <div class="nw dip">
        <h6><a class="grey" href="https://pekanbaru.tribunnews.com/contact-us/" title="Contact Us">Contact Us</a></h6>
    </div>
</div>
        </div>
        <div id="boxright_fixb" class="show"></div>
        <div id="boxright_fixc"></div>
    </div>
    <div class="cl2"></div>
</div>
        </div>
<div class="ontop hide"><i class="fa fa-arrow-circle-up"></i></div>
<div class="pos_rel" id="adsoutofpage">
<div id='div-Popup' >
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-Popup'); });
</script>
</div><div id='div-PeelAds' style='display:none'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-PeelAds'); });
</script>
</div></div>

<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"6d9Cm1akKd605T", domain:"tribunnews.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=6d9Cm1akKd605T" style="display:none" height="1" width="1" alt="Alexa" /></noscript>
<!-- End Alexa Certify Javascript -->
<!-- Begin comScore Tag -->
<script>
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "8077308" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = (document.location.protocol == "https:" ? "https://sb" : "https://b") + ".scorecardresearch.com/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<noscript>
  <img src="https://b.scorecardresearch.com/p?c1=2&c2=8077308&cv=2.0&cj=1" alt="ComScore" />
</noscript>