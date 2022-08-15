
function my_clock() {

var deg = 6;
var h = document.querySelector('#h');
var m = document.querySelector('#m');
var second= document.querySelector('#clock_second_hand');
var am_pm= document.querySelector('.am_pm');
var day_name= document.querySelector('.day_name');
var date_today= document.querySelector('.date_today');




//var second_image=document.querySelector('.second_image');


 var english_months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];


    var english_days = ['Sun', 'Mon ', 'Tue', 'Wed ', 'Thu', 'Fri', 'Sat'];
    


    let day = new Date();
    let hh = day.getHours() * 30;
    let mm = day.getMinutes() * deg;
    let ss = day.getSeconds() * deg;
    
    
    
    
    
    
    
    h.style.transform = `rotateZ(${(hh) + (mm/12)}deg)`;
    m.style.transform = `rotateZ(${mm}deg)`;
  second.style.transform = `rotateZ(${ss-90}deg)`;  
  
  
  
  
  
  
  
 if(day.getHours()>12) {   am_pm.innerText=`PM`;  } else { am_pm.innerText=`AM`;  }
  
  
  
 day_name.innerText=`${english_days[day.getDay()]}`;
 date_today.innerText=`${day.getDate()}/${day.getMonth()+1}/${day.getFullYear()} `;
  
    
}


setInterval(function () {

my_clock();



}, 1);