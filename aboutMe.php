<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
    $message ="<h4>Sorry I'm not pretty on a small screen just yet</h4> ";
    $animation1 = "<li style ='font-size:8px' class='animated rotateIn delay-1s'>HTML</li>";
    $animation2 = "<li style ='font-size:8px' class='animated rotateIn delay-2s'>JS</li>";
    $animation3 = "<li style ='font-size:8px' class='animated rotateIn delay-3s'>JQUERY</li>";
    $animation4 = "<li style ='font-size:8px' class='animated rotateIn delay-4s'>PHP</li>";
    $animation5 = "<li style ='font-size:8px' class='animated rotateIn delay-1s'>CSS</li>";
    $animation6 = "<li style ='font-size:8px' class='animated rotateIn delay-2s'>BOOTSTRAP</li>";
    $animation7 = "<li style ='font-size:8px' class='animated rotateIn delay-3s'>ANGULAR</li>";
    $animation8 = "<li style ='font-size:8px' class='animated rotateIn delay-4s'>PYTHON</li>";
    $animation9 = "<li style ='font-size:8px' class='animated fadeIn slow delay-5s'>Motivated</li>
    <li style ='font-size:8px' class='animated fadeIn slow delay-5s'>Reliable</li>
    <li style ='font-size:8px' class='animated fadeIn slow delay-5s'>Communicator</li>
    <li style ='font-size:8px' class='animated fadeIn slow delay-5s'>Optimistic</li>";

}
else
{
    $message = "";
    $animation1 = "<li class='animated slideInLeft faster delay-1s'><span style=color:silver;><i class='fa fa-futbol'></span></i>  HTML</li>";
    $animation2 = "<li class='animated slideInLeft faster delay-2s'><span style=color:silver;><i class='fa fa-futbol'></span></i>  JS</li>";
    $animation3 = "<li class='animated slideInLeft faster delay-3s'><span style=color:silver;><i class='fa fa-futbol'></span></i>  JQUERY</li>";
    $animation4 = "<li class='animated slideInLeft faster delay-4s'><span style=color:silver;><i class='fa fa-futbol'></span></i>  PHP</li>";
    $animation5 = "<li class='animated slideInRight faster delay-1s'><span style=color:silver;><i class='fa fa-futbol'></span></i>  CSS</li>";
    $animation6 = "<li class='animated slideInRight faster delay-2s'><span style=color:silver;><i class='fa fa-futbol'></span></i>  BOOTSTRAP</li>";
    $animation7 = "<li class='animated slideInRight faster delay-3s'><span style=color:silver;><i class='fa fa-futbol'></span></i>  ANGULAR</li>";
    $animation8 = "<li class='animated slideInRight faster delay-4s'><span style=color:silver;><i class='fa fa-futbol'></span></i>  PYTHON</li>";
    $animation9 = "<li class='animated slideInUp  delay-2s'><span style=color:silver;><i class='fas fa-music'></span></i>  Motivated</li>
    <li class='animated slideInDown  delay-2s'><span style=color:silver;><i class='fas fa-music'></span></i>  Problem-Solver</li>
    <li class='animated slideInUp  delay-3s'><span style=color:silver;><i class='fas fa-music'></span></i>  Communicator</li>
    <li class='animated slideInDown delay-3s'><span style=color:silver;><i class='fas fa-music'></span></i>  Team Player</li>";


}
?>
<?php  include "includes/header.php"; ?>
<?php  include "includes/navigation.php"; ?>
<style>
@import url('https://fonts.googleapis.com/css?family=Walter+Turncoat');
@import url('https://fonts.googleapis.com/css?family=Kranky&display=swap');
body, html
{
    height: 100%;
    background: rgb(199,6,33) !important;
    background: linear-gradient(45deg, rgba(199,6,33,1) 0%, rgba(8,21,232,1) 100%) !important;
    margin:0;
    margin-top:25px;
    padding:0;
    max-width: 100%;
    overflow-x:hidden;
    scrollbar-width: none

}
::-webkit-scrollbar
{
    display:none;
}
h1
{
    color: #ffffff; font-family: 'Walter Turncoat', cursive; font-size: 54px;
}
h2
{
    color: #ffffff; font-family: 'Walter Turncoat', cursive;
}
h4
{
    color: white; font-family: 'Walter Turncoat', cursive; font-size: 20px;
}
#logo
{
   background: -webkit-linear-gradient(#ae00ff, #f0340b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
#webdev
{
    background: -webkit-linear-gradient(#3ab44a, #fcb045);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.list
{
    color: #adb7bd; font-family: 'Walter Turncoat', cursive; font-size: 16px; line-height: 26px; text-indent: 30px; margin: 0; margin-bottom:5px;
}
.certs
{
    color: black; font-family: 'Walter Turncoat', cursive; font-size: 12px; line-height: 26px; text-indent: 30px; margin: 0;
}
ul
{
    list-style: none outside none;
    color:gold !important;
}

#map
{
    height: 400px;
}
.fab.fa-instagram {
  color: transparent;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  background-clip: text;
  -webkit-background-clip: text;
}

.link{
  position: relative;

}

.link:after{
  content: '';
  position: absolute;
  width: 0; height: 3px;
  display: block;
  right: 0;
  background: #fff;
  transition: width 1s ease;
  -webkit-transition: width 1s ease;
}

.link:hover:after{
  width: 100%;
  left: 0;
  background: #fff;
}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5.5s;
  animation-name: fade;
  animation-duration: 5.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin-left:180px;
  z-index:3;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
.overlay {
top: 48%; left:46%;
position: absolute;
display:none;
  width: 0px;
  height: 0px;
  box-shadow:
    0 0 800px 770px #FFFF0026,
    0 0 900px 870px #FFFF3326,
    0 0 1000px 970px #FFFF6626;
    z-index:2;
}
.strobe1
{
    top: 48%; left:54% ;
    display:none;
    position: absolute;
  width: 0px;
  height: 0px;
  box-shadow:
    0 0 800px 770px #0000FF26,
    0 0 900px 870px #3333FF26,
    0 0 1000px 970px #6666FF26;
    z-index:2;
}
.strobe2
{
    top: 54%; left: 46%;
    position: absolute;
    display:none;
  width: 0px;
  height: 0px;
  border-radius: 50%;
  box-shadow:
    0 0 800px 770px #FF000026,
    0 0 900px 870px #FF333326,
    0 0 1000px 970px #FF666626;
    z-index:2;
}
.strobe3
{
    top: 54%; left: 54%;
  position: absolute;
  display:none;
  width: 0px;
  height: 0px;
  box-shadow:
    0 0 800px 770px #66FF6626,
    0 0 900px 870px #99FF9926,
    0 0 1000px 970px #CCFFCC26;
    z-index:2;
}
</style>
<div id="overlay" class = " overlay animated fade infinite faster">
</div>
<div id ="strobe1" class = " strobe1 animated fade infinite fast"></div>
<div id ="strobe2"  class = "strobe2 animated fade infinite  slow"></div>
<div id ="strobe3"  class = "strobe3 animated fade infinite  slower"></div>

<div class="col-xs-12">
<!-- <div style="background: rgb(58,180,74); background: linear-gradient(90deg, rgba(58,180,74,1) 0%, rgba(255,255,255,1) 50%, rgba(252,176,69,1) 100%);" class="jumbotron text-center"> -->
<div id="party9" style = "background: rgb(62,0,0);
background-image: url('images/clarabog.jpg'); background-repeat: no-repeat; background-size: cover;  border-bottom: 1px solid black; padding-bottom:10px;" class="row">
<div class="text-center">
<?php echo $message ?>
<img id="party10" class="animated tada slow delay-5s" style="border-radius: 25px; margin-top:40px;" width = 200px; height= 200px; src="images/meprofile.jpg" alt="Little old me">
</div>
<h1 id = "logo" class=" animated tada slow delay-5s text-center" style= "font-family: 'Kranky', cursive;">Ronan Brennan</h1>
<h2 id="webdev" class=" animated tada slow delay-5s text-center" style= "font-family: 'Kranky', cursive;">- Web Developer -</h2>
<div class="col-xs-4">
<ul id="party11" style="padding-top:50px; padding-bottom:10px;" class= "list">
<?php
echo $animation1;
echo $animation2;
echo $animation3;
echo $animation4;
?>
</ul>
</div>
<div class="col-xs-4">
<a href="https://www.instagram.com/brennoooo_"><span style ="padding-left:40px;"><i id="party18" style="padding-left:40px;" class="fab fa-instagram fa-3x animated heartBeat slow delay-1s"></i></span></a>
<a href="https://www.linkedin.com/in/ronanbrennan90"><span style ="color: #0e76a8; padding-left:40px;"><i id="party19" style="padding-left:40px;" class="fab fa-linkedin fa-3x animated heartBeat slow delay-2s"></i></span></a>
<a href="https://www.facebook.com/ronan.brennan.90"><span style ="color: #3b5998; padding-left:40px;"><i id="party20" style="padding-left:40px;" class="fab fa-facebook-square fa-3x animated heartBeat slow delay-3s"></i></span></a>
<ul id="party12" style="padding-top:10px; padding-left:80px; padding-bottom:10px;" class= "list">
<?php
echo $animation9;
?>

</ul>
</div>
<div class="col-xs-4">
<ul id="party13" style="padding-top:50px; padding-bottom:10px;" class= "list">
<?php
echo $animation5;
echo $animation6;
echo $animation7;
echo $animation8;
?>
</ul>
</div>
</div>

<div class="row" style =  "border-bottom: 1px solid black;">
    <h1 id="party16" style="padding-top:20px" class = "text-center">Where I've been</h1>
    <!-- <div class="text-center">
        <img id="party17" style="margin-top:-2.3%;" src="images/underline.png" width ="400px" height="25px"  alt="">
    </div> -->
    <div id="map"></div>
    <script>
var map = L.map('map', {
    minZoom: 3,
}).setView([50, 0], 0);
map.setZoom(3);

L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=PANoIPYoI7Z8AZVhKIPR',{
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    noWrap: true,
}).addTo(map)

// var Stamen_Toner = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/toner/{z}/{x}/{y}{r}.{ext}', {
// 	attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
// 	subdomains: 'abcd',
// 	minZoom: 0,
//     maxZoom: 20,
//      noWrap: true,
// 	ext: 'png'
// }).addTo(map);

var latlngTullamore = L.latLng(53.2755, -7.4934);
var Tullamore = L.marker(latlngTullamore).addTo(map);
Tullamore.bindPopup("<b>Tullamore</b><br>This is where I grew up!");
var latlngWildwood = L.latLng(38.985924, -74.811997);
var Wildwood = L.marker(latlngWildwood).addTo(map);
Wildwood.bindPopup("<b>Wildwood</b><br>I worked here for 4 Summers!");
var latlngCarlow = L.latLng(52.826157, -6.933703);
var Carlow = L.marker(latlngCarlow).addTo(map);
Carlow.bindPopup("<b>Carlow</b><br>I got my Bachelor of Science (Honours) in Software Development here!");
var latlngGeneva = L.latLng(46.220446, 6.098532);
var Geneva = L.marker(latlngGeneva).addTo(map);
Geneva.bindPopup("<b>Geneva</b><br>I had one month training here for Akkademy!");
var latlngParis= L.latLng(48.892052, 2.231413);
var Paris = L.marker(latlngParis).addTo(map);
Paris.bindPopup("<b>Paris</b><br>I worked here for almost a year with Akkademy!");
var latlngPortlaoise= L.latLng(48.892052, 2.231413);
var Portlaoise = L.marker(latlngPortlaoise).addTo(map);
Portlaoise.bindPopup("<b>Paris</b><br>I have worked with Powerpoint Engineering Ltd for a year and a half!");


</script>
</div>
<div class="row">
<div class="col-xs-4">
<h1 class=" text-center " id ="party">Achievements
<!-- <img style="margin-top:-12.99%;" src="images/underline.png" width ="400px" height="25px"  alt=""> -->
</h1>

<ul id="party4" class= "list">
<li style = "font-size:12px;"><a style="text-decoration:none; color:black;" class="link certs" href="images/myDegreeITC.jpg">

B.Sc (Honours) in Software Development
</a></li>
<li style = "font-size:12px;"><a style="text-decoration:none; color:black;" class="link certs" href="https://courses.edx.org/certificates/112c53dd1dad442eb4021d9efcb88ee7">

CYBER501x: Cybersecurity Fundamentals
</a></li>
<li style = "font-size:12px; color:black;"><a style="text-decoration:none; color:black;" class="link certs" href="https://courses.edx.org/certificates/37c8c1c68e7f40cbbc172db837fc479b">
CYBER502x: Computer Forensics
</a></li>
<li style = "font-size:12px; color:black;"><a style="text-decoration:none; color:black;" class="link certs" href="https://udemy-certificate.s3.amazonaws.com/image/UC-4DMXHM2P.jpg">
The Complete Cyber Security Course: HE
</a></li>
<li style = "font-size:12px; color:black;"><a style="text-decoration:none; color:black;" class="link certs" href="https://udemy-certificate.s3.amazonaws.com/image/UC-RKT7UKOG.jpg">
The Complete Cyber Security Course: NS
</a></li>
<li style = "font-size:12px; color:black;"><a style="text-decoration:none; color:black;" class="link certs" href="https://udemy-certificate.s3.amazonaws.com/image/UC-PGHMPOED.jpg">
The Complete Cyber Security Course: AB
</a></li>
<li style = "font-size:12px; color:black;"><a style="text-decoration:none; color:black;" class="link certs" href="https://udemy-certificate.s3.amazonaws.com/image/UC-A22ICMCG.jpg">
The Complete Cyber Security Course: EPP
</a></li>
<li style = "font-size:12px; color:black;"><a style="text-decoration:none; color:black;" class="link certs" href="https://udemy-certificate.s3.amazonaws.com/image/UC-4K5WEHO3.jpg">
Business Analysis Fundamentals
</a></li>
</ul>
</div>
<div class="col-xs-4">
<h2 style="margin-top:180px;" id="party5" class= " text-center">Do not click this!</h2>
<label class="switch">
  <input  onclick="myFunction()" type="checkbox">
  <span id="party3" class="slider"></span>
</label>
<audio controls id ="music" style="display:none">
<source src="images/lensko.mp3" type="audio/mpeg">
</audio>
<script>
    var play ="off"
   function myFunction() {
  var x = document.getElementById("music");
  var party = document.getElementById("party");
  var party1 = document.getElementById("party1");
  var party2 = document.getElementById("party2");
  var party3 = document.getElementById("party3");
  var party4 = document.getElementById("party4");
  var party5 = document.getElementById("party5");
  var party6 = document.getElementById("linechart_material");
  var party7 = document.getElementById("party7");
  var party8 = document.getElementById("map");
  var party9 = document.getElementById("party9");
  var party10 = document.getElementById("party10");
  var party11 = document.getElementById("party11");
  var party12 = document.getElementById("party12");
  var party13 = document.getElementById("party13");
  var party14 = document.getElementById("logo");
  var party15 = document.getElementById("webdev");
  var party16 = document.getElementById("party16");
  // var party17 = document.getElementById("party17");
  var party18 = document.getElementById("party18");
  var party19 = document.getElementById("party19");
  var party20 = document.getElementById("party20");
  var party21 =document.getElementById("overlay");
  var party22 =document.getElementById("strobe1");
  var party23 =document.getElementById("strobe2");
  var party24 =document.getElementById("strobe3");


  if (play=== "off") {
      play = "on";
      x.play();
      confetti.start()
      party.classList.add('animated', 'pulse', 'infinite', 'faster');
      party1.classList.add('animated', 'pulse', 'infinite', 'faster');
      party2.classList.add('animated', 'pulse', 'infinite', 'faster');
      party3.classList.add('animated', 'flip', 'infinite', 'faster');
      party4.classList.add('animated', 'bounce', 'infinite', 'fast');
      party5.classList.add('animated', 'pulse', 'infinite', 'faster');
      party6.classList.add('animated', 'bounce', 'infinite', 'fast');
      party7.classList.add('animated', 'pulse', 'infinite', 'faster');
      party8.classList.add('animated', 'swing', 'infinite', 'fast');
      party9.classList.add('animated', 'pulse', 'infinite', 'faster');
      party10.classList.add('animated', 'pulse', 'infinite', 'faster');
      party11.classList.add('animated', 'shake', 'infinite', 'fast');
      party12.classList.add('animated', 'bounce', 'infinite', 'fast');
      party13.classList.add('animated', 'shake', 'infinite', 'fast');
      party14.classList.add('animated', 'pulse', 'infinite', 'faster');
      party15.classList.add('animated', 'pulse', 'infinite', 'faster');
      party16.classList.add('animated', 'pulse', 'infinite', 'faster');
      // party17.classList.add('animated', 'pulse', 'infinite', 'faster');
      party18.classList.add('animated', 'pulse', 'infinite', 'faster');
      party19.classList.add('animated', 'pulse', 'infinite', 'faster');
      party20.classList.add('animated', 'pulse', 'infinite', 'faster');
      party21.style.display = "block";
      party22.style.display = "block";
      party23.style.display = "block";
      party24.style.display = "block";
  } else {
      play="off";
      x.pause();
      confetti.stop()
      party.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party1.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party2.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party3.classList.remove('animated', 'flip', 'infinite', 'faster');
      party4.classList.remove('animated', 'bounce', 'infinite', 'fast');
      party5.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party6.classList.remove('animated', 'bounce', 'infinite', 'fast');
      party7.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party8.classList.remove('animated', 'swing', 'infinite', 'fast');
      party9.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party10.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party11.classList.remove('animated', 'shake', 'infinite', 'fast');
      party12.classList.remove('animated', 'bounce', 'infinite', 'fast');
      party13.classList.remove('animated', 'shake', 'infinite', 'fast');
      party14.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party15.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party16.classList.remove('animated', 'pulse', 'infinite', 'faster');
      // party17.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party18.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party19.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party20.classList.remove('animated', 'pulse', 'infinite', 'faster');
      party21.style.display = "none";
      party22.style.display = "none";
      party23.style.display = "none";
      party24.style.display = "none";
  }
}

</script>
</div>
<div class="col-xs-4">
<h1 id ="party1" class="text-center">Interests
<!-- <img style="margin-top:-12.99%;" src="images/underline.png" width ="400px" height="25px"  alt=""> -->
</h1>
<script type="text/javascript">
       google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Age');
      data.addColumn('number', 'Soccer');
      data.addColumn('number', 'Video Games');
      data.addColumn('number', 'Music');
      data.addColumn('number', 'Movies');

      data.addRows([
        [0,  0, 0, 0, 0],
        [1,  0, 0, 0,40],
        [2,  0, 0, 5,70],
        [3,  5, 0, 5,80],
        [4,  10, 25, 10,90],
        [5,   15, 35, 10,90],
        [6,   20, 35, 15,80],
        [7,  25, 45, 15,80],
        [8,  20, 50, 15,75],
        [9, 25, 50, 15,70],
        [10,  30,  55,  25,75],
        [11,  35, 60, 30,75],
        [12,  35,  65, 40,70],
        [13,  30, 65, 55, 70],
        [14,  30, 70, 55,65],
        [15,  25, 80, 65,65],
        [16,  20, 85, 75,65],
        [17,  20, 95, 80,60],
        [18,   25, 90, 80,50],
        [19,   30, 90,  80,50],
        [20,  35, 90, 85,45],
        [21,  45, 90, 85,40],
        [22, 55, 85, 80,30],
        [23,  65,  80,85,40],
        [24,  75, 70, 90,40],

      ]);

      var options = {
        'backgroundColor': 'transparent',
        chart: {
        },
        width: 410,
        height: 250,
        titleTextStyle:
            {
                color: '#000'
            },
            hAxis:
            {
                textStyle:{color: '#fff'}
            },
            legend: {textStyle: {color: '#fff'}}
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
    </script>
    <div id="linechart_material"></div>
</div>
</div>
<div class="col-xs-4"></div>
<div class="col-xs-4">
<h1 id ="party2" class="text-center">Testimonials
<!-- <img style="margin-top:-12.99%;" src="images/underline.png" width ="400px" height="25px"  alt=""> -->
</h1>
<div id="party7" class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="images/song.jpg" style="border-radius: 25px; width:440px; height:200px;">
  <div class="text"><h4>Has the voice of an angel. - Ed Sheeran</h4></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="images/historic-links.jpg" style="border-radius: 25px; width:440px; height:200px;">
  <div class="text"><h4>I hope to one day be as cool and strong as him. - Eoghan (Best Friend)</h4></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="images/1.jpg" style="border-radius: 25px; width:440px; height:200px;">
  <div class="text"><h4>Has to be reminded that it's his round. - Dad</h4></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="images/thegoatofthecodinggame.jpg" style="border-radius: 25px; width:440px; height:200px;">
  <div class="text"><h4>The greatest developer of our generation. - Bill Gates</h4></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="images/kikibutthead.jpg" style="border-radius: 25px; width:440px; height:200px;">
  <div class="text"><h4>The superior twin. - Ciara (Sister)</h4></div>
</div>


<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="images/footie.jpg" style="border-radius: 25px; width:440px; height:200px;">
  <div class="text"><h4>The greatest talent I have ever come across. - Lionel Messi<h4></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="images/clarabog.jpg" style="border-radius: 25px; width:440px; height:200px;">
  <div class="text"><h4>Kind of annoying but sometimes he's ok. - Mam</h4></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
</div>

</div>
</div>




        <hr>



<?php include "includes/footer.php";?>
