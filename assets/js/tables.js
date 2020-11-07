function tableheight(){
    var table1 = document.getElementById("art");
    var h = table1.offsetHeight;
    if (h>=300){
      document.getElementById("divForTable").classList.add('bkgimg');
      document.getElementById("divForTable").classList.remove('bkgimg-fixed');
    }
  }

window.onload = function() {
    tableheight();
  };