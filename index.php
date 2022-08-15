<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>Detect Battery Status</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500&display=swap"
      rel="stylesheet"
    />
    
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style.css" />
    
    
  </head>
  <body>


<div id="battery_icon"> </div>

<div id="cont" data-pct ="">
  <span id="demo"></span>


            <svg id="svg" width="200" height="200" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
            
            
            <defs>
            <linearGradient id="GradientColor">
               <stop offset="0%" stop-color="#e91e63" />
               <stop offset="50%" stop-color="brown" />
               <stop offset="100%" stop-color="#673ab7" />
            </linearGradient>
         </defs>
         
         <g id="djbhai_circle_g1">
         
      
  <circle   id="svg_clock_minutes" cx="70" cy="150" r="20" stroke="red" fill="transparent"  stroke-linecap="round" stroke-width="1"></circle>
        
         <circle id="clock_second"  cx="130" cy="150" r="20"  fill="black"  stroke-linecap="round" stroke-width="1" stroke="red"></circle>
         
         <circle  id="svg_clock_hour" cx="100" cy="50" r="20" stroke="red"  fill="transparent"  stroke-linecap="round" stroke-width="1"></circle>
         
              <text  x="67px" y="150px" stroke="none" stroke-width=".5px" dy=".3em" fill="black" font-size="10px"> S</text>
              
              <text x="125" y="150px" stroke="none" stroke-width=".5px" dy=".3em" fill="black" font-size="10px"> M</text>
              
              <text  x="95px" y="50px" stroke="none" stroke-width=".5px" dy=".3em" fill="black" font-size="10px"> H</text>
              
              <circle id="bar2" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565" stroke-dashoffset="0" stroke-width="5"></circle>
 <circle  id="circle_1" r="90" cx="100" cy="100"  fill="transparent" stroke-dasharray="565" stroke-dashoffset="565" stroke-width="5" stroke-linecap="round"></circle>
 
              </g>
 
</svg>
              
              
            </svg>
            


            
            </div>
          
  
  
  
  
  
  
  
  
  <style> 
  
  
@media (min-width: 360px) {
  body{ background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSlNnVwi5GVD4okDyK1UWdaXdIFlKvaW-kzQ&usqp=CAU) #212121; 
  
  background-size: auto;
  background-repeat: repeat;
  
  }
 
  }
  
  

@media (min-width: 760px) {
  body{ background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSlNnVwi5GVD4okDyK1UWdaXdIFlKvaW-kzQ&usqp=CAU) #212121; 
  
  
  background-repeat: repeat;
  background-size: 100%; }
  
 
  }
  



  .hide{ display: none; }
  #demo{ z-index: 100; color: black;
  
  text-shadow: 0px 20px 2px rgba(255, 255, 255, 0.4);
  
  }
        #demo{ position: absolute; left: 90px; top: 80px;
        font-size: 20px; 
        
  background-size: auto; }
  
  
  
        
        
    #cont{background: transparent; 
  display: block;
  height: 200px;
  width: 200px;
  margin: auto auto;
  border-radius: 100%;
  position: fixed;
  
  
}

#cont:after{
  position: absolute;
  display: block;
  height: 160px;
  width: 160px;
  left: 50%;
  top: 50%;
  content: attr(data-pct)" ";
  margin-top: -80px;
  margin-left: -80px;
  border-radius: 100%;
  line-height: 160px;
  font-size: 2em;
  color: #000;
}

                 
        #circle_1{ 
        fill: transparent;
        stroke: white;
        stroke-width: 5;
        stroke-dasharray: 565;
        stroke-dashoffset: 0;
        }
        
        
        #bar2{    fill: white;
        stroke-width: 5;
        stroke: #ddd;
        stroke-dasharray: 565;
        stroke-dashoffset: 0; }
        
        #clock_second , #svg_clock_minutes, #svg_clock_hour{fill: none;
        stroke-width: 1;
        
        stroke: url(#GradientColor);
        
        stroke-dasharray: 125;
        stroke-dashoffset: 125; }
        
        
        #clock_second_fill{ fill: none;
        stroke-width: 1;
        stroke: #ddd !important;
        
        stroke-dasharray: 125;
       
        stroke-dashoffset: 0;
         }
        
        
        
       .djbhai_anim{animation: djbhai 1s linear 0s infinite;  }
      
      #clock_second, #svg_clock_minutes, #svg_clock_hour {animation: djbhai2 5s linear 0s infinite; }

                @keyframes djbhai{
                
      100% {  stroke-dashoffset: 0;    }
}



@keyframes djbhai2{

      100% {  stroke-dashoffset: 0;    }
}



@media (min-width: 360px) { #cont{ top: 30%; left: 80px; }
  }
  
  
  @media (min-width: 720px) { #cont{ top: 40%; left: 40%; }
  }
 
  
  


        </style>
  
    
    
    <script src="script.js"></script>
    
    
          
<script>

var demo=document.getElementById("demo");
var bar=document.getElementById("circle_1");
var svg_battery_percentage=document.getElementById("svg_battery_percentage");
</script>


  </body>
</html>