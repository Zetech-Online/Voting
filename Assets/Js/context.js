let bodyEl = document.querySelector("body");
let contextEl = document.querySelector(".context-el");
let closeEl = document.querySelector(".close-context");

function disableselect(e){
    return false;
}

function reEnable(){
return true
}

function noRightClick(){
    return false;
}

function noContext(){  
    return false;
}

//if IE4+
bodyEl.onselectstart = noRightClick;
bodyEl.oncontextmenu = noContext;

// if NS6
if(window.sidebar){
    bodyEl.onmousedown = disableselect
    bodyEl.onclick = reEnable
}


// Show context Menu

bodyEl.addEventListener('contextmenu', ()=>{
    contextEl.style.display = "block";
})


// Close Context menu

  closeEl.addEventListener('click', ()=>{
    contextEl.style.display = "none";
  })




