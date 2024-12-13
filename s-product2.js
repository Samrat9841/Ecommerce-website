var smallimg2=document.getElementsByClassName("small-img2");
var info2=document.getElementById("info2");


smallimg2[0].addEventListener("click",()=>{
    info2.innerText=" Black Ankle Cut Printed Shoes";
})
smallimg2[1].addEventListener("click",()=>{
    info2.innerText="  Zeblaze New Btalk 2 Lite Smart Watch";
})
smallimg2[2].addEventListener("click",()=>{
    info2.innerText="  Ultra Thin Watches Fashion Sport Leather Watch";
})
smallimg2[3].addEventListener("click",()=>{
    info2.innerText="    1 Piece Dual-Ended Silicone Facial Brush";
})
smallimg2[4].addEventListener("click",()=>{
    info2.innerText="   New Trendy Metal Petal Stud Earrings";
})
smallimg2[5].addEventListener("click",()=>{
    info2.innerText="  Enacolor Enamel Flower Clover Earrings";
})


var qty=document.querySelector("#qty");
var mpPrice=document.querySelector("#price2");
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