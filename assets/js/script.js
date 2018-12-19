'use strict';

let login = document.getElementById('login');
let escape = document.getElementById('escape');
let users = document.querySelectorAll('.users li');
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
   user.addEventListener('click', function() {
       login.classList.add(active);
   });
});

escape.addEventListener('click', function() {
   login.classList.remove(active);   
});

document.addEventListener('keyup', function(event) {
    if(event.key == 'Escape') login.classList.remove(active);
});