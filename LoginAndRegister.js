var card = document.getElementById("card");

function backpage(){
  card.style.transform = "rotateY(-180deg)";
}

function frontpage(){
  card.style.transform = "rotateY(0deg)";
}

let form = document.getElementById('username')

let displayName = sessionStorage.getItem('display_name')
if(displayName){
    form.name.value = displayName
}

function showusername(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    sessionStorage.setItem('display_name', this.responseText);
  }
  xhttp.open("GET", "getuserName.php?q="+str);
  xhttp.send();
}