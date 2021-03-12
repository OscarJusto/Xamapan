//Menu de navegacion
const enlaces = document.getElementsByClassName('enlaces')[0];
const hamburguesa = document.getElementsByClassName('hamburguesa')[0];
const menuhamburguesa = document.getElementById('hamburguesa')
let abierto = false;

const toggleMenu = () => {
  enlaces.classList.toggle("enlaces2");
  enlaces.style.transition = "transform 0.5s ease-in-out";
}

/*
window.addEventListener("click", function(){
  toggleMenu();
})
*/

hamburguesa.addEventListener("click", function(){
  toggleMenu();
  if(document.querySelector(".enlaces.enlaces2")){
    abierto=true;
  }else{
    abierto=false;
  }
})

window.addEventListener("click", function(e){
  //this.console.log(e.target)
  //this.console.log(e.target)
  if(abierto){
    if(e.target !== menuhamburguesa){
      toggleMenu();
      abierto=false;
    }
  }
})


window.addEventListener("resize", function(){
  if(screen.width > 800){
    if(abierto){
      toggleMenu();
      enlaces.style.transition = "none";
      abierto=false;

    }
  }
})

//Efecto Lightbox

const imagenes = document.querySelectorAll(".img-galeria")
const imagenesLight = document.querySelector(".agregar-imagen")
const contenedorLight = document.querySelector(".imagen-light")
const hamburguer1 = document.getElementById('hamburguesa')

imagenes.forEach(imagen =>{
  imagen.addEventListener('click', ()=>{
    aparecerImagen(imagen.getAttribute('src'))

  })

})

contenedorLight.addEventListener('click',(e)=>{
  if(e.target !== imagenesLight){
    contenedorLight.classList.toggle('show')
    imagenesLight.classList.toggle('showImage')
    hamburguer1.style.opacity = '1'
  }

})


const aparecerImagen = (imagen)=>{
  imagenesLight.src = imagen;
  contenedorLight.classList.toggle('show')
  imagenesLight.classList.toggle('showImage')
  hamburguer1.style.opacity = '0'
}

//Envio de correo

$("#contact-form").on("submit", function(event){
  event.preventDefault();
  sendForm($(this))
  alert("Mensaje enviado")
  $("#contact-form")[0].reset();

  return false
});

function sendForm($form){

  //console.log($form.formObject())
  $.ajax({
   url: $form.attr("action"),
   method: "POST",
   dataType: "json",
   data: $form.formObject(),
   success: function(){
     alert("Mensaje enviado")
     $("#contact-form")[0].reset();
   }

  })

}

$.fn.formObject = function(){
  const form = {}

  $.each($(this).serializeArray(), (i,field)=>{
    form[field.name] = field.value || ""
  })

  return form

}
