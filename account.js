

function calculeaza_total(){
  let total=0;

  for(let i=0;i<numOfElements;i++){
  let price=document.querySelectorAll("#subTotal")[i];
  total = total +  (price.innerHTML*1);
  }
  let input=document.querySelectorAll("#livrare_input");
  document.getElementById("total_cos").innerHTML=total.toFixed(2);
  if(input[1].checked)
    total=total+20;

  if(input[2].checked)
  total=total+50;

  document.getElementById("total_total_cos").innerHTML=total.toFixed(2);



}
var numOfElements = document.querySelectorAll(".item-quantity").length;

for(var i=0;i<numOfElements;i++){
  let minus_B = document.querySelectorAll(".btn-subtract")[i];
  let add_B = document.querySelectorAll(".btn-add")[i];
  let quantity_B = document.querySelectorAll(".item-quantity")[i];
  let price=document.querySelectorAll("#subTotal")[i];
  let price_one = document.querySelectorAll(".price_nr")[i];
  

  minus_B.addEventListener("click", function() {
    if (quantity_B.value > 0) {
      minus_B.disabled = false;
      quantity_B.value--;
      price.innerHTML=(price_one.innerHTML * quantity_B.value).toFixed(2);
      calculeaza_total()
    }
   ;
});

  add_B.addEventListener("click", function() {
    {
      minus_B.disabled = false;
      quantity_B.value++;
      price.innerHTML=(price_one.innerHTML * quantity_B.value).toFixed(2);
      calculeaza_total()

    }
  
});


}

