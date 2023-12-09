let showNav = document.getElementById('show-nav');

showNav.addEventListener('click', (e) => {

    console.log(e.target)

    let navContainer = document.getElementById('nav-container');
    if (navContainer.classList.contains('hide-nav')) {

        navContainer.classList.add('show-nav');
        navContainer.classList.remove('hide-nav')
        document.body.classList.add('overflow-hidden');
    } else if (navContainer.classList.contains('show-nav')) {
        navContainer.classList.remove('show-nav');
        navContainer.classList.add('hide-nav');

        document.body.classList.remove('overflow-hidden');
    }
})


let header = document.getElementById('header')
let scrollPosition = () => window.scrollY;
let lastScroll = 0;
let checkClassHide = () => header.classList.contains('hide');
let headerScroll = 158;

let checkWindow = () => {
    let windowW = window.innerWidth;
    let breakPoint = 1200;

    if (windowW >= breakPoint) {
        headerScroll = 158;
    }
}


window.addEventListener('scroll', (e) => {


    if (scrollPosition() > lastScroll && !checkClassHide()) {

        if (scrollPosition() > headerScroll) {

            header.classList.add('hide');
        } else if (scrollPosition() < headerScroll) {
            header.classList.remove('hide');
            header.classList.remove('show')
        }


    } else if (scrollPosition() < lastScroll && checkClassHide()) {
        header.classList.remove('hide');

        header.classList.add('show');


    }
    lastScroll = scrollPosition();
})


let loginForm = document.getElementById('sign-up-form');

let submitSignUpForm = document.getElementById('submit-sign-up-form');



submitSignUpForm.addEventListener('click', (e) => {
    e.preventDefault();


    const signUpFormXHR = new XMLHttpRequest();
    let signUpFormData = new FormData(e.target.closest('#sign-up-form'));
    signUpFormXHR.open('POST', '/signUp-action.php')


    let signUpInputs = document.querySelectorAll('.form-input');

    signUpInputs.forEach((signUpInput) => {

        if (signUpInput.checkValidity() !== true) {

            signUpInput.classList.add('border', 'border-danger');

            setTimeout(() => {
                signUpInput.classList.remove('border', 'border-danger');
            }, 3000)
        }
    })
    if (e.target.closest('#sign-up-form').reportValidity() === true) {
        signUpFormXHR.send(signUpFormData);

        signUpFormXHR.onload = () => {

            console.log(JSON.parse(signUpFormXHR.response));
        }
    }
})

// let passwordSignUp = document.getElementById('password');
// let showPassword = document.querySelector('.password-icon');
//
// showPassword.addEventListener('click', () => {
//     if (passwordSignUp.type === 'password') {
//         passwordSignUp.type = 'text';
//     }
//     else {
//         passwordSignUp.type = 'password';
//     }
//     console.log(true)
// })
//
