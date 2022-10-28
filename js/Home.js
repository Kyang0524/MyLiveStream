function CreateRoom(){
    let displayName = sessionStorage.getItem('display_name')

    if(!displayName){
        window.location = 'Home.html';
    }else{
        window.location = "Home.html?room=$displayName";
    }

}