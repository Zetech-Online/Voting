let chatBtn = document.querySelector(".chat");
let textArea = document.querySelector(".text-area");
let closeBtn = document.querySelector("#close-btn");


chatBtn.addEventListener('click', (e) =>{
    chatBtn.style.display ="none";
    textArea.style.display ="block";
});


closeBtn.addEventListener('click',() =>{
    chatBtn.style.display ="block";
    textArea.style.display ="none";
})


// Appending chat


 let userMsg = document.querySelector(".receiver-msg");
 let userTxt = document.querySelector(".message");
 let msg = document.querySelector(".receiver-msg p");
 let sendBtn = document.querySelector(".send-btn");
 let newMsg = document.createElement ("p");
//  newMsg.setAttribute("contenteditable", "true")
 

  sendBtn.addEventListener('click', () =>{
     newMsg.innerText = userTxt.value
     
   
        if(userTxt.value == null){
        
        
            }else{
                userTxt.value = null;
                userMsg.appendChild(newMsg);
            } 
 
  });
        

   console.log(sendBtn);