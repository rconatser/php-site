"use strict";

// breaks up URL into usable pieces
let splitItem = window.location.pathname.split("/").filter(str => str.length > 0);
console.log(splitItem);

let numParts = splitItem.length;
let desiredItem = splitItem[numParts - 1] === "phpsite" ? 'index.php' : splitItem[numParts - 1]
console.log('Desired Item ==> ' + desiredItem);

// gets all list items to manipulate
let getItem = document.querySelectorAll("ul.menu a li");
let getDropdown = document.querySelectorAll("ul#sub a li");
console.log('Got Item ==> ' + getItem);

// cycles through list items and finds one associated to URL - assigns active class
for(let i = 0; i <= getItem.length; i++){
   let page = getItem[i].parentNode.getAttribute("href");
   console.log('Page URL ' + i + ' ==> ' + page);

   if(desiredItem === page){
      getItem[i].classList.toggle("active");
   }

   let sub = getDropdown[i].parentNode.getAttribute("href");
   if(desiredItem === sub) {
      getDropdown[i].parentNode.parentNode.parentNode.classList.toggle("parent");
   }
}