
var li1 = document.getElementById('home');
var li3 = document.getElementById('contact');
var li4 = document.getElementById('about');
var li5 = document.getElementById('myacc');
var li6 = document.getElementById('signin');
var li7 = document.getElementById('signup');
var btn = document.getElementById('btn');
var txt = document.getElementById('lg');
btn.onclick = function(){
if(txt.value === "fr"){
        li1.textContent = "acceuil";
        li3.textContent = "nous contacter";
        li4.textContent = "a propos nous";
        li5.textContent = "mon compte";
        li6.textContent = "se connecter";
        li7.textContent = "incription";
}
else{
        li1.textContent = "home";
        li3.textContent = "Contact us";
        li4.textContent = "about us";
        li5.textContent = "my Account";
        li6.textContent = "sign in";
        li7.textContent = "sign up";
}
};
