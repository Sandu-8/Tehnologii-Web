function universal(x) {
  var imgc = document.getElementById("myP");
  var btnt = document.getElementById('btn1'); 
  var element = document.getElementById("myPara");


  if(window.location.pathname=='../index.html') {
    if ( imgc.style.display === "none") {
     
       imgc.style.display = "block";
       btnt.value = "hide";
     
       
    
    }else{
        imgc.style.display = "none";
        btnt.value = "show";
}
} 
else {
    if (x == 1)
    {
        element.innerHTML = "Let's watch the movie!";
    }
    else
    {
        element.innerHTML = "Maybe do you want to wacth something else!";
    }

}
}



