let dateEl = document.querySelector('.date');
let timeEl = document.querySelector('.time');

dateEl.innerHTML = new Date().toDateString();
timeEl.innerHTML = new Date().toLocaleTimeString();

    