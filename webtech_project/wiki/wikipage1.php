<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link type="text/css" rel="stylesheet" href="css/style.css" />


<link rel="stylesheet" href="project_quiz.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> -->


<link rel="stylesheet" href="event_t1.css">
</head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>

<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: 'Philosopher', sans-serif;
  background-attachment: fixed;
}

/* Style tab links */
.tablink {
  background-color: white;
  color: black;
  float: left;
  border: none; 
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 20%;
  font-family: 'Philosopher', sans-serif;
  background-attachment: fixed;
}

.tablink1 {
  background-color: inherit;
  color: black;
  float: left;
  border: none;
  border-color: inherit;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 50%;
  font-family: 'Philosopher', sans-serif;
  border-bottom: 5px solid inherit;
  
}


.tablink2 {
  background-color: inherit;
  color: black;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33%;
  font-family: 'Philosopher', sans-serif;
  border-bottom: 5px solid inherit;
 
}

.tablink:hover {
  background-color: #006699;
}

.tablink1:hover {
  background-color:inherit;
}

.tablink1.active {
    border-bottom: 5px solid white;
}

.tablink2:hover {
  /* background-color:inherit; */
  background-color: rgba(255,255,255,.15);
  border-color: #fff;
}

.tablink2.active {
    background-color: inherit;
    /* border-color: inherit; */
    border-bottom: 5px solid white;
}

.tablink1.inactive {
    border-bottom: 5px solid inherit;
}

.tablink2.inactive {
    background-color: inherit;
    border-bottom: 5px solid inherit;
}


.tabcontent {
  color: black;
  display: none;
  padding: 100px 20px;
  height: 100%;
  font-family: 'Philosopher', sans-serif;
}

#Home {background-image:url(ab.jpg);background-repeat: no-repeat;background-size:100% 100% ;background-attachment: fixed;overflow: scroll;}
#News {background-image:url(abc.jpg);background-repeat: no-repeat;background-size:cover ;}
/* #Contact {background-image:url(a2.jpg);background-repeat: no-repeat;background-size:cover ;} */
/* #About {background-color: orange;} */
#About1 {background-image:url(abc.jpg);}

body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: none;
  background-color:inherit;
  width: 10%;
  height: 300px;
  font-family: 'Philosopher', sans-serif;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  font-family: 'Philosopher', sans-serif;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #006699;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #006699;
  border-right: 5px solid white;
}

/* Style the tab content */
.tabcontent1 {
  float: left;
  padding: 0px 12px;
  border: none;
  width: 90%;
  border-left: none;
  /* height: 300px; */
  font-family: 'Philosopher', sans-serif;
  background-color: rgba(0,0,0, 0.4);
  color:rgb(241, 236, 236);
}

.tabcontent2 {
 color: black;
 display: none;
  padding: 100px 20px;
  height: 100%;
  font-family: 'Philosopher', sans-serif;
}

.tabcontent3 {
float:none;
color: black;
 display: none;
  padding: 0px 20px;
  height: 100%;
  font-family: 'Philosopher', sans-serif;
  background-color: rgba(0,0,0, 0.4);
  
}

.b737ng {
  align-content: space-around;
}


.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

.bg-image {
  
  
  
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/*scroll bar*/

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

#button1 {
  display: inline-block;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color:white;
  background-color: blue;
  border: none;
  border-radius: 15px;
  /* box-shadow: 0 9px #999; */
}

#myButton {

  padding: 10px 25px;
display:block;
background-color:rgba(0, 110, 255, 0.774);
color: white;
text-align:center;
position: absolute;
top: 80px;
right: 40px;
border-radius:15px;
border:none;
}

#myButton1 {

padding: 20px 270px;
display:block;
background-color: rgba(0, 110, 255, 0.774);
color: white;
text-align:center;
position: absolute;
top: 250px;
right: 400px;
border-radius:100px;
border:none;
}

#myButton2 {

padding: 20px 290px;
display:block;
background-color: rgba(0, 110, 255, 0.774);
color: white;
text-align:center;
position: absolute;
top: 400px;
right: 400px;
border-radius:100px;
border:none;
}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, 'inherit')" id="defaultOpen"  ><b>Wiki</b></button>
<button class="tablink" onclick="openPage('News', this, 'green')" ><b>Tickets</b></button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')"><b>Quiz..</b></button>
<button class="tablink" onclick="openPage('About', this, 'orange')"><b>Events</b></button>
<button class="tablink" onclick="openPage('About1', this, 'yellow')"><b>Forums</b></button>

<div id="Home" class="tabcontent">
<form action="../logout.php">
        <button id="myButton" type="submit">logout</button> 
        </form>
<button class="tablink1" onclick="openCity1(event, 'Civilian')" id="defaultOpen2"><b>Civilian</b></button>
<button class="tablink1" onclick="openCity1(event, 'Military')" ><b>Military</b></button>
  
<div id="Civilian" class="tabcontent2">
        <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'B737NG','inherit')" id="defaultOpen1"><b>Boeing 737 Next Gen</b></button>
                <button class="tablinks" onclick="openCity(event, 'B737M','inherit')"><b>Boeing 737 MAX</b></button>
                <button class="tablinks" onclick="openCity(event, 'B7478','inherit')"><b>Boeing 747-8</b></button>
                <button class="tablinks" onclick="openCity(event, 'B767','inherit')"><b>Boeing 767</b></button>
                <button class="tablinks" onclick="openCity(event, 'B777','inherit')"><b>Boeing 777</b></button>
                <button class="tablinks" onclick="openCity(event, 'B777X','inherit')"><b>Boeing 777X</b></button>
                <button class="tablinks" onclick="openCity(event, 'B787','inherit')"><b>Boeing 787</b></button>
                
              </div>
  <div id="B737NG" class="tabcontent1">
    <h2>Boeing 737 Next Gen</h2>
    <img src="b737ng.jpg">
    <p><h5>The Boeing 737 Next Generation, commonly abbreviated as 737NG,or 737 Next Gen jet airliners are narrow-body aircraft powered by two engines and produced by Boeing Commercial Airplanes. Launched in 1993 as the third generation derivative of the Boeing 737, it has been produced since 1996 and is an upgrade of the 737 Classic (−300/-400/-500) series.

      It features a redesigned wing with a larger area, a wider wingspan, a greater fuel capacity and higher MTOWs. It is equipped with CFM56-7 series engines, a glass cockpit, and features upgraded and redesigned interior configurations. It has a longer range and larger variants than its predecessor: the series includes four models, the −600/-700/-800/-900, seating between 108 and 215 passengers. The 737NG's primary competition is with the Airbus A320 family.
      
      As of 31 May 2019, a total of 7,097 737NG aircraft have been ordered, of which 7,031 have been delivered, the remaining orders are in the -700 BBJ, -800, -800 BBJ and -900ER variants. The upgraded and re-engined 737 MAX series is to supplant the 737NG, with the first 737 MAX delivered in 2017.</h5></p>
    <h3>Technical Specs</h3>
    <table class="main">
      <thead>
      <tr><th class="table-col"></th><th class="table-col align-center">737-700</th><th class="table-col align-center">737-800</th><th class="table-col align-center">737-900</th></tr>
      </thead>
      <tbody>
      <tr>
      <td class="align-left"><strong>Seats (2-class)</strong></td>
      <td class="align-left">126</td>
      <td class="align-left">162</td>
      <td class="align-left">178</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Maximum seats</strong></td>
      <td class="align-left">149</td>
      <td class="align-left">189</td>
      <td class="align-left">220</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Length</strong></td>
      <td class="align-left">33.6 m (110 ft 4 in)</td>
      <td class="align-left">39.5 m (129 ft 6 in)</td>
      <td class="align-left">42.1 m (138 ft 2 in)</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Wingspan</strong></td>
      <td class="align-left">35.8 m (117 ft 5 in)</td>
      <td class="align-left">35.8 m (117 ft 5 in)</td>
      <td class="align-left">35.8 m (117 ft 5 in)</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Height</strong></td>
      <td class="align-left">12.5 m (41 ft 3 in)</td>
      <td class="align-left">12.5 m (41 ft 3 in)</td>
      <td class="align-left">12.5 m (41 ft 3 in)</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Engine</strong></td>
      <td class="align-left">CFM-56</td>
      <td class="align-left">CFM-56</td>
      <td class="align-left">CFM-56</td>
      </tr>
      </tbody>
      </table>
     
      

  </div>
  
  <div id="B737M" class="tabcontent1">
    <h2>Boeing 737 MAX</h2>
    <img src="b737m.jpg">
    <p><h5>The Boeing 737 MAX is a narrow-body aircraft series manufactured by Boeing Commercial Airplanes as the fourth generation of the Boeing 737, succeeding the Boeing 737 Next Generation (NG). It is based on earlier 737 designs, re-engined with more efficient CFM International LEAP-1B engines, aerodynamic changes (including distinctive split-tip winglets), and airframe modifications.

      The new series was publicly announced on August 30, 2011.The first 737 MAX performed its first flight on January 29, 2016.The series gained FAA certification in March 2017. The first delivery was a MAX 8 in May 2017, to Malindo Air, which placed the aircraft into service on May 22, 2017.
      
      The 737 MAX series has been offered in four variants, typically offering 138 to 230 seats and a 3,215 to 3,825 nmi (5,954 to 7,084 km) range. The 737 MAX 7, MAX 8 (including the denser, 200–seat MAX 200), and MAX 9 are intended to replace the 737-700, -800, and -900, respectively.Additional length is offered with the further stretched 737 MAX 10. As of June 2019, the Boeing 737 MAX has received 4,934 firm orders and delivered 387 aircraft.
      
      After two Boeing 737 MAX 8 aircraft crashed in October 2018 and March 2019 causing 346 deaths, aviation authorities around the world grounded the 737 MAX series.Boeing aims to return the 737 MAX to service in the U.S. by the end of 2019, while the EASA expects a return to service in the first quarter of 2020.</h5></p>
      <h3>Technical Specs</h3>

      <table class="main">
        <thead>
        <tr><th class="table-col"></th><th class="table-col align-center">737 MAX 7</th><th class="table-col align-center">737 MAX 8</th><th class="table-col align-center">737 MAX 9</th><th class="table-col align-center">737 MAX 10</th></tr>
        </thead>
        <tbody>
        <tr>
        <td class="align-left"><strong>Seats (2-class)</strong></td>
        <td class="align-left">138 – 153</td>
        <td class="align-left">162 – 178</td>
        <td class="align-left">178 – 193</td>
        <td class="align-left">188 – 204</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Maximum seats</strong></td>
        <td class="align-left">172</td>
        <td class="align-left">210</td>
        <td class="align-left">220</td>
        <td class="align-left">230</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Range nm (km)</strong></td>
        <td class="align-left">3,850 (7,130)</td>
        <td class="align-left">3,550 (6,570)</td>
        <td class="align-left">3,550 (6,570)*</td>
        <td class="align-left">3,300 (6,110)*</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Length</strong></td>
        <td class="align-left">35.56 m (116 ft 8 in)</td>
        <td class="align-left">39.52 m (129 ft 8 in)</td>
        <td class="align-left">42.16 m (138 ft 4 in)</td>
        <td class="align-left">43.8 m (143 ft 8 in)</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Wingspan</strong></td>
        <td class="align-left">35.9 m (117 ft 10 in)</td>
        <td class="align-left">35.9 m (117 ft 10 in)</td>
        <td class="align-left">35.9 m (117 ft 10 in)</td>
        <td class="align-left">35.9 m (117 ft 10 in)</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Engine</strong></td>
        <td class="align-left">LEAP-1B from CFM International</td>
        <td class="align-left">LEAP-1B from CFM International</td>
        <td class="align-left">LEAP-1B from CFM International</td>
        <td class="align-left">LEAP-1B from CFM International</td>
        </tr>
        <tr>
        <td class="align-left"></td>
        <td class="align-left"></td>
        <td class="align-left">210 seats: 737-8-200</td>
        <td class="align-left">*one auxiliary tank</td>
        <td class="align-left">*one auxiliary tank</td>
        </tr>
        </tbody>
        </table>
  </div>
  
  <div id="B7478" class="tabcontent1">
    <h3>Boeing 747-8</h3>
    <img src="b7478.jpg">
    <p><h5>The Boeing 747-8 is a wide-body jet airliner developed by Boeing Commercial Airplanes. It was officially announced in 2005. The 747-8 is the third generation of the 747, with a lengthened fuselage, redesigned wings, new engines, and improved efficiency. The 747-8 is the largest 747 version, the largest commercial aircraft built in the United States, and the longest operational passenger aircraft in the world.

      The 747-8 is offered in two main variants: the 747-8 Intercontinental (747-8I) for passengers and the 747-8 Freighter (747-8F) for cargo.The first 747-8F performed the model's maiden flight on February 8, 2010, with the 747-8I following on March 20, 2011. Delivery of the first freighter aircraft occurred in October 2011 and the passenger model began deliveries in 2012. As of August 2019, confirmed orders for the 747-8 total 154: 107 of the freighter version, and 47 of the passenger version.</h5></p>

      <h3>Technical Specs</h3>


      <table class="main">
        <thead>
        <tr><th class="table-col"></th><th class="table-col align-center">747-8 Intercontinental</th><th></th></tr>
        </thead>
        <tbody>
        <tr>
        <td class="align-left"><strong>Seats (3-class)</strong></td>
        <td class="align-left">410</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Range nm (km)</strong></td>
        <td class="align-left">7,730 nautical miles (14,310 km)</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Length</strong></td>
        <td class="align-left">76.3 m (250 ft 2 in)</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Wingspan</strong></td>
        <td class="align-left">68.4 m (224 ft 5 in)</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Height</strong></td>
        <td class="align-left">19.4 m (63 ft 6 in)</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Engine</strong></td>
        <td class="align-left">GEnx-2B</td>
        </tr>
        </tbody>
        </table>
  </div>
  <div id="B767" class="tabcontent1">
    <h3>Boeing 747-8</h3>
    <img src="b767.jpg">
    <p><h5>The Boeing 767 is a mid- to large-size, mid- to long-range, wide-body twin-engine jet airliner developed and manufactured by Boeing Commercial Airplanes. It was Boeing's first wide-body twinjet and its first airliner with a two-crew glass cockpit. The aircraft has two turbofan engines, a conventional tail, and, for reduced aerodynamic drag, a supercritical wing design. Designed as a smaller wide-body airliner than earlier aircraft such as the 747, the 767 has a seating capacity for 181 to 375 people, and a design range of 3,850 to 6,385 nautical miles (4,431 to 7,348 mi; 7,130 to 11,825 km), depending on variant. Development of the 767 occurred in tandem with a narrow-body twinjet, the 757, resulting in shared design features which allow pilots to obtain a common type rating to operate both aircraft.</h5></p>
    <h3>technical specs</h3>
    <table class="main">
        <thead>
        <tr><th class="table-col"></th><th class="table-col align-center">767F</th></tr>
        </thead>
        <tbody>
        <tr>
        <td class="align-left"><strong>Payload kg (lbs)</strong></td>
        <td class="align-left">52,480 (115,700)</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Range nm</strong></td>
        <td class="align-left">3,255</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Length</strong></td>
        <td class="align-left">54.94 m (180 ft 3 in)</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Wingspan</strong></td>
        <td class="align-left">47.57 m (156 ft 1 in)</td>
        </tr>
        <tr>
        <td class="align-left"><strong>Height</strong></td>
        <td class="align-left">15.85 m (52 ft)</td>
        </tr>
        </tbody>
        </table>
  </div>
  <div id="B777X" class="tabcontent1">
      <h2>Boeing 777</h2>
      <img src="B777.jpg">
<p><h5>The Boeing 777X is the latest series of the long-range, wide-body, twin-engine Boeing 777 family from Boeing Commercial Airplanes. The 777X will feature new GE9X engines, new composite wings with folding wingtips, greater cabin width and seating capacity, and technologies from the Boeing 787. The 777X was launched in November 2013 with two variants: the 777-8 and the 777-9. The 777-8 provides seating for 365 passengers and has a range of 8,690 nmi (16,090 km) while the 777-9 has seating for 414 passengers and a range of over 7,525 nmi (13,936 km). The -9 is expected to fly in 2020 with deliveries starting the following year.</h5></p>
<h3>Technical Specs</h3>
<table class="main">
    <thead>
    <tr><th class="table-col"></th><th class="table-col align-center">777–8</th><th class="table-col align-center">777–9</th></tr>
    </thead>
    <tbody>
    <tr>
    <td class="align-left"><strong>List Price</strong></td>
    <td class="align-left">$410.2 million</td>
    <td class="align-left">$442.2 million</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Program Launch</strong></td>
    <td colspan="2" class="align-left">November 2013</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Seats (2-class)</strong></td>
    <td class="align-left">
    <div>
    <div><span>384</span></div>
    </div>
    </td>
    <td class="align-left">
    <div>
    <div><span>426</span></div>
    </div>
    </td>
    </tr>
    <tr>
    <td class="align-left"><strong>Range</strong></td>
    <td class="align-left">Up to 8,730 nmi (16,170 km)</td>
    <td class="align-left">
    <div>
    <div><span>7,285 nmi (13,500 km)</span></div>
    </div>
    </td>
    </tr>
    <tr>
    <td class="align-left"><strong>Length</strong></td>
    <td class="align-left">229 feet (69.79 m)</td>
    <td class="align-left">251 feet, 9 in (76.72 m)</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Wingspan</strong></td>
    <td colspan="2" class="align-left">Extended: 235 feet, 5 in (71.75 m) <br> On ground: 212 feet, 8 in (64.82 m)</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Interior</strong></td>
    <td class="align-left" colspan="2">Larger windows, wider cabin, new lighting, new architecture (<a href="/777x/reveal/777x-cabin-reveal/" target="_blank">more</a>)</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Configuration</strong></td>
    <td colspan="2" class="align-left">Twin-aisle (widebody)</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Engine</strong></td>
    <td class="align-left" colspan="2"><a href="http://www.geaviation.com/newengine/" target="_blank">GE9X</a>, supplied by GE Aviation</td>
    </tr>
    </tbody>
    </table>
  </div>
      <div id="B787" class="tabcontent1">
          <h2>Boeing 787</h2>
          <img src="b787.jpg">
<p><h5>The Boeing 787 Dreamliner is an American long-haul, mid-size wide-body, twin-engine jet airliner manufactured by Boeing Commercial Airplanes. Its variants seat 242 to 330 passengers in typical two-class seating configurations. It is the first airliner with an airframe constructed primarily of composite materials. The 787 was designed to be 20% more fuel-efficient than the Boeing 767, which it was intended to replace. The 787 Dreamliner's distinguishing features include mostly electrical flight systems, raked wingtips, and noise-reducing chevrons on its engine nacelles.

    The aircraft's initial designation was the 7E7, prior to its renaming in January 2005. The first 787 was unveiled in a roll-out ceremony on July 8, 2007, at Boeing's Everett factory. Development and production of the 787 has involved a large-scale collaboration with numerous suppliers worldwide. Final assembly takes place at the Boeing Everett Factory in Everett, Washington, and at the Boeing South Carolina factory in North Charleston, South Carolina. Originally planned to enter service in May 2008, the project experienced multiple delays. The airliner's maiden flight took place on December 15, 2009, and flight testing was completed in mid-2011. Boeing has reportedly spent $32 billion on the 787 program.</h5></p>
  <h3>Technical Specs</h3>
  <table class="main">
      <thead>
      <tr><th class="table-col"></th><th class="table-col align-center">787-8 Dreamliner</th><th class="table-col align-center">787-9 Dreamliner</th><th class="table-col align-center">787-10 Dreamliner</th></tr>
      </thead>
      <tbody>
      <tr>
      <td class="align-left"><strong>Passengers (two-class)</strong></td>
      <td class="align-left">248</td>
      <td class="align-left">296</td>
      <td class="align-left">336</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Range nmi (km)</strong></td>
      <td class="align-left">7,305 nmi (13,530 km)</td>
      <td class="align-left">7,530 nmi (13,950 km)</td>
      <td class="align-left">6,345 nmi (11,750 km)</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Length</strong></td>
      <td class="align-left">57 m (186 ft)</td>
      <td class="align-left">63 m (206 ft)</td>
      <td class="align-left">68 m (224 ft)</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Wingspan</strong></td>
      <td class="align-left">60 m (197 ft)</td>
      <td class="align-left">60 m (197 ft)</td>
      <td class="align-left">60 m (197 ft)</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Height</strong></td>
      <td class="align-left">17 m (56 ft)</td>
      <td class="align-left">17 m (56 ft)</td>
      <td class="align-left">17 m (56 ft)</td>
      </tr>
      <tr>
      <td class="align-left"><strong>Engine</strong></td>
      <td class="align-left">GEnx-1B / Trent 1000</td>
      <td class="align-left">GEnx-1B / Trent 1000</td>
      <td class="align-left">GEnx-1B / Trent 1000</td>
      </tr>
      </tbody>
      </table>
      </div>

      <div id="B777" class="tabcontent1">
          <h3>Boeing 777</h3>
          <img src="b777.jpg">
        <p><h5>The Boeing 777 is a long-range wide-body twin-engine jet airliner developed and manufactured by Boeing Commercial Airplanes. It is the world's largest twinjet and has a typical seating capacity of 314 to 396 passengers, with a range of 5,240 to 8,555 nautical miles (9,704 to 15,844 km). Commonly referred to as the Triple Seven,its distinguishing features include large-diameter turbofan engines, long raked wings, six wheels on each main landing gear, fully circular fuselage cross-section,and a blade-shaped tail cone.Developed in consultation with eight major airlines, the 777 was designed to replace older wide-body airliners and bridge the capacity difference between Boeing's 767 and 747. As Boeing's first fly-by-wire airliner, it has computer-mediated controls. It was also the first commercial aircraft to be designed entirely with computer-aided design.</h5></p>
<h3>Technical Specs</h3>
<table class="main">
    <thead>
    <tr><th class="table-col"></th><th class="table-col align-center">777-200LR</th><th class="table-col align-center">777-300ER</th></tr>
    </thead>
    <tbody>
    <tr>
    <td class="align-left"><strong>Seats (2-class)</strong></td>
    <td class="align-left">317</td>
    <td class="align-left">396</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Range nm (km)</strong></td>
    <td class="align-left">8,555 nmi (15,843 km)</td>
    <td class="align-left">7,370 nmi (13649 km)</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Length</strong></td>
    <td class="align-left">63.7 m (209 ft 1 in)</td>
    <td class="align-left">73.9 m (242 ft 4 in)</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Wingspan</strong></td>
    <td class="align-left">64.8 m (212 ft 7 in)</td>
    <td class="align-left">64.8 m (212 ft 7 in)</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Height</strong></td>
    <td class="align-left">18.6 m (61 ft 1 in)</td>
    <td class="align-left">18.5 m (60 ft 8 in)</td>
    </tr>
    <tr>
    <td class="align-left"><strong>Engine</strong></td>
    <td class="align-left">GE90-115BL</td>
    <td class="align-left">GE90-115BL</td>
    </tr>
    </tbody>
    </table>
      </div>
  <script>
        function openCity(evt, cityName,color) {
        var i, tabcontent1, tablinks;
        tabcontent1 = document.getElementsByClassName("tabcontent1");
        for (i = 0; i < tabcontent1.length; i++) {
          tabcontent1[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen1").click();
    //   evt.style.backgroundColor = color;
      </script>
        
  </div>




  <div id="Military" class="tabcontent2">
        <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'rb1l','inherit')" id="defaultOpen3"><b>Rockwell B1 Lancer</b></button>
                <button class="tablinks" onclick="openCity(event, 'bb52b','inherit')"><b>Boeing B-52 Bomber</b></button>
                <button class="tablinks" onclick="openCity(event, 'f15e','inherit')"><b>McDonnell Douglas F-15 Eagle</b></button>
                <button class="tablinks" onclick="openCity(event, 'bc40','inherit')"><b>Boeing C-40A</b></button>
                <button class="tablinks" onclick="openCity(event, 'bp8','inherit')"><b>Boeing P8</b></button>
                <button class="tablinks" onclick="openCity(event, 'ea18g','inherit')"><b>EA-18G Growler</b></button>
                <button class="tablinks" onclick="openCity(event, 'af1','inherit')"><b>Airforce ONE</b></button>
              </div>
  <div id="rb1l" class="tabcontent1">
    <h3>Rockwell B1 Lancer</h3>
    <img src="rb1l.jpg">
    <p><h5>The Rockwell B-1 Lancer[N 1] is a supersonic variable-sweep wing, heavy bomber used by the United States Air Force. It is commonly called the "Bone" (from "B-One"). It is one of three strategic bombers in the U.S. Air Force fleet as of 2018, the other two being the B-2 Spirit and the B-52 Stratofortress.

      The B-1 was first envisioned in the 1960s as a platform that would combine the Mach 2 speed of the B-58 Hustler with the range and payload of the B-52, and was meant to ultimately replace both bombers. After a long series of studies, Rockwell International (now part of Boeing) won the design contest for what emerged as the B-1A. This version had a top speed of Mach 2.2 at high altitude and the capability of flying for long distances at Mach 0.85 at very low altitudes. The combination of the high cost of the aircraft, the introduction of the AGM-86 cruise missile that flew the same basic profile, and early work on the stealth bomber all significantly affected the need for the B-1. This led to the program being canceled in 1977, after the B-1A prototypes had been built.
      
      The program was restarted in 1981, largely as an interim measure due to delays in the B-2 stealth bomber program, with the B-2 eventually reaching initial operational capability in 1997. This led to a redesign as the B-1B, which differed from the B-1A by having a lower top speed at high altitude of Mach 1.25, but improved low-altitude performance of Mach 0.96. The electronics were also extensively improved during the redesign, and the airframe was improved to allow takeoff with the maximum possible fuel and weapons load. The B-1B began deliveries in 1986 and formally entered service with Strategic Air Command (SAC) as a nuclear bomber in that same year. By 1988, all 100 aircraft had been delivered.
      
      In the early 1990s, following the Gulf War and concurrent with the disestablishment of SAC and its reassignment to the newly formed Air Combat Command, the B-1B was converted to conventional bombing use. It first served in combat during Operation Desert Fox in 1998 and again during the NATO action in Kosovo the following year. The B-1B has supported U.S. and NATO military forces in Afghanistan and Iraq. The Air Force had 66 B-1Bs in service as of September 2012. The B-1B is expected to continue to serve into the 2030s, with the Northrop Grumman B-21 Raider to begin replacing the B-1B after 2025. The B-1s in inventory are planned to be retired by 2036.</h5></p>
      <h3>Technical Specs</h3>


      <table class="active">
        <tbody>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Function</strong></td>
            <td class="table-col table-col-lg align-left">Long-range, multi-role, heavy bomber</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Power plant</strong></td>
            <td class="table-col table-col-lg align-left">Four General Electric F101-GE-102 turbofan engine with afterburner</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Thrust</strong></td>
            <td class="table-col table-col-lg align-left">30,000-plus pounds with afterburner, per engine</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Wingspan</strong></td>
            <td class="table-col table-col-lg align-left">137 ft (41.8 m) extended forward, 79 ft (24.1 m) swept aft</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Length</strong></td>
            <td class="table-col table-col-lg align-left">146 ft (44.5 meters)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Height</strong></td>
            <td class="table-col table-col-lg align-left">34 ft (10.4 meters)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Weight</strong></td>
            <td class="table-col table-col-lg align-left">Approximately 190,000 lbs (86,183 kg)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Max Takeoff Weight</strong></td>
            <td class="table-col table-col-lg align-left">477,000 lbs (216,634 kg)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Fuel Capacity</strong></td>
            <td class="table-col table-col-lg align-left">265,274 lbs (120,326 kg)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Payload</strong></td>
            <td class="table-col table-col-lg align-left">75,000 lbs internal (34,019 kg), 50,000 lbs (22,679 kg)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Speed</strong></td>
            <td class="table-col table-col-lg align-left">900-plus mph (Mach 1.2 at sea level)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Range</strong></td>
            <td class="table-col table-col-lg align-left">Intercontinental</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Ceiling</strong></td>
            <td class="table-col table-col-lg align-left">More than 30,000 ft (9,144 m)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Crew</strong></td>
            <td class="table-col table-col-lg align-left">4 (aircraft commander, copilot, and two weapon systems officers)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Inventory</strong></td>
            <td class="table-col table-col-lg align-left">66</td>
          </tr>
        </tbody>
      </table>
  </div>
  
  <div id="bb52b" class="tabcontent1">
    <h3>Boeing B-52 Bomber</h3>
    <img src="b52b.jpg">
    <p><h5>The Boeing B-52 Stratofortress is an American long-range, subsonic, jet-powered strategic bomber. The B-52 was designed and built by Boeing, which has continued to provide support and upgrades. It has been operated by the United States Air Force (USAF) since the 1950s. The bomber is capable of carrying up to 70,000 pounds (32,000 kg) of weapons, and has a typical combat range of more than 8,800 miles (14,080 km) without aerial refueling.

      Beginning with the successful contract bid in June 1946, the B-52 design evolved from a straight wing aircraft powered by six turboprop engines to the final prototype YB-52 with eight turbojet engines and swept wings. The B-52 took its maiden flight in April 1952. Built to carry nuclear weapons for Cold War-era deterrence missions, the B-52 Stratofortress replaced the Convair B-36. A veteran of several wars, the B-52 has dropped only conventional munitions in combat. The B-52's official name Stratofortress is rarely used; informally, the aircraft has become commonly referred to as the BUFF (Big Ugly Fat Fella).
      
      The B-52 has been in active service with the USAF since 1955. As of June 2019, 58 are in active service, 18 in reserves, and approximately 12 more aircraft in long term storage.The bombers flew under the Strategic Air Command (SAC) until it was disestablished in 1992 and its aircraft absorbed into the Air Combat Command (ACC); in 2010, all B-52 Stratofortresses were transferred from the ACC to the newly created Air Force Global Strike Command (AFGSC). Superior performance at high subsonic speeds and relatively low operating costs have kept the B-52 in service despite the advent of later, more advanced aircraft, including the Mach 2+ B-58 Hustler, the canceled Mach 3 B-70 Valkyrie, the variable-geometry B-1 Lancer, and the stealth B-2 Spirit. The B-52 completed sixty years of continuous service with its original operator in 2015. After being upgraded between 2013 and 2015, it is expected to serve into the 2050s.</h5></p> 
<h3>Technical Specs</h3>


<table class="active">
  <tbody>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Primary Function</strong></td>
      <td class="table-col table-col-lg align-left">Heavy bomber</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Power plant</strong></td>
      <td class="table-col table-col-lg align-left">8 Pratt &amp; Whitney engines TF33-P-3/103 turbofan</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Thrust</strong></td>
      <td class="table-col table-col-lg align-left">Each engine up to 17,000 lbs</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Wingspan</strong></td>
      <td class="table-col table-col-lg align-left">185 ft (56.4 m)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Length</strong></td>
      <td class="table-col table-col-lg align-left">159 ft, 4 in (48.5 m)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Height</strong></td>
      <td class="table-col table-col-lg align-left">40 ft, 8 in (12.4 m)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Weight</strong></td>
      <td class="table-col table-col-lg align-left">Approximately 185,000 lbs (83,250 kg)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Max Takeoff Weight</strong></td>
      <td class="table-col table-col-lg align-left">488,000 lbs (219,600 kg)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Fuel Capacity</strong></td>
      <td class="table-col table-col-lg align-left">312,197 lbs</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Payload</strong></td>
      <td class="table-col table-col-lg align-left">70,000 lbs (31,500 kg)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Speed</strong></td>
      <td class="table-col table-col-lg align-left">650 mph (Mach 0.86)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Range</strong></td>
      <td class="table-col table-col-lg align-left">8,800 mi (7,652 nautical miles)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Ceiling</strong></td>
      <td class="table-col table-col-lg align-left">50,000 ft (15,150 m)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Crew</strong></td>
      <td class="table-col table-col-lg align-left">5 (aircraft commander, pilot, radar navigator, navigator and electronic warfare officer</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Initial operating capability</strong></td>
      <td class="table-col table-col-lg align-left">May 1961 (Current ‘H’ Model)</td>
    </tr>
    <tr>
      <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Armament</strong></td>
      <td class="table-col table-col-lg align-left">Approximately 70,000 lbs (31,500 kg) mixed ordnance -- bombs, smart weapons, mines and missiles. Modified to carry air-launched cruise missiles and Miniature Air Launched Decoy.</td>
    </tr>
  </tbody>
</table>
    </div>
  
  <div id="f15e" class="tabcontent1">
    <h3>McDonnell Douglas F-15 Eagle</h3>
    <img src="f15.jpg">
    <p><h5>The McDonnell Douglas F-15 Eagle is an American twin-engine, all-weather tactical fighter aircraft designed by McDonnell Douglas (now Boeing). Following reviews of proposals, the United States Air Force selected McDonnell Douglas's design in 1967 to meet the service's need for a dedicated air superiority fighter. The Eagle first flew in July 1972, and entered service in 1976. It is among the most successful modern fighters, with over 100 victories and no losses in aerial combat, with the majority of the kills by the Israeli Air Force.

      The Eagle has been exported to Israel, Japan, and Saudi Arabia. The F-15 was originally envisioned as a pure air-superiority aircraft. Its design included a secondary ground-attack capability that was largely unused. The aircraft design proved flexible enough that an all-weather strike derivative, the F-15E Strike Eagle, an improved and enhanced version which was later developed, entered service in 1989 and has been exported to several nations. As of 2017, the aircraft is being produced in different variants with production to end in 2022.</h5></p>
    <h3>Technical Specs</h3> 
    
    

    <table class="active">
      <tbody>
        <tr>
          <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Length</strong></td>
          <td class="table-col table-col-lg align-left">63.8 ft (19.45 m)</td>
        </tr>
        <tr>
          <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Height</strong></td>
          <td class="table-col table-col-lg align-left">18.5 ft (5.65 m)</td>
        </tr>
        <tr>
          <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Wing Span</strong></td>
          <td class="table-col table-col-lg align-left">42.8 ft (13.05 m)</td>
        </tr>
        <tr>
          <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Propulsion</strong></td>
          <td class="table-col table-col-lg align-left">Two P&amp;W F100 or two GE F110 turbofan engines in 29,000 lb (13,154 kg) thrust class with afterburning</td>
        </tr>
        <tr>
          <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Weight</strong></td>
          <td class="table-col table-col-lg align-left">45,000 lb (20, 411 kg) class<br>
            81,000 lb (36, 700 kg) max gross takeoff</td>
        </tr>
        <tr>
          <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Speed</strong></td>
          <td class="table-col table-col-lg align-left">1,875 mph (3,017 kph)</td>
        </tr>
        <tr>
          <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Armament</strong></td>
          <td class="table-col table-col-lg align-left"><strong>F-15A/B/C/D air-to-air:</strong><br>
            20mm cannon<br>
            AIM-120 (AMRAAM) missiles<br>
            AIM-9 (Sidewinder) missiles<br>
            AIM-7 (Sparrow) missiles<br>
            <strong>F-15E Air-to-ground:</strong><br>
            Precision guided munitions<br>
            Variety of missiles and bombs<br>
            <strong>F-15E Air-to-air:</strong><br>
            Cannon<br>
            8 medium- and short-range missiles<br>
            <strong>Advanced F-15:</strong><br>
            12 air-to-air missiles<br>
            24 air-to-ground munitions</td>
        </tr>
      </tbody>
    </table>
    </div>

    

    <div id="bc40" class="tabcontent1">
        <h3>Boeing C40-A</h3>
        <img src="bC40.jpg">
        <p><h5>The C-40A Clipper provides critical logistics support to the United States Navy. Its flight deck features a flight management computer system with an integrated GPS, and is compatible with future GATM/FANS operating environment (RNP-1).It is outfitted with the Traffic Alert and Collision Avoidance System II, and is RVSM-capable. It also has an enhanced ground proximity warning system, predictive wind shear, head-up display and TACAN/UHF/IFF functions.</h5></p>
    <h3>Technical Specs</h3>
    <table class="active">
        <tbody>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Engines</strong></td>
            <td class="table-col table-col-lg align-left">Advanced-technology CFM56-7</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Maximum Sea-Level Static Thrust Performance</strong></td>
            <td class="table-col table-col-lg align-left">24,000 lbs</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Maximum Gross Weight: Takeoff</strong></td>
            <td class="table-col table-col-lg align-left">171,000 lbs</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Maximum Gross Weight: Landing</strong></td>
            <td class="table-col table-col-lg align-left">134,000 lbs</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Maximum Gross Weight: Zero fuel</strong></td>
            <td class="table-col table-col-lg align-left">126,000 lbs</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Fuel Capacity</strong></td>
            <td class="table-col table-col-lg align-left">6,875 gal</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Lower Hold Cargo Volume</strong></td>
            <td class="table-col table-col-lg align-left">885 cu Ft</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Schedule Reliability</strong></td>
            <td class="table-col table-col-lg align-left">99.58%</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Range</strong></td>
            <td class="table-col table-col-lg align-left">3,200-nmi (121 passengers, or 36,000-lb main deck cargo, or 70 passengers/15,000-lb in combi configuration)</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Cruise Speed</strong></td>
            <td class="table-col table-col-lg align-left">0.78 Mach to 0.82 Mach</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Altitude Capability</strong></td>
            <td class="table-col table-col-lg align-left">41,000 ft</td>
          </tr>
          <tr>
            <td class="table-col table-col-sm align-left" style="width: 30%;"><strong>Extended Operations (ETOPS)</strong></td>
            <td class="table-col table-col-lg align-left">180 min</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="bp8" class="tabcontent1">
        <h3>Boeing P8</h3>
        <img src="bp8.jpg">
        <p><h5>The Boeing P-8 Poseidon (formerly Multimission Maritime Aircraft) is a military aircraft developed and produced by Boeing Defense, Space & Security, modified from the 737-800ERX. It was developed for the United States Navy (USN).

            The P-8 is being operated in the anti-submarine warfare (ASW), anti-surface warfare (ASUW), and shipping interdiction roles. It is armed with torpedoes, Harpoon anti-ship missiles and other weapons, and is able to drop and monitor sonobuoys, as well as operate in conjunction with other assets, including the Northrop Grumman MQ-4C Triton maritime surveillance unmanned aerial vehicle (UAV).
            
            The P-8 is operated by the United States Navy, the Indian Navy, Royal Australian Air Force (RAAF) and the UK's Royal Air Force (RAF). It has also been ordered by the Royal Norwegian Air Force (RNoAF), the Royal New Zealand Air Force (RNZAF), and the Republic of Korea Navy (ROKN).</h5></p>
        <h3>Technical Specs</h3>
        <table class="active">
            <tbody>
              <tr>
                <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Propulsion</strong></td>
                <td class="table-col table-col-lg align-left">Two CFM56-7 engines providing 27,000 lbf thrust each</td>
              </tr>
              <tr>
                <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Length</strong></td>
                <td class="table-col table-col-lg align-left">129.5 ft (39.47 m)</td>
              </tr>
              <tr>
                <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Wing Span</strong></td>
                <td class="table-col table-col-lg align-left">123.6 ft (37.64 m)</td>
              </tr>
              <tr>
                <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Height</strong></td>
                <td class="table-col table-col-lg align-left">42.1 ft (12.83 m)</td>
              </tr>
              <tr>
                <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Maximum Takeoff Gross Weight</strong></td>
                <td class="table-col table-col-lg align-left">189,200 lbs (85,820 kg)</td>
              </tr>
            </tbody>
          </table>
    </div>

    <div id="ea18g" class="tabcontent1">
        <h3>EA-18G Growler</h3>
        <img src="ea18g.jpg">
        <p><h5>The Boeing EA-18G Growler is an American carrier-based electronic warfare aircraft, a specialized version of the two-seat F/A-18F Super Hornet. The EA-18G replaced the Northrop Grumman EA-6B Prowlers in service with the United States Navy. The Growler's electronic warfare capability is primarily provided by Northrop Grumman. The EA-18G began production in 2007 and entered operational service with the US Navy in late 2009. Australia has also purchased twelve EA-18Gs, which entered service with the Royal Australian Air Force in 2017.</h5></p>
<h3>Technical Specs</h3>
<table class="active">
    <tbody>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Length</strong></td>
        <td class="table-col table-col-lg align-left">60.2 ft (18.3 m)</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Height</strong></td>
        <td class="table-col table-col-lg align-left">16 ft (4.9 m)</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Wing Span</strong></td>
        <td class="table-col table-col-lg align-left">44.9 ft (13.7 m)</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Weight Empty</strong></td>
        <td class="table-col table-col-lg align-left">33,094 lbs (15,011.2 kg)</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Recovery Weight</strong></td>
        <td class="table-col table-col-lg align-left">48,000 lbs (21,772.4 kg)</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Internal Fuel</strong></td>
        <td class="table-col table-col-lg align-left">13,940 lbs (6,323.1 kg)</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Max External Fuel</strong></td>
        <td class="table-col table-col-lg align-left">9,744 lbs (4,419.8 kg)</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Engines</strong></td>
        <td class="table-col table-col-lg align-left">(2) F414-GE-400</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Thrust</strong></td>
        <td class="table-col table-col-lg align-left">44,000 lbs</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Spot Factor</strong></td>
        <td class="table-col table-col-lg align-left">1.23</td>
      </tr>
      <tr>
        <td class="table-col table-col-sm align-left" style="width: 25%;"><strong>Crew</strong></td>
        <td class="table-col table-col-lg align-left">One Pilot, one Weapon Systems Officer</td>
      </tr>
    </tbody>
  </table>
    </div>

        <div id="af1" class="tabcontent1">
            <h3>Airforce one</h3>
            <img src="af1.jpg">
            <p><h5>Air Force One is the official air traffic control call sign for a United States Air Force aircraft carrying the President of the United States. In common parlance, the term is used to denote U.S. Air Force aircraft modified and used to transport the president.The aircraft are prominent symbols of the American presidency and its power.

                The idea of designating specific military aircraft to transport the President arose in 1943, when officials of the United States Army Air Forces, the predecessor to the U.S. Air Force, became concerned about using commercial airlines for presidential travel. A C-87 Liberator Express was reconfigured for use as the first dedicated VIP-and-presidential transport aircraft and named Guess Where II, but the Secret Service rejected it because of its safety record. A C-54 Skymaster was then converted for presidential use; dubbed the Sacred Cow, it carried President Franklin D. Roosevelt to the Yalta Conference in February 1945 and was used for another two years by President Harry S. Truman.</h5></p>
            <h3>Technical Specs</h3>
            <table class="active">
                <tbody>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Crew</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">26 (passenger/crew capacity: 102)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Model</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">747-200B</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Engines</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">General Electric CF6-80C2B1</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Thrust rating</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">56,700 pounds, each engine (252 kn)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Long-range mission takeoff gross weight</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">833,000 pounds (377,842 kg)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Maximum zero fuel weight</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">526,500 pounds (238,800 kg)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Design mission zero fuel weight</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">46,000 pounds (20,865 kg)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Maximum landing weight</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">630,000 pounds (285,763 kg)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Fuel capacity</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">53,611 gallons (203,129 L)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Range</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">7,800 statute miles</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Wing span</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">195 feet, 8 inches (59.64 m)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Length</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">231 feet, 10 inches (70.66 m)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Height</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">63 feet, 5 inches (19.33 m)</td>
                </tr>
                <tr>
                <td class="table-col table-col-sm align-left" style="width: 30%;"><b>Service ceiling</b></td>
                <td class="table-col table-col-lg align-left" style="width: 70%;">45,100 feet (13.747 m)</td>
                </tr>
                </tbody>
                </table>
        </div>



  <script>
        function openCity(evt, cityName) {
        var i, tabcontent1, tablinks;
        tabcontent1 = document.getElementsByClassName("tabcontent1");
        for (i = 0; i < tabcontent1.length; i++) {
          tabcontent1[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
       evt.currentTarget.className += " active";
      }
      
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen3").click();
    //   evt.style.backgroundColor = color;
      </script>
        
  </div>

<script>
        function openCity1(evt, cityName,color) {
        var i, tabcontent2, tablinks;
        tabcontent2 = document.getElementsByClassName("tabcontent2");
        for (i = 0; i < tabcontent2.length; i++) {
          tabcontent2[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink1");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen2").click();
    //   evt.style.backgroundColor = color;
      </script>
        
</div>

<div id="News" class="tabcontent">
    <form action="../logout.php">
        <button id="myButton" type="submit">logout</button> 
        </form>
        <div id="booking" class="section">
          <div class="section-center">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="booking-cta">
                    <h1>Book your flight today</h1>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1">
                  <div class="booking-form">
                    <form>
                      <div class="form-group">
                        <div class="form-checkbox">
                          <label for="roundtrip">
                            <input type="radio" id="roundtrip" name="flight-type">
                            <span></span>Roundtrip
                          </label>
                          <label for="one-way">
                            <input type="radio" id="one-way" name="flight-type">
                            <span></span>One way
                          </label>
                          <label for="multi-city">
                            <input type="radio" id="multi-city" name="flight-type">
                            <span></span>Multi-City
                          </label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <span class="form-label">Flying from</span>
                            <input class="form-control" type="text" placeholder="City or airport">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <span class="form-label">Flyning to</span>
                            <input class="form-control" type="text" placeholder="City or airport">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <span class="form-label">Departing</span>
                            <input class="form-control" type="date" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <span class="form-label">Returning</span>
                            <input class="form-control" type="date" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <span class="form-label">Adults (18+)</span>
                            <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                            </select>
                            <span class="select-arrow"></span>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <span class="form-label">Children (0-17)</span>
                            <select class="form-control">
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                            </select>
                            <span class="select-arrow"></span>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <span class="form-label">Travel class</span>
                            <select class="form-control">
                              <option>Economy class</option>
                              <option>Business class</option>
                              <option>First class</option>
                            </select>
                            <span class="select-arrow"></span>
                          </div>
                        </div>
                      </div>
                      <div class="form-btn">
                        <button class="submit-btn">Show flights</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

<div id="Contact" class="tabcontent">
    <form action="../logout.php">
        <button id="myButton" type="submit">logout</button> 
        </form>
        <form action="wordscramble1.html">
            <button id="myButton1" type="submit"><h3>Scramble</h3></button> 
            </form>
        <form action="project_quiz1.html">
                <button id="myButton2" type="submit"><h3>Quiz</h3></button> 
                </form>
<div class="body1"></div>
  
<!-- <button class="tablink1" onclick="openCity1a(event, 'quiz1')" id="defaultOpen2"><b>Its Quiz time!!!</b></button>
<button class="tablink1" onclick="openCity1a(event, 'picto')" ><b>PICTO GAME</b></button> -->

<!-- <div id="quiz1"  class="tabcontent2" > -->
  <!-- <div id="container">
    <div id="start"><p id="startp">Start Quiz</p></div>
    <form action="C:\Users\NAMRATHA\Desktop\webtech proj\anotherwordgame\wordscramble.html">
        <button id="myButton1" type="submit"><h3>Scramble</h3></button> 
        </form>
    <br>
        <br>
        <br><br>
        <br><br>
    <div id="quiz" style="display: none">
        
        <br><br>
        <br><br>
        <br>
        <div id="question"></div>
        <br><br>
        <div id="choices">
            <div class="choice" id="A" onclick="checkAnswer('choice A')"></div><br>
            <div class="choice" id="B" onclick="checkAnswer('choice B')"></div><br>
            <div class="choice" id="C" onclick="checkAnswer('choice C')"></div><br>
            <div class="choice" id="D" onclick="checkAnswer('choice D')"></div><br>
           
        </div>
         <div class="result" id="result"></div>
        <div id="progress"></div>
    </div>
    <div id="loader" style="display: none"></div>
    <div id="scoreContainer" style="display: none">
        <div id="quizsum"><p><u><b>Quiz Summary</b></u></p></div>
      </div>
</div>
</div>
<br><br>
<script src="project_quiz.js"></script> -->

<!-- <script>
  function openCity1a(evt, cityName,color) {
  var i, tabcontent2, tablinks;
  tabcontent2 = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent2.length; i++) {
    tabcontent2[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink1");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen2").click();
//   evt.style.backgroundColor = color;
</script> -->

</div>

<div id="About" class="tabcontent">
    <form action="../logout.php">
        <button id="myButton" type="submit">logout</button> 
        </form>
  <div>
    <select id="city">
        <option><p style="color:grey">Select city</p></option>
        <option value="bengaluru" >Bengaluru</option>
        <option value="delhi">Delhi</option>
        <option value="hyderabad">Hyderabad</option>
        <option value="kolkata">Kolkata</option>
        <option value="mumbai">Mumbai</option>
        
    </select>
    
</div> 

<div class="boxes">
        
    <div class="bengaluru box" id="heading"><p>Upcoming events in Bengaluru</p></div>
    <div class="bengaluru box" id="sub"><p id="b1">India – USA Lecture Series on Aging Aircraft (IULSAA)<br>Date:Wed,27 to Fri,29 Nov<br>Use code WMEV1 to avail discount<br>Location:IISC,Bengaluru, India
    </p></div>
    <div class="bengaluru box" id="sub"><p id="b2">Internal Auditor Training for Aerospace Quality Management <br>Date:Mon, 25 – Wed, 27 Nov<br>Use code WMEV2 to avail discount<br>Location:Bengaluru, India
    </p></div>
    <div class="bengaluru box" id="sub"><p id="b3">AeroDef India<br>Date:Wed, 18 – Fri, 20 Dec<br>Use code WMEV4 to avail discount<br>Location: Manpho Convention Center, Bengaluru, India</p></div>
    <div class="bengaluru box" id="sub"><p id="wsb">Aeromodelling Workshops In Your City!</div>

    <div class="delhi box" id="heading"><p>Upcoming events in Delhi</p></div>
    <div class="delhi box" id="sub"><p id="d1">International Conference on Mechanical and Aerospace Engineering<br>Date:Tue, 3 Dec, – Fri, 6 Dec<br>Use code WMEV1 to avail discount<br>Location: FabHotel Suncourt Karol Bagh, New Delhi, India</p></div>
    <div class="delhi box" id="sub"><p id="d1">AERODEF India<br>Date:Sun, 17 – Mon, 18 Nov<br>Use code WMEV2 to avail discount<br>Location:Unity Tower, Mayapuri Industrial Area Phase I, New Delhi, Delhi </p></div>
    <div class="delhi box" id="sub"><p id="wsd">Aeromodelling Workshops In Your City!</div>

    <div class="hyderabad box" id="heading"><p>Upcoming events in Hyderabad</p></div>
    <div class="hyderabad box" id="sub"><p id="wsh">Aeromodelling Workshops In Your City!</div>
    
    <div class="kolkata box" id="heading"><p>Upcoming events in Kolkata</p></div> 
    <div class="kolkata box" id="sub"><p id="wsk">Aeromodelling Workshops In Your City!</div>  

    <div class="mumbai box" id="heading"><p>Upcoming events in Mumbai</p></div> 
    <div class="mumbai box" id="sub"><p id="m1">International Conference & Expo on Aerospace and Unmanned Aerial Systems<br>Date:Mon, 17 Feb<br>Use code WMEV1 to avail discount<br>Location:Polly Esther's, ColabaMumbai, India</p></div>  
    <div class="mumbai box" id="sub"><p id="wsm">Aeromodelling Workshops In Your City!</div>   
</div>   
<script src="event_t1.js"></script>
</div>

<div id="About1" class="tabcontent">
    
    
    <div class="bg-image"></div>
    <div class="bg-text">
      <form action="../forum/main_forum.php">
        <button id="button1" type="submit">GO TO FORUMS</button>
    </div>
  </div>
  
  

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
