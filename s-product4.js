var smallimg3=document.getElementsByClassName("small-img4");
var info3=document.getElementById("info4");


smallimg4[0].addEventListener("click",()=>{
    info4.innerText="  Mini Waffles Maker Machine";
})
smallimg4[1].addEventListener("click",()=>{
    info4.innerText="    STEM Magnetic Building Blocks Toy";
})
smallimg4[2].addEventListener("click",()=>{
    info4.innerText="   45ml| Carded Framed Persfume Travel Portable Containers ";
})
smallimg4[3].addEventListener("click",()=>{
    info4.innerText="   10kg Digital Weighing Machine  ";
})
smallimg4[4].addEventListener("click",()=>{
    info4.innerText="  Airpods wireless Bluetooth Charging Pro Max ";
})
smallimg4[5].addEventListener("click",()=>{
    info4.innerText="    2-in-1 100W 5A Fast Charging USB, Type C Cable ";
})


var qty=document.querySelector("#qty");
var mpPrice=document.querySelector("#price4");
const btn=document.querySelector("#btn");


const totalCost =(total)=>{
    document.querySelector("#cost").innerText=`You Total Price is :Rs${total}  `;
 
};

btn.addEventListener("click",()=>{
   
    var cost=mpPrice.innerText;
    console.log(cost);
   var quantity=qty.value;
  console.log(quantity);
 
  let total=mpPrice.innerText*qty.value;


  totalCost(total);
});