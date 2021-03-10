var tabs_all = document.querySelectorAll(".sidebar ul li");
// var tabs = document.querySelectorAll(".sidebar ul.one > li");
var tabs_wrap = document.querySelectorAll(".tab_wrap");

tabs_all.forEach(function(tab, tab_index){
  tab.addEventListener("click", function(){

    tabs_all.forEach(function(tab){
      tab.classList.remove("active");
    });  

    tab.classList.add("active");

    tabs_wrap.forEach(function(content, content_index) {
      if( ((content_index) && (tab_index)) == 0 ) {
			}
      else if( (content_index) ==   (tab_index)) {
				content.style.display = "block";
			}
			else{
				content.style.display = "none";
			}       
    }); 
  });
});

$('.feat-btn').click(function () {
  $('aside ul .feat-show').toggleClass("show");
  $('aside ul .first').toggleClass("rotate");
});

// $('nav ul li').click(function(){
//     $(this).addClass("active").siblings().removeClass("active");
// 	$('nav ul li ul li').siblings().removeClass("active");
// });


const links = document.getElementsByClassName('sidebar')[0];
const btn_left = document.getElementsByClassName('btn-left')[0];
const menu_left = document.getElementById('btn-left');
let opened = false;

const toggleMen = () => {
  links.classList.toggle("sidebar2");
  links.style.transition = "transform 0.5s ease-in-out";
}

// window.addEventListener("click", function(){
//   toggleMen();
// })

btn_left.addEventListener("click", function () {
  toggleMen();
  if (document.querySelector(".sidebar.sidebar2")) {
    opened = true;
  } else {
    opened = false;
  }
})

window.addEventListener("click", function (e) {
  if (opened) {
    if (e.target !== menu_left) {
      toggleMen();
      opened = false;
    }
  }
})

window.addEventListener("resize", function () {
  if (screen.width > 800) {
    if (opened) {
      toggleMen();
      links.style.transition = "none";
      opened = false;

    }
  }
})
