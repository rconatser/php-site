"use strict";

// breaks up URL into usable pieces
let splitItem = window.location.pathname.split("/").filter(str => str.length > 0);
console.log(splitItem);

let numParts = splitItem.length;
let desiredItem = splitItem[numParts - 1] === "phpsite" ? 'index.php' : splitItem[numParts - 1]
console.log('Desired Item ==> ' + desiredItem);

// gets all list items to manipulate -- results in an ERROR
let getItem = document.querySelectorAll("ul.menu a li");
let getDropdown = document.querySelectorAll("ul#sub a li");
let getLink = document.querySelectorAll("ul.menu a");
console.log('Got Item ==> ' + getItem);
console.log('Got Parent ==> ' + getLink)
// ERROR: Doesn't end up returning anything (Says [object NodeList], and all items following result in "null")

// cycles through list items and finds one associated to URL - assigns active class
for(let i = 0; i <= getLink.length; i++){
   let page = getLink[i].getAttribute("href");
   console.log('Page URL ' + i + ' ==> ' + page);

   if(desiredItem === page){
      getItem[i].className = "active";
      getDropdown[i].parentNode.parentNode.parentNode.className = "parent";
   } else {
        getItem[i].className="";
        getDropdown[i].parentNode.parentNode.parentNode.className = "";
   }
}