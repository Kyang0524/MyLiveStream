currentname.innerHTML = sessionStorage.getItem('display_name');
currentmoney.innerHTML = sessionStorage.getItem('currentmoney');

function donate_50(){
    var currentmoney = document.getElementById("currentmoney");
    var money=document.getElementById('money').value;
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
           alert(clientmoney);
           alert(clientname);
           alert(streamername);
        }
    });
    return false;
 }