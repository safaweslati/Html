const elements=document.querySelector("#change");
const text=document.querySelector("p");
elements.addEventListener("change",(e)=>{
    text.style[e.target.id]=
    e.target.id=="font-size" ? e.target.value+"px":e.target.value;
})