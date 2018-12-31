'use strict';

// touch friendly links
if(document.getElementsByTagName('a'))
{
    function eventHandler(event) {
        this.classList.toggle('hover');
    }
    
    let links = document.getElementsByTagName('a');
    
    [].forEach.call(links, function(link) {
        link.addEventListener('touchstart', eventHandler);
        link.addEventListener('touchend', eventHandler);
    });
}

// link from init-page
if(document.querySelector('.init-page'))
{
    let link = document.querySelector('.init-page .mixit-btn');
    let user = document.getElementById('user-selector');
    
    link.addEventListener('click', function(event) {
        if(user.className === 'd-none') link.href = 'login.html';
        else link.href = 'ean.html';       
    });
}

// form of login page
if(document.getElementById('login-form'))
{
    let login = document.getElementById('login-form');
    let escape = document.getElementById('escape');
    let formBg = document.querySelector('.form-bg');
    let users = document.querySelectorAll('.user-link');
    let active = 'active';

    //for(let i = 0; i < users.length; ++i)
    //{
    //    users[i].addEventListener('click', function() {
    //        login.classList.add(active);
    //    });    
    //}

    //Array.prototype.forEach.call(users, function(user) {
    //   user.addEventListener('click', function() {
    //       login.classList.add(active);
    //   });
    //});

    [].forEach.call(users, function(user) {
       user.addEventListener('click', function(event) {
           event.preventDefault();
           login.classList.add(active);
       });
    });

    escape.addEventListener('click', function() {
       login.classList.remove(active);   
    });
    
    formBg.addEventListener('click', function() {
       login.classList.remove(active);   
    });

    document.addEventListener('keyup', function(event) {
        if(event.key == 'Escape') login.classList.remove(active);
    });   
}