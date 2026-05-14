// window.addEventListener('load',()=>{

const cards = document.querySelectorAll('.card, .dashboard-card');

window.addEventListener('scroll', () => {
    cards.forEach(card => {
        const position = card.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;

        if(position < screenPosition){
            card.classList.add('fade-in');
        }
    });
});

// Button click animation
const buttons = document.querySelectorAll('button');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        button.style.transform = 'scale(0.95)';

        setTimeout(() => {
            button.style.transform = 'scale(1)';
        }, 150);
    });
});