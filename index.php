<?php
require($_SERVER['DOCUMENT_ROOT'] . "/fitness/header/index.php");
?>
<link rel="stylesheet" type="text/css" href="circle.css" />
<div class="progress-container" align="center">
   <div class="circle" onclick="changeFat()">
     <div class="c100 p0 big green">
       <span id="main_fat">0%</span>
       <div class="slice">
         <div class="bar"></div>
         <div class="fill"></div>
       </div>
     </div>
     <div class="circle-text">
       <span>Fat</span>
     </div>
   </div>
   <div class="circle main"  onclick="changeCal()">
     <div class="c100 p0 main big blue">
       <span id='main_cal'>0%</span>
       <div class="slice">
         <div class="bar"></div>
         <div class="fill"></div>
       </div>
     </div>
     <div class="circle-text main">
       <span>Calories</span>
     </div>
   </div>
   <div class="circle" onclick="changeProt()">
     <div class="c100 p0 big orange">
       <span id='main_prot'>0%</span>
       <div class="slice">
         <div class="bar"></div>
         <div class="fill"></div>
       </div>
     </div>
     <div class="circle-text">
       <span>Protein</span>
     </div>
   </div>
 </div>
