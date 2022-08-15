<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="UTF-8">
    <title>Clock</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="app2.js"></script>


    <section class="clock_main_class">
    
<div class="clock_face_image"> 
           <img width="200px" height="200px" src="svg/clock_face.svg"></div>

    
        <div class="clock">
            <div class="hour">
                <div class="h" id="h"></div>
            </div>
            
            
            <div class="minute">
                <div class="m" id="m"></div>
            </div>
            
            
            
        </div>
        
        <div class="am_pm"></div>
        <div class="day_name"></div>
        <div class="date_today"></div>
        
        
        <div id="clock_second_hand"> </div>
        
        
    </section>
    
    
    
    <style>
    .am_pm{ position: absolute; z-index: 10; top: 60px; left: 90px;  
    font-size: 10px; }
    
    .day_name{position: absolute; z-index: 10; top: 130px; left: 90px;  
    font-size: 10px; }
    
    .date_today{ position: absolute; z-index: 10; top: 115px; left: 75px;  
    font-size: 10px; }
    
    
    
.hour-hand {
  position: absolute;
  z-index: 5;
  width: 4px;
  height: 65px;
  background: #333;
  top: 79px;
  transform-origin: 50% 72px;
  left: 50%;
  margin-left: -2px;
  border-top-left-radius: 50%;
  border-top-right-radius: 50%;
}

.minute-hand {
  position: absolute;
  z-index: 6;
  width: 4px;
  height: 100px;
  background: #666;
  top: 46px;
  left: 50%;
  margin-left: -2px;
  border-top-left-radius: 50%;
  border-top-right-radius: 50%;
  transform-origin: 50% 105px;
}


#clock_second_hand {
  position: absolute;
  z-index: 130;
  width: 50px;
  height: 2px;
  background: red;
  
  left: 100px;
  top: 100px;
  margin-left: -1px;
  transform-origin: 0% 0px;
  transform: rotate(270deg);
  
}


  body{ background: url(img/background_image.jpeg) #212121; 
  background-size: auto;
  background-repeat: repeat;  }

  
  




</style>
    
</body>
</html>