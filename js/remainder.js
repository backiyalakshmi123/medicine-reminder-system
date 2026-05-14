setInterval(function(){

let now=new Date();

let current=now.getHours()+":"+now.getMinutes();

document.querySelectorAll(".reminder").forEach(function(t){

if(t.innerText==current){
alert("Time to take your medicine!");
}

});

},60000);
