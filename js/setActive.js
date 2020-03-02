"use strict";

// breaks up URL into usable pieces
let splitItem = window.location.pathname.split("/");
console.log(splitItem);

let numParts = splitItem.length;
let desiredItem = splitItem[numParts - 1];
console.log('Desired Item ==> ' + desiredItem);

// gets all list items to manipulate -- results in an ERROR
let getItem = document.querySelectorAll("ul.menu a li");
console.log('Got Item ==> ' + getItem);
// ERROR: Doesn't end up returning anything (Says [object NodeList], and all items following result in "null")

// cycles through list items and finds one associated to URL - assigns active class
for(let i = 0; i <= getItem.length; i++){
   let page = getItem[i].getAttribute("href");
   console.log('Page URL ' + i + ' ==> ' + page);

   if(desiredItem === page){
      getItem[i].className = "active";
      // Assigns parent list item parent class 
      if(getItem[i].parentNode.parentNode.parentNode === "li") {
         getItem[i].parentNode.parentNode.parentNode.className = "parent";
      }  else {
         getItem[i].parentNode.parentNode.parentNode.className = "";
      }
   } else {
        getItem[i].className="";
   }
}