jQuery(document).ready(($) => {
  $(".site-header .menu-principal .menu").slicknav({
    label: "",
    appendTo: ".site-header",
  });

  //Agregar Slider
  if($('.listado-testimoniales').length > 0){
      $('.listado-testimoniales').bxSlider({
        auto: true,
        mode: 'fade',
        controls: false
      });
  }
  

  //Mapa de leaflet
  if (
    document.querySelector("#lat") != undefined &&
    document.querySelector("#lat") != undefined &&
    document.querySelector("#direccion") != undefined
  ) {
    const lat = document.querySelector("#lat").value,
      lng = document.querySelector("#lng").value,
      direccion = document.querySelector("#direccion").value;

    if (lat && lng && direccion) {
      var map = L.map("mapa").setView([lat, lng], 15);

      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      }).addTo(map);

      L.marker([lat, lng]).addTo(map).bindPopup(direccion).openPopup();
    }
  }
});


//agrega position fija en el header al hacer scroll
window.onscroll = () => {
  const scroll = window.scrollY;

  const headerNav = document.querySelector('.barra-navegacion');
  const documentBody = document.querySelector('body');

  //si la cantidad de scroll es mayor, agregar una clase

  if(scroll > 300){
      headerNav.classList.add('fixed-top');
      documentBody.classList.add('ft-activo');
  }else{
    headerNav.classList.remove('fixed-top');
    documentBody.classList.remove('ft-activo');
  }
}