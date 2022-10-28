var card = document.getElementById("card");

function backpage(){
  card.style.transform = "rotateY(-180deg)";
}

function frontpage(){
  card.style.transform = "rotateY(0deg)";
}

function saveData(){
  var username = document.getElementById("username");
  sessionStorage.setItem("display_name", username.value)
  window.location = `room.html?room=${username.value}`

}
