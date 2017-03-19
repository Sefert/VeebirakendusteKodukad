window.onload=function(){
    if (window.location.href.match('5s.html') != null) {
        var div = document.getElementById("neljas");
        div.onclick=function(){
            console.log("tere"); 
            div.style.top = Math.random()*500+"px";
            div.style.left = Math.random()*500+"px";
            console.log(Math.random()*500); 
          };
    };
    if (window.location.href.match('5sabakus.html') != null) {
        var div = document.getElementsByClassName("bead");
        window.addEventListener("mouseover", function(){
        for (var i=0;i<div.length;i++){
            if(window.getComputedStyle(div[i]).getPropertyValue("float") == "left"){
                div[i].addEventListener("click", function(e){
                    console.log(i);
                    e.target.style.cssFloat = "right"; 
                });  
            } else {
                div[i].addEventListener("click", function(e){
                    console.log(i);
                    e.target.style.cssFloat = "left";  
                });  
            };
        };
        });
    };
};