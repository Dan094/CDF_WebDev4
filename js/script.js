

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
      

  var logo = document.querySelector('.logo'),
      aboutus = document.querySelector('.aboutus'),
      aboutusEmpt = document.querySelector('.aboutusEmpty');
  

// about us 
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
  


//drag and scroll Horizontal
const slider = document.querySelector('.sliderCont');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 1; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;
  console.log(walk);
});

// Menu 

var navWrapper = document.querySelector('bigtxt');
var navColor = document.querySelector('#nav');



window.onscroll = function() {this.scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 800 || document.documentElement.scrollTop < 800) {

    navColor.style.backgroundColor="#3c3c3c00";


  } else {
    // herotxt.style.opacity="0%";
    navColor.style.backgroundColor="#1F1A1D";

  }
}


