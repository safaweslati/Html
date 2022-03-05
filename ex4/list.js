const getRandomColor= () => 
   "#"+Math.floor(Math.random()*1755488).toString();
const clickColorElement =(element)=>{
    element.addEventListener("click",
    (e)=>(e.target.style.color=getRandomColor()));

};
clickColorElement(document.querySelector("ol"));