
const btn1_ctn = document.getElementsByClassName("btn1_container")[0];
const one = document.querySelector(".fas");
btn1_ctn.addEventListener("click", () => {
  one.classList.toggle("fa-circle");
  one.classList.toggle("fa-moon");
  one.classList.toggle("active1");
  btn1_ctn.classList.toggle("changeBg");
});

function black() {
    var element = document.body;
    element.classList.toggle("dark-mode");
 }

 var popup = document.getElementById("myPopup");
 var openPopup = document.getElementById("openPopup");
 var closePopup = document.getElementById("closePopup");

 openPopup.onclick = function() {
     popup.style.display = "flex";
 }

 closePopup.onclick = function() {
     popup.style.display = "none";
 }

 window.onclick = function(event) {
     if (event.target === popup) {
         popup.style.display = "none";
     }
   }

   var popup2 = document.getElementById("myPopup2");
   var openPopup2 = document.getElementById("openPopup2");
   var closePopup2 = document.getElementById("closePopup2");
  
   openPopup2.onclick = function() {
       popup2.style.display = "flex";
   }
  
   closePopup2.onclick = function() {
       popup2.style.display = "none";
   }
  
   window.onclick = function(event) {
       if (event.target === popup2) {
           popup2.style.display = "none";
       }
     }
     