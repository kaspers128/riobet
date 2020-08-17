'use strict';

function modal(){
    console.log('ready');

    const authLink = document.querySelector('.header-ul__link-auth');

    console.dir(authLink);

    authLink.addEventListener('click', () => {
        //e.preventDefault();
        console.log('ready!');
    })
}

export default modal;