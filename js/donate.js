currentname.innerHTML = sessionStorage.getItem('display_name');
currentmoney.innerHTML = sessionStorage.getItem('currentmoney');

function DonateValue(donateValue) {
     var currentmoney = document.getElementById("currentmoney");
     currentmoney.innerHTML = parseInt(currentmoney.innerHTML) - parseInt(donateValue);
}