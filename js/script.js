

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
      

  var logo = document.querySelector('.logo');
  var aboutus = document.querySelector('.aboutus');
  var aboutusEmpt = document.querySelector('.aboutusEmpty');


aboutusEmpt.addEventListener('click', function (){
  aboutus.style.marginLeft=-200+"rem";
  aboutusEmpty.style.opacity="1";
});

aboutus.addEventListener('click', function (){
  aboutus.style.marginLeft=-200+"rem";
  aboutusEmpty.style.opacity="1";
});

logo .addEventListener('click', function (){
  aboutus.style.marginLeft=0+"rem";
  aboutusEmpty.style.opacity="0";
});
  
