const add = document.getElementById("addBtn");
const minus = document.getElementById("minusBtn");
const reset = document.getElementById("resetBtn");
const label = document.getElementById("ctrLabel");
let ctr = 0;

addBtn.addEventListener("click", function (){
  ctr++;
  label.textContent = ctr;
})

minusBtn.addEventListener("click", function (){
  ctr--;
  label.textContent = ctr;
})

resetBtn.addEventListener("click", function (){
  ctr = 0;
  label.textContent = ctr;
})