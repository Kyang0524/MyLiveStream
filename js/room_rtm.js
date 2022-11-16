let handleMemberJoined = async (MemberId) => {
    console.log('A new member has joined the room:', MemberId)
    addMemberToDom(MemberId)

    let members = await channel.getMembers()
    updateMemberTotal(members)

    let {name} = await rtmClient.getUserAttributesByKeys(MemberId, ['name'])
    addBotMessageToDom(`Welcome ${name}! 🔥`)

}

let addMemberToDom = async (MemberId) => {
    let {name} = await rtmClient.getUserAttributesByKeys(MemberId, ['name'])

    let membersWrapper = document.getElementById('member__list')
    let memberItem = `<div class="member__wrapper" id="member__${MemberId}__wrapper">
                        <span class="green__icon"></span>
                        <p class="member_name">${name}</p>
                    </div>`

    membersWrapper.insertAdjacentHTML('beforeend', memberItem)
}

let updateMemberTotal = async (members) => {
    let total = document.getElementById('members__count')
    total.innerText = members.length
}
 
let handleMemberLeft = async (MemberId) => {
    removeMemberFromDom(MemberId)

    let members = await channel.getMembers()
    updateMemberTotal(members)
}

let removeMemberFromDom = async (MemberId) => {
    let memberWrapper = document.getElementById(`member__${MemberId}__wrapper`)
    let name = memberWrapper.getElementsByClassName('member_name')[0].textContent
    addBotMessageToDom(`${name} has left the room.`)
        
    memberWrapper.remove()
}

let getMembers = async () => {
    let members = await channel.getMembers()
    updateMemberTotal(members)
    for (let i = 0; members.length > i; i++){
        addMemberToDom(members[i])
    }
}

let handleChannelMessage = async (messageData, MemberId) => {
    console.log('A new message was received')
    let data = JSON.parse(messageData.text)

    if(data.type === 'chat'){
        addMessageToDom(data.displayName, data.message)
    }

    if(data.type === 'botchat'){
        addDonateMessageToDom(data.displayName, data.message)
        
    }

    if(data.type === 'user_left'){
        document.getElementById(`user-container-${data.uid}`).remove()

        if(userIdInDisplayFrame === `user-container-${uid}`){
            displayFrame.style.display = null
    
            for(let i = 0; videoFrames.length > i; i++){
                videoFrames[i].style.height = '300px'
                videoFrames[i].style.width = '300px'
            }
        }
    }
}

let sendMessage = async (e) => {
    e.preventDefault()

    let message = e.target.message.value
    channel.sendMessage({text:JSON.stringify({'type':'chat', 'message':message, 'displayName':displayName})})
    addMessageToDom(displayName, message)
    e.target.reset()
}

let addMessageToDom = (name, message) => {
    let messagesWrapper = document.getElementById('messages')

    let newMessage = `<div class="message__wrapper">
                        <div class="message__body">
                            <strong class="message__author">${name}</strong>
                            <p class="message__text">${message}</p>
                        </div>
                    </div>`

    messagesWrapper.insertAdjacentHTML('beforeend', newMessage)

    let lastMessage = document.querySelector('#messages .message__wrapper:last-child')
    if(lastMessage){
        lastMessage.scrollIntoView()
    }
}
var send_clicks_50  = 0;
var send_clicks_100 = 0;
var send_clicks_500  = 0;
var send_clicks_1000 = 0;
var send_clicks_2000  = 0;

var stopimg_50;
var stopimg_100;
var stopimg_500;
var stopimg_1000;
var stopimg_2000;
let addDonateMessageToDom = (name, message) => {
    let messagesWrapper = document.getElementById('messages')
    

    let newMessage = `<div class="message__wrapper">
    <div class="message__body__bot">
        <strong class="message__author__bot">Chat Room Bot</strong>
        <p class="message__text__bot"><strong >${name} </strong>${message}</p>
    </div>
    </div>
    `
    
    
    if(message == 'donate redbag'){
        function send_onClick_50() {   
            send_clicks_50 += 1;
            clearTimeout(stopimg_50);
            document.getElementById("clicks_50").innerHTML = ' '+send_clicks_50;
          };

        let showAnimationWrapper = document.getElementById('streams__container')
        let show = ``  
       
        send_onClick_50(); 
        $('#donate_50').fadeIn('fast');
   
        stopimg_50 = setTimeout(function() { 
        $('#donate_50').fadeOut('fast');
        send_clicks_50 = 0;
        }, 2000);
     
        if(send_clicks_50 == 99){
        $('#donate_50').fadeOut('fast');
        send_clicks_50 = 0;
        clearTimeout(stopimg_50);
        } 
        showAnimationWrapper .insertAdjacentHTML('beforeend',show)
    }else if(message == 'donate car'){
        function send_onClick_100() {   
            send_clicks_100 += 1;
            clearTimeout(stopimg_100);
            document.getElementById("clicks_100").innerHTML = ' '+send_clicks_100;
          };

        let showAnimationWrapper = document.getElementById('streams__container')
        let show = ``    
       
        send_onClick_100(); 
        $('#donate_100').fadeIn('fast');
   
        stopimg_100 = setTimeout(function() { 
        $('#donate_100').fadeOut('fast');
        send_clicks_100 = 0;
        }, 2000);
     
        if(send_clicks_100 == 99){
        $('#donate_100').fadeOut('fast');
        send_clicks_100 = 0;
        clearTimeout(stopimg_100);
        } 
        showAnimationWrapper .insertAdjacentHTML('beforeend',show)
    }else if(message == 'donate helicopter'){
        function send_onClick_500() {   
            send_clicks_500 += 1;
            clearTimeout(stopimg_500);
            document.getElementById("clicks_500").innerHTML = ' '+send_clicks_500;
          };

        let showAnimationWrapper = document.getElementById('streams__container')
        let show = ``    
       
        send_onClick_500(); 
        $('#donate_500').fadeIn('fast');
   
        stopimg_500 = setTimeout(function() { 
        $('#donate_500').fadeOut('fast');
        send_clicks_500 = 0;
        }, 2000);
     
        if(send_clicks_500 == 99){
        $('#donate_500').fadeOut('fast');
        send_clicks_500 = 0;
        clearTimeout(stopimg_500);
        } 
        showAnimationWrapper .insertAdjacentHTML('beforeend',show)
    }else if(message == 'donate roket'){
        function send_onClick_1000() {   
            send_clicks_1000 += 1;
            clearTimeout(stopimg_1000);
            document.getElementById("clicks_1000").innerHTML = ' '+send_clicks_1000;
          };

        let showAnimationWrapper = document.getElementById('streams__container')
        let show = ``    
       
        send_onClick_1000(); 
        $('#donate_1000').fadeIn('fast');
   
        stopimg_1000 = setTimeout(function() { 
        $('#donate_1000').fadeOut('fast');
        send_clicks_1000 = 0;
        }, 2000);
     
        if(send_clicks_1000 == 99){
        $('#donate_1000').fadeOut('fast');
        send_clicks_1000 = 0;
        clearTimeout(stopimg_1000);
        } 
        showAnimationWrapper .insertAdjacentHTML('beforeend',show)
    }

    
    messagesWrapper.insertAdjacentHTML('beforeend', newMessage)

    let lastMessage = document.querySelector('#messages .message__wrapper:last-child')
    if(lastMessage){
        lastMessage.scrollIntoView()
    }
}

let addBotMessageToDom = (botMessage) => {
    let messagesWrapper = document.getElementById('messages')

    let newMessage = `<div class="message__wrapper">
                        <div class="message__body__bot">
                            <strong class="message__author__bot">Chat Room Bot</strong>
                            <p class="message__text__bot">${botMessage}</p>
                        </div>
                    </div>`

    messagesWrapper.insertAdjacentHTML('beforeend', newMessage)

    let lastMessage = document.querySelector('#messages .message__wrapper:last-child')
    if(lastMessage){
        lastMessage.scrollIntoView()
    }
}

let leaveChannel = async () => {
    await channel.leave()
    await rtmClient.logout()
}


window.addEventListener('beforeunload', leaveChannel)
let messageForm = document.getElementById('message__form')
messageForm.addEventListener('submit', sendMessage)
