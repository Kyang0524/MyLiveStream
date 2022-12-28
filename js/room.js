let messagesContainer = document.getElementById('messages');
messagesContainer.scrollTop = messagesContainer.scrollHeight;

const memberContainer = document.getElementById('members__container');
const memberButton = document.getElementById('members__button');

const chatContainer = document.getElementById('messages__container');
const chatButton = document.getElementById('chat__button');

let activeMemberContainer = false;

memberButton.addEventListener('click', () => {
  if (activeMemberContainer) {
    memberContainer.style.display = 'none';
  } else {
    memberContainer.style.display = 'block';
  }

  activeMemberContainer = !activeMemberContainer;
});

let activeChatContainer = false;

chatButton.addEventListener('click', () => {
  if (activeChatContainer) {
    chatContainer.style.display = 'none';
  } else {
    chatContainer.style.display = 'block';
  }

  activeChatContainer = !activeChatContainer;
});

let displayFrame = document.getElementById('stream__box')
let videoFrames = document.getElementsByClassName('video__container')
let userIdInDisplayFrame = null;

let expandVideoFrame = (e) => {

  let child = displayFrame.children[0]
  if(child){
      document.getElementById('streams__container').appendChild(child)
  }

  displayFrame.style.display = 'block'
  displayFrame.appendChild(e.currentTarget)
  userIdInDisplayFrame = e.currentTarget.id

  for(let i = 0; videoFrames.length > i; i++){
    if(videoFrames[i].id != userIdInDisplayFrame){
      videoFrames[i].style.height = '100px'
      videoFrames[i].style.width = '100px'
    }
  }

}



function deleteroom(){
    var streamername = sessionStorage.getItem('streamer_name');
    $.ajax({
        type:"post",
        url:"DeleteRoom.php",
        data:
        {
           'streamername' :streamername
        },
        cache:false,
        success: function (html)
        {
          // alert("You have left the room, we are deleting your room information");
          setTimeout(1000);
        }
    });

}

function play() {
  let message  = `playing music`;
  channel.sendMessage({text:JSON.stringify({'type':'music','message':message,'displayName':displayName})});
  addDonateMessageToDom(`${displayName}`,`${message}`);
}
function pause() {
  var audio = document.getElementById("audio");
  audio.pause();
  let message  = `pause music`;
  channel.sendMessage({text:JSON.stringify({'type':'music','message':message,'displayName':displayName})});
  addDonateMessageToDom(`${displayName}`,`${message}`);
}

displayFrame.addEventListener('click', hideDisplayFrame)