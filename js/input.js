function submit(){

  const input1=Number(document.getElementById("input1").value);
  const input2=Number(document.getElementById("input2").value);
  const sum = input1 + input2;

  //Output 
  const output = document.getElementById("p1").textContent = `Sum: ${sum}`;
  window.alert(output);
}

