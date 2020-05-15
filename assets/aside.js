var p2 = document.getElementById('p1');
var p1 = document.getElementById('p2');
var btn = document.getElementById('btn');
var txt = document.getElementById('lg');
var li1 = document.getElementById('home');
var li3 = document.getElementById('contact');
var li4 = document.getElementById('about');
var li5 = document.getElementById('myacc');
var li6 = document.getElementById('signin');
var li7 = document.getElementById('signup');

btn.onclick = function(){
if(txt.value === "fr"){
        p1.textContent = "FRENCH lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        p2.textContent = "FRENCH lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        li1.textContent = "acceuil";
        li3.textContent = "nous contacter";
        li4.textContent = "a propos nous";
        li5.textContent = "mon compte";
        li6.textContent = "se connecter";
        li7.textContent = "incription";
}
else{
        p1.textContent = "lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        p2.textContent = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        li1.textContent = "home";
        li3.textContent = "Contact us";
        li4.textContent = "about us";
        li5.textContent = "My Account";
        li6.textContent = "Sign In";
        li7.textContent = "Sign up";
}
};
