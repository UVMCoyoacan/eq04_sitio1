document.addEventListener("DOMContentLoaded", function() {

  loadContent('../src/components/inicio/public/inicio.html');

  // Manejar clics en los elementos del menú del encabezado
  var menuItems = document.querySelectorAll('header nav ul li a');
  menuItems.forEach(function(item) {
      item.addEventListener('click', function(event) {
          event.preventDefault();
          var page = this.getAttribute('href');
          loadContent(page); // Utiliza la ruta relativa desde el index.html
      });
  });
});

function loadContent(page) {
  var contentContainer = document.getElementById("content");
  contentContainer.innerHTML = ''; // Limpiar el contenedor antes de cargar el nuevo contenido

  var objectElement = document.createElement('object');
  objectElement.setAttribute('type', 'text/html');
  objectElement.setAttribute('data', page);
  objectElement.setAttribute('width', '100%');
  objectElement.setAttribute('height', '100%');

  contentContainer.appendChild(objectElement);
}
