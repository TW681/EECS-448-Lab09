function check() {

 let phoneQ = document.querySelector("#Smart Phone");
 let headphoneQ = document.querySelector("#headphone");
 let chargerQ = document.querySelector("#charger");
//These are variables for the shipping being selected
let freeQ = document.querySelector("#free");
let bigQ = document.querySelector("#big");
let litQ = document.querySelector("#lit");

let passwordCheck = document.querySelector('#password');


 if ((phoneQ.value == 0) && (headphoneQ.value == 0) && (chargerQ.value == 0))
 {
   alert ("Please add an item or items to the Cart!");
   event.preventDefault();
 }

 if ((freeQ.checked == false) && (bigQ.checked == false) && (litQ.checked == false))
 {
   alert ("Please select a shipping type!");
   event.preventDefault();
 }

 if (passCheck.value.length == 0)
 {
   alert ("Please enter a password!");
   event.preventDefault();
 }
}
