var smallimg3=document.getElementsByClassName("small-img3");
var info3=document.getElementById("info3");


smallimg3[0].addEventListener("click",()=>{
    info3.innerText="  1 Piece Crystal Wind Chime";
})
smallimg3[1].addEventListener("click",()=>{
    info3.innerText="   Plain Tall Water Glass| Set of 6";
})
smallimg3[2].addEventListener("click",()=>{
    info3.innerText=" Black Bead Heart Pendant Chain ";
})
smallimg3[3].addEventListener("click",()=>{
    info3.innerText="  4pcs Soft Stretchable wide Strap scruncy  ";
})
smallimg3[4].addEventListener("click",()=>{
    info3.innerText="  USB Handheld Mini Fan ";
})
smallimg3[5].addEventListener("click",()=>{
    info3.innerText="     5pcs beautiful 5 inch Table Decor Flower Pot ";
})

var qty=document.querySelector("#qty");
var mpPrice=document.querySelector("#price3");
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