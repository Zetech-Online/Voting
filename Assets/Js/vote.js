let resultsEl = document.querySelector(".results-el");
let closeEl = document.querySelector('.close-slip');
let slipBtn = document.querySelector('.slip');


slipBtn.addEventListener('click',()=>{
    resultsEl.style.display = 'block';
})


closeEl.addEventListener('click',()=>{
    resultsEl.style.display = 'none';
})