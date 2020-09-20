function createRequest(){
    try{
        request = new XMLHttpRequest();
    }catch (falha){
        alert("Faha ao criar AJAX")
    }

    return request;
}

function getMensage(msg){
    var request = createRequest();    

    request.open('GET','http://localhost/Chat TOB/Chat/assets/php/Chat.php?msgChat='+msg, true);    

    request.onreadystatechange = function(){
        if(request.readyState == 4){
            if(request.status == 200){
                console.log(request.responseText);
                console.log(msg);
                var responseJSON = JSON.parse(request.responseText);
                console.log(responseJSON);
                createMensageBot(responseJSON);
            }else
                alert('Erro ao realizar a requisição da mensagem!');
        }
    }

    request.send(null);
}

function clickMensage(obj){        
    //Requisição no servidor
    getMensage(obj.id);

    createMensageUser(obj.innerText);

    //Desabilitando o Botão
    obj.disabled = true;   
    obj.style.opacity = '0.5';
    buttonMouseOut(obj);
}

function buttonMouseEnter(obj){
    obj.style.background = 'rgb(50, 68, 103)';
    obj.style.boxShadow = '1px 0px 5px rgb(50, 68, 103)'; 
}

function buttonMouseOut(obj){
    obj.style.background = 'rgb(35, 47, 72)';
    obj.style.boxShadow = '';
}

function createMensageBot(msgJSON){

    var divChat = document.getElementsByClassName('chat-box')[0];
    
    var divBot = document.createElement('div');
    divBot.setAttribute('class','bot');

    var imgBot = document.createElement('img');
    imgBot.setAttribute('src','assets/images/icon-bot.png');

    var divText = document.createElement('div');
    divText.setAttribute('class','text');

    var h5Bot = document.createElement('h5');
    h5Bot.innerText = 'Bot Unifamma - Tob';

    var pBot = document.createElement('p');
    pBot.innerText = msgJSON['mensage'];

    divText.appendChild(h5Bot);
    divText.appendChild(pBot);

    var qtdeButtons;
    var buttonBot;

    for(qtdeButtons = 0; qtdeButtons < Object.keys(msgJSON['buttons']).length; qtdeButtons++ ){
        buttonBot = document.createElement('button');
        buttonBot.setAttribute('id',msgJSON['buttons'][qtdeButtons]['id']);
        buttonBot.setAttribute('onclick','clickMensage(this)');
        buttonBot.setAttribute('onmouseenter','buttonMouseEnter(this)');
        buttonBot.setAttribute('onmouseout','buttonMouseOut(this)');
        buttonBot.innerText = msgJSON['buttons'][qtdeButtons]['descButton'];
        divText.appendChild(buttonBot);
    }
    
    divBot.appendChild(imgBot);
    divBot.appendChild(divText);
    
    divChat.appendChild(divBot);
    
}

function createMensageUser(msg){

    var divChat = document.getElementsByClassName('chat-box')[0];

    var divUser = document.createElement('div');
    divUser.setAttribute('class','user');

    var imgUser = document.createElement('img');
    imgUser.setAttribute('src','assets/images/icon-user.png');
    imgUser.setAttribute('alt','Logo-User');
    imgUser.setAttribute('title','Logo-User');

    var divText = document.createElement('div');
    divText.setAttribute('class','text');

    var h5User = document.createElement('h5');
    h5User.textContent = 'Usuário';

    var pUser = document.createElement('p');
    pUser.textContent = msg;

    divText.appendChild(h5User);
    divText.appendChild(pUser);
    
    divUser.appendChild(imgUser);
    divUser.appendChild(divText);
    
    divChat.appendChild(divUser);
}