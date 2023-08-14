//JS : Tombol, Loader, carrousel, dan lain lain
//Attala, 28/07/2022
addEventListener("selectstart", event => event.preventDefault());

function ganti_isi(button){
    if(button.id == "analisis"){
         document.getElementById("i_analisis").style.display = "block";
         document.getElementById("i_data").style.display = "none";

    }
    else if(button.id == "robotik"){
         button.style.background = '#00AE86';
         document.getElementById("iot").style.background = '#FFFFFF';
         //document.getElementById("coding").style.background = '#636363';
         document.getElementById("isi_iot").style.display = "none";
         document.getElementById("isi_robotik").style.display = "block";
         //document.getElementById("isi_coding").style.display = "none";
    }

    /*if(button.id == "coding"){
         button.style.background = '#FF902E';
         document.getElementById("iot").style.background = '#636363';
         document.getElementById("robotik").style.background = '#636363';
         document.getElementById("isi_iot").style.display = "none";
         document.getElementById("isi_robotik").style.display = "none";
         document.getElementById("isi_coding").style.display = "block";
     } */
}

function tampil_kurikulum(button){
     if(button.id == "kurikulum_iot"){    
               var x = document.getElementById('isikurikulum_iot');
               if (x.style.display === 'none') {
               x.style.display = 'block';
               } else {
               x.style.display = 'none';
               }
          button.style.background = '#006CFF';
          document.getElementById("isikurikulum_robotik").style.display = "none";
          document.getElementById("isikurikulum_coding").style.display = "none";
          document.getElementById("isiroadmap_iot").style.display = "none";
          document.getElementById("isiroadmap_robotik").style.display = "none";
          document.getElementById("isiroadmap_coding").style.display = "none";
 
     }
     else if(button.id == "kurikulum_robotik"){
          var x = document.getElementById('isikurikulum_robotik');
               if (x.style.display === 'none') {
               x.style.display = 'block';
               } else {
               x.style.display = 'none';
               }
          button.style.background = '#00AE86';
          document.getElementById("isikurikulum_iot").style.display = "none";
          document.getElementById("isikurikulum_coding").style.display = "none";
          document.getElementById("isiroadmap_iot").style.display = "none";
          document.getElementById("isiroadmap_robotik").style.display = "none";
          document.getElementById("isiroadmap_coding").style.display = "none";
     }
     if(button.id == "kurikulum_coding"){
          var x = document.getElementById('isikurikulum_coding');
               if (x.style.display === 'none') {
               x.style.display = 'block';
               } else {
               x.style.display = 'none';
               }
          button.style.background = '#FF902E';
          document.getElementById("isikurikulum_iot").style.display = "none";
          document.getElementById("isikurikulum_robotik").style.display = "none";
          document.getElementById("isiroadmap_iot").style.display = "none";
          document.getElementById("isiroadmap_robotik").style.display = "none";
          document.getElementById("isiroadmap_coding").style.display = "none";
      }
}

function tampil_roadmap(button){
          if(button.id == "roadmap_iot"){    
               var x = document.getElementById('isiroadmap_iot');
               if (x.style.display === 'none') {
               x.style.display = 'block';
               } else {
               x.style.display = 'none';
               }
          button.style.background = '#006CFF';
          document.getElementById("isikurikulum_iot").style.display = "none";
          document.getElementById("isikurikulum_robotik").style.display = "none";
          document.getElementById("isikurikulum_coding").style.display = "none";
          document.getElementById("isiroadmap_robotik").style.display = "none";
          document.getElementById("isiroadmap_coding").style.display = "none";
     }
     else if(button.id == "roadmap_robotik"){
               var x = document.getElementById('isiroadmap_robotik');
               if (x.style.display === 'none') {
               x.style.display = 'block';
               } else {
               x.style.display = 'none';
               }
          button.style.background = '#00AE86';
          document.getElementById("isikurikulum_iot").style.display = "none";
          document.getElementById("isikurikulum_robotik").style.display = "none";
          document.getElementById("isikurikulum_coding").style.display = "none";
          document.getElementById("isiroadmap_iot").style.display = "none";
          document.getElementById("isiroadmap_coding").style.display = "none";
     }
     if(button.id == "roadmap_coding"){  
          var x = document.getElementById('isiroadmap_coding');
          if (x.style.display === 'none') {
          x.style.display = 'block';
          } else {
          x.style.display = 'none';
          }
          button.style.background = '#FF902E';
          document.getElementById("isikurikulum_iot").style.display = "none";
          document.getElementById("isikurikulum_robotik").style.display = "none";
          document.getElementById("isikurikulum_coding").style.display = "none";
          document.getElementById("isiroadmap_iot").style.display = "none";
          document.getElementById("isiroadmap_robotik").style.display = "none";
      }
}

//Slide Gambar
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

$(function () {
	"use strict";
	setTimeout(function () {
		$('.loader_bg').fadeToggle();
	}, 1500);
});