const container_about = document.querySelector('.main-box-container');
const contents = document.querySelectorAll('.about-content');
const buttons = document.querySelectorAll('.buttoon');

buttons.forEach( button => button.addEventListener('click', function() {
    container_about.classList.toggle('right-open');
}));



