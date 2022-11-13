currentname.innerHTML = sessionStorage.getItem('display_name');
currentmoney.innerHTML = sessionStorage.getItem('currentmoney');


var clicks_50  = 0;
var clicks_100 = 0;
var clicks_500  = 0;
var clicks_1000 = 0;
var clicks_2000  = 0;

var stopimg_50;
var stopimg_100;
var stopimg_500;
var stopimg_1000;
var stopimg_2000;


function donate_50(){
    var currentmoney = document.getElementById("currentmoney");
    var money=document.getElementById('btn_50').value;
    checkmoney = parseInt(currentmoney.innerHTML) - parseInt(money);
    if(checkmoney>= 0){
      
   onClick_50(); 
   $('#donate_50').fadeIn('fast');
   
   stopimg_50 = setTimeout(function() { 
         $('#donate_50').fadeOut('fast');
         clicks_50 = 0;
   }, 2000);
     
   if(clicks_50 == 99){
     $('#donate_50').fadeOut('fast');
         clicks_50 = 0;
     clearTimeout(stopimg_50);
   } 

    
    
    currentmoney.innerHTML = parseInt(currentmoney.innerHTML) - parseInt(money);
    var clientmoney = currentmoney.innerHTML;
    var clientname = currentname.innerHTML;
    var streamername = sessionStorage.getItem('streamer_name');

        
    $.ajax({
        type:"post",
        url:"Donate_50.php",
        data:
        {
           'clientmoney' :clientmoney,
           'clientname':clientname,
           'streamername' : streamername
        },
        cache:false,
        success: function (html)
        {
          // alert(clientmoney);
          // alert(clientname);
          // alert(streamername);
         let message  = `donate redbag`;
         channel.sendMessage({text:JSON.stringify({'type':'botchat','message':message,'displayName':displayName})});
         addDonateMessageToDom(`${displayName}`,`${message}`);
        }
    });
    return false;
  }else{
    alert("Not enough money!");
  }
}

function donate_100(){
  var currentmoney = document.getElementById("currentmoney");
  var money=document.getElementById('btn_100').value;
  checkmoney = parseInt(currentmoney.innerHTML) - parseInt(money);
  if(checkmoney >= 0){

    onClick_100(); 
    $('#donate_100').fadeIn('fast');

    stopimg_100 = setTimeout(function() { 
      $('#donate_100').fadeOut('fast');
      clicks_100 = 0;
    }, 3000);
  
  if(clicks_100 == 99){
      $('#donate_100').fadeOut('fast');
      clicks_100 = 0;
  clearTimeout(stopimg_100);
}  
   
    
    currentmoney.innerHTML = parseInt(currentmoney.innerHTML) - parseInt(money);
    var clientmoney = currentmoney.innerHTML;
    var clientname = currentname.innerHTML;
    var streamername = sessionStorage.getItem('streamer_name');
    $.ajax({
        type:"post",
        url:"Donate_100.php",
        data:
        {
           'clientmoney' :clientmoney,
           'clientname':clientname,
           'streamername' : streamername
        },
        cache:false,
        success: function (html)
        {
         //   alert(clientmoney);
         //   alert(clientname);
         //   alert(streamername);
         let message  = `donate car`;
         channel.sendMessage({text:JSON.stringify({'type':'botchat','message':message,'displayName':displayName})});
         addDonateMessageToDom(`${displayName}`,`${message}`);
        }
    });
    return false;
}else{
  alert("Not enough money!");
}
}

function donate_500(){
   var currentmoney = document.getElementById("currentmoney");
   var money=document.getElementById('btn_500').value;
   checkmoney = parseInt(currentmoney.innerHTML) - parseInt(money);
   if(checkmoney>= 0){

  onClick_500(); 
  $('#donate_500').fadeIn('fast');

stopimg_500 = setTimeout(function() { 
     $('#donate_500').fadeOut('fast');
     clicks_500 = 0;
}, 4000);
 
if(clicks_500 == 99){
 $('#donate_500').fadeOut('fast');
     clicks_500 = 0;
 clearTimeout(stopimg_500);
}  
  
   
   currentmoney.innerHTML = parseInt(currentmoney.innerHTML) - parseInt(money);
   var clientmoney = currentmoney.innerHTML;
   var clientname = currentname.innerHTML;
   var streamername = sessionStorage.getItem('streamer_name');
   $.ajax({
       type:"post",
       url:"Donate_500.php",
       data:
       {
          'clientmoney' :clientmoney,
          'clientname':clientname,
          'streamername' : streamername
       },
       cache:false,
       success: function (html)
       {
         //  alert(clientmoney);
         //  alert(clientname);
         //  alert(streamername);
         let message  = `donate helicopter`;
         channel.sendMessage({text:JSON.stringify({'type':'botchat','message':message,'displayName':displayName})});
         addDonateMessageToDom(`${displayName}`,`${message}`);
       }
   });
   return false;
}else{
  alert("Not enough money!");
}
}

function donate_1000(){
   var currentmoney = document.getElementById("currentmoney");
   var money=document.getElementById('btn_1000').value;
   checkmoney = parseInt(currentmoney.innerHTML) - parseInt(money);
    if(checkmoney>= 0){
  onClick_1000(); 
  $('#donate_1000').fadeIn('fast');

stopimg_1000 = setTimeout(function() { 
     $('#donate_1000').fadeOut('fast');
     clicks_1000 = 0;
}, 5000);
 
if(clicks_1000 == 99){
 $('#donate_1000').fadeOut('fast');
     clicks_1000 = 0;
 clearTimeout(stopimg_1000);
}  
  
   
   currentmoney.innerHTML = parseInt(currentmoney.innerHTML) - parseInt(money);
   var clientmoney = currentmoney.innerHTML;
   var clientname = currentname.innerHTML;
   var streamername = sessionStorage.getItem('streamer_name');
   $.ajax({
       type:"post",
       url:"Donate_1000.php",
       data:
       {
          'clientmoney' :clientmoney,
          'clientname':clientname,
          'streamername' : streamername
       },
       cache:false,
       success: function (html)
       {
         //  alert(clientmoney);
         //  alert(clientname);
         //  alert(streamername);
         let message  = `donate roket`;
         channel.sendMessage({text:JSON.stringify({'type':'botchat','message':message,'displayName':displayName})});
         addDonateMessageToDom(`${displayName}`,`${message}`);
       }
   });
   return false;
}else{
  alert("Not enough money!");
}
}

function donate_2000(){
  var currentmoney = document.getElementById("currentmoney");
  var money=document.getElementById('btn_2000').value;
  checkmoney = parseInt(currentmoney.innerHTML) - parseInt(money);
  if(checkmoney>= 0){
  onClick_2000(); 
  $('#donate_2000').fadeIn('fast');

stopimg_2000 = setTimeout(function() { 
     $('#donate_2000').fadeOut('fast');
     clicks_2000 = 0;
}, 6000);
 
if(clicks_2000 == 99){
 $('#donate_2000').fadeOut('fast');
     clicks_2000 = 0;
 clearTimeout(stopimg_2000);
}  
  
   
   currentmoney.innerHTML = parseInt(currentmoney.innerHTML) - parseInt(money);
   var clientmoney = currentmoney.innerHTML;
   var clientname = currentname.innerHTML;
   var streamername = sessionStorage.getItem('streamer_name');
   $.ajax({
       type:"post",
       url:"Donate_2000.php",
       data:
       {
          'clientmoney' :clientmoney,
          'clientname':clientname,
          'streamername' : streamername
       },
       cache:false,
       success: function (html)
       {
          alert(clientmoney);
          alert(clientname);
          alert(streamername);
       }
   });
   return false;
}else{
  alert("Not enough money!");
}
}


 function onClick_50() {   
   clicks_50 += 1;
   clearTimeout(stopimg_50);
   document.getElementById("clicks_50").innerHTML = ' '+clicks_50;
 };
 function onClick_100() {   
   clicks_100 += 1;
   clearTimeout(stopimg_100);
   document.getElementById("clicks_100").innerHTML = ' '+ clicks_100;
 };
 function onClick_500() {   
   clicks_500 += 1;
   clearTimeout(stopimg_500);
   document.getElementById("clicks_500").innerHTML = ' '+ clicks_500;
 };
 function onClick_1000() {   
   clicks_1000 += 1;
   clearTimeout(stopimg_1000);
   document.getElementById("clicks_1000").innerHTML = ' '+ clicks_1000;
 };
 function onClick_2000() {   
   clicks_2000 += 1;
   clearTimeout(stopimg_2000);
   document.getElementById("clicks_2000").innerHTML = ' '+ clicks_2000;
 };
