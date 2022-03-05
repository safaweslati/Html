function newElement(){
    var li = document.createElement("li");
    var myInput=document.querySelector("input").value;
    var t =document.createTextNode(myInput);
    li.appendChild(t);
    var myUL = document.querySelector('ul');
    if (myInput ===''){
        alert('you need to write sth !');
    }else{
        myUL.appendChild(li);
    }
    document.querySelector('input').value='';

    var close= document.createElement('span');
    var txt=document.createTextNode('\u00D7');
    close.className='close';
    close.appendChild(txt);
    li.appendChild(close);

    close.addEventListener('click',function(){
        this.parentElement.style.display='none';
    })
}