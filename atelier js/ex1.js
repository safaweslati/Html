var r= Math.floor(Math.random() * 10);
var difficulty = prompt("Saisir la difficulter (1,2,3)");

if (difficulty == 1) 
    tries = 6;
else if (difficulty == 2){
    tries = 4;
}
else if (difficulty == 3){
    tries = 3;
}
var bool=false

while(tries>0){
    tries --;
    var input = prompt("Enter un nombre:");
    if(input == r){
        window.alert("Winner");
        tries =0;
        bool=true
    }
    else {
        window.alert("Reste " + tries + " essaies." );
    } 
}
if(bool==false){
    window.alert("you lost")
}