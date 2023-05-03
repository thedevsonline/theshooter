
         function showDiv(divId) {
         const divs = document.querySelectorAll('.data-informantion');
         for (let i = 0; i < divs.length; i++) {
          if (divs[i].id === divId) {
            divs[i].style.display = 'block';
          } else {
            divs[i].style.display = 'none';
          }
         }
         }
         var dis = document.getElementById('div1')
         window.onload = function() {
         dis.style.display = 'block';
         };


function myFunction() {
  var x = document.getElementById("orderDetails");
  if (x.style.display === "none") {
    x.style.display = "contents";
  } else {
    x.style.display = "none";
  }
} 


 var checkbox = document.getElementById("checkbox6");
var priceDiv = document.getElementById("priceDiv");

checkbox.addEventListener("change", function() {
  if (checkbox.checked) {
    priceDiv.style.display = "flex";
  } else {
    priceDiv.style.display = "none";
  }
});







    const textarea = document.getElementById('myTextarea');
const wordCount = document.getElementById('wordCount');

textarea.addEventListener('input', function() {
  const text = this.value.trim();
  const characterCount = text.length;
  
  if (characterCount > 350) {
    textarea.value = text.slice(0, 350);
    wordCount.textContent = 350;
  } else {
    wordCount.textContent = characterCount;
  }
});      





    const textareaD = document.getElementById('longDescription');
const wordCountD = document.getElementById('wordCountlongDescription');

textareaD.addEventListener('input', function() {
  const text = this.value.trim();
  const characterCount = text.length;
  
  if (characterCount > 3000) {
    textareaD.value = text.slice(0, 3000);
    wordCountD.textContent = 3000;
  } else {
    wordCountD.textContent = characterCount;
  }
}); 