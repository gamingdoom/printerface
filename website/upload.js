//selecting all required elements
const dropArea = document.querySelector(".drag-area"),
dragText = dropArea.querySelector("header"),
button = dropArea.querySelector("button"),
input = dropArea.querySelector("input");
let file;

input.addEventListener("change", function(){
  file = this.files[0];
  dropArea.classList.add("active");
});