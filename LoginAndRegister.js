var card = document.getElementById("card");

function backpage(){
  card.style.transform = "rotateY(-180deg)";
}

function frontpage(){
  card.style.transform = "rotateY(0deg)";
}

let form = document.getElementById('lobby__form')

let displayName = sessionStorage.getItem('display_name')
if(displayName){
    form.name.value = displayName
}