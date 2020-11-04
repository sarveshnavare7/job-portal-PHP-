document.addEventListener('DOMContentLoaded' , function(){
  window.addEventListener('scroll' , myFunction);
  var navbar = document.getElementById("row-header")
  var sticky = navbar.offsetTop;

  function myFunction(){
    if (window.pageYOffset >= sticky){
      navbar.classList.add("sticky");
      document.getElementById("con").style.paddingTop = "40px";
    }
    else{
      navbar.classList.remove("sticky");
      document.getElementById("con").style.paddingTop = "0px";
    }
  }
});

function postgrad(){
  var check = document.getElementById("postgraduation1");
  var show = document.getElementById("postgraduation");
  if (check.checked == true){
    show.style.display = "block";
  }
  else{
    show.style.display = "none";
  }
}

function grad(){
  var check = document.getElementById("graduation1");
  var show = document.getElementById("graduation");
  if (check.checked == true){
    show.style.display = "block";
  }
  else{
    show.style.display = "none";
  }
}

function exp(){
  var check = document.getElementById("experienced").checked;
  var show = document.getElementById("exp1");
  
  if (check == true){
    show.style.display = "inline-block";
  }
  else{
    show.style.display = "none";
  }
}



$(document).ready(function(){
  $("#myCarousel").carousel({interval: 3000});
  
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});


