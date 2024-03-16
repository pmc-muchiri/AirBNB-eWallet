const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const getStartedBtn = document.querySelector('.welcome-btn');


registerLink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
});


loginLink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
    
});

btnPopup.addEventListener('click', ()=>{
    wrapper.classList.add('active-popup');
    document.querySelector('.content-home').style.display = 'none';
});


iconClose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
    document.querySelector('.content-home').style.display = 'block'; // Show welcome message
});


getStartedBtn.addEventListener('click', ()=>{
    wrapper.classList.add('active-popup');
    document.querySelector('.content-home').style.display = 'none';
})