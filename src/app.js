document.addEventListener("DOMContentLoaded", function() {

  loadContent('../src/components/public/inicio.html');

  // Manejar clics en los elementos del menú del encabezado
  var menuItems = document.querySelectorAll('header nav ul li a');
  menuItems.forEach(function(item) {
      item.addEventListener('click', function(event) {
          event.preventDefault();
          var page = this.getAttribute('href');
          loadContent(page); 
      });
  });
});

function loadContent(page) {
  var contentContainer = document.getElementById("content");
  contentContainer.innerHTML = ''; // Limpiar el contenedor antes de cargar el nuevo contenido

  var iframeElement = document.createElement('iframe');
  iframeElement.setAttribute('src', page);
  iframeElement.setAttribute('frameborder', '0'); // Elimina el borde del iframe
  iframeElement.style.width = '100%';
  iframeElement.style.height = '100%';
  iframeElement.style.overflow = 'auto'; // Agrega scroll si el contenido es más grande que el iframe

  contentContainer.appendChild(iframeElement);
}
