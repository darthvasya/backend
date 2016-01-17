var block = document.querySelector(".super");

var button = document.querySelector(".brick-click1");
button.addEventListener("click", function() {
  block.classList.remove('show2');
  block.classList.add('show1');
});

var button = document.querySelector(".brick-click2");
button.addEventListener("click", function() {
  block.classList.remove('show1');
  block.classList.add('show2');
});
//for responsive
var button = document.querySelector(".brick-click1-r");
button.addEventListener("click", function() {
  block.classList.remove('show2');
  block.classList.add('show1');
});

var button = document.querySelector(".brick-click2-r");
button.addEventListener("click", function() {
  block.classList.remove('show1');
  block.classList.add('show2');
});

var button = document.querySelector(".super");
button.addEventListener("click", function() {
  block.classList.remove('show1');
  block.classList.remove('show2');
});
