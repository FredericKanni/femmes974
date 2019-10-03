/* var myForm = document.querySelector("#contact-form");
console.log(myForm);
myForm.addEventListener('submit', function (e) {
    alert('Vous avez envoyé le formulaire !\n\nMais celui-ci a été bloqué pour que vous ne changiez pas de page.');
    e.preventDefault();
});

myForm.addEventListener('reset', function (e) {
    alert('Vous avez réinitialisé le formulaire !');
}); */

let envoie = document.querySelector('#envoie');
let allText = document.querySelectorAll("#contact_email, #contact_nom, #contact_sujet, #contact_message");
let recupere = document.querySelector('#recup');
function isEmail(myVar) {

    let regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$', 'i');
    return regEmail.test(myVar);

}


envoie.addEventListener('click', formule);

let para1 = document.createElement('p');
let para2 = document.createElement('p');
let para3 = document.createElement('p');
let para4 = document.createElement('p');


function formule() {

    para1.value = "";
    para2.value = "";
    para3.value = "";
    para4.value = "";

    recupere.appendChild(para1);
    recupere.appendChild(para2);
    recupere.appendChild(para3);
    recupere.appendChild(para4);

    para1.innerHTML = allText[0].value;
    para2.innerHTML = allText[1].value;
    para3.innerHTML = allText[2].value;
    para4.innerHTML = allText[3].value;

}