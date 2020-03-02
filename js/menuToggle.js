//Create a button and give it an ID of "hamburgerBtn"
//Attach an ID of "primaryNav" to the UL of the unordered list that holds your links

"use strict";

function toggleMenu() {
   document.getElementById("hamburgerBtn").classList.toggle("open");
   document.getElementById("mobile").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 

let getItem = document.querySelectorAll(".nav ul li");
console.log(getItem);

for(let i = 0; i <= getItem.length; i++){
   let page = getItem[i].getAttribute("href");
   console.log('Page URL ' + i + ' ==> ' + page);

   if(window.location.pathname === page){
      getItem[i].className = "active";
      if(getItem[i].parentNode.parentNode.parentNode === "li") {
         getItem[i].parentNode.parentNode.parentNode.className = "parent";
      }  else {
         getItem[i].parentNode.parentNode.parentNode.className = "";
      }
   } else {
        getItem[i].className="";
   }
}
