
document.addEventListener('DOMContentLoaded', function () {
    const tituloCategoria = document.getElementById('categoria-titulo');
  
    const categorias = document.querySelectorAll('.categoria');
    categorias.forEach(categoria => {
      categoria.addEventListener('click', function (event) {
        event.preventDefault();
        
        categorias.forEach(categoria => {
          categoria.classList.remove('active');
        });
        
        this.classList.add('active');
        tituloCategoria.textContent = this.dataset.categoria;
      });
    });
  });
  





const productosPorCategoria = {
    "Oki Outfit": [
         {
            nombre: "Playera Aespa",
            imagen: "../../../public/img/Oki Outfit/Aespa.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Agust D",
            imagen: "../../../public/img/Oki Outfit/Agust D.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Born Pikn Pikn",
            imagen: "../../../public/img/Oki Outfit/Born Pikn Pikn.png",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Born Pink Black",
            imagen: "../../../public/img/Oki Outfit/Born Pink Black.png",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Daewchita",
            imagen: "../../../public/img/Oki Outfit/Daewchita.png",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Hobi on the Street",
            imagen: "../../../public/img/Oki Outfit/Hobi On The Street.png",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Hoodie Born Pink",
            imagen: "../../../public/img/Oki Outfit/Hoodie Born Pink.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera HOPE",
            imagen: "../../../public/img/Oki Outfit/HOPE.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Im The King",
            imagen: "../../../public/img/Oki Outfit/Im The King.png",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Jimin Face",
            imagen: "../../../public/img/Oki Outfit/Jimin Face.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Jimin",
            imagen: "../../../public/img/Oki Outfit/Jimin.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera JK Seven",
            imagen: "../../../public/img/Oki Outfit/JK Seven.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Layover",
            imagen: "../../../public/img/Oki Outfit/Layover.png",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Marry Me",
            imagen: "../../../public/img/Oki Outfit/Marry Me.png",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera SEVEN",
            imagen: "../../../public/img/Oki Outfit/SEVEN.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Stray Kids",
            imagen: "../../../public/img/Oki Outfit/Stray Kids.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Suga",
            imagen: "../../../public/img/Oki Outfit/Suga.png",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Terraplanista",
            imagen: "../../../public/img/Oki Outfit/Terraplanista.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera The Astronaut",
            imagen: "../../../public/img/Oki Outfit/The Astronaut.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Yet To Come Black",
            imagen: "../../../public/img/Oki Outfit/Yet To Come Black.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Yet To Come White",
            imagen: "../../../public/img/Oki Outfit/Yet To Come White.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Yoongi Collage",
            imagen: "../../../public/img/Oki Outfit/Yoongi Collage.jpg",
            categoria: "Oki Outfit"
          },
          {
            nombre: "Playera Yoongi Mandala",
            imagen: "../../../public/img/Oki Outfit/Yoongi Mandala.png",
            categoria: "Oki Outfit"
          }
    ],
    "Oki Fanmade": [
          {
            nombre: "Tote Bag",
            imagen: "../../../public/img/Oki Fanmade/Tote Bag.png",
            categoria: "Oki Fanmade"
          },
          {
            nombre: "Vaso Personalizado",
            imagen: "../../../public/img/Oki Fanmade/Vaso.png",
            categoria: "Oki Fanmade"
          }
    ],
    "Merch Oficial": [
          {
            nombre: "Album Golden",
            imagen: "../../../public/img/Merch Oficial/Album GOLDEN.png",
            categoria: "Merch Oficial"
          },
          {
            nombre: "Album Layover",
            imagen: "../../../public/img/Merch Oficial/Album Layover.png",
            categoria: "Merch Oficial"
          },
          {
            nombre: "Libtro Beyond The Story",
            imagen: "../../../public/img/Merch Oficial/Beyond The Story.png",
            categoria: "Merch Oficial"
          },
          {
            nombre: "Merch By BTS",
            imagen: "../../../public/img/Merch Oficial/Merch By BTS.png",
            categoria: "Merch Oficial"
          },
          {
            nombre: "Photobook",
            imagen: "../../../public/img/Merch Oficial/photobook.png",
            categoria: "Merch Oficial"
          },
          {
            nombre: "Picket Suga",
            imagen: "../../../public/img/Merch Oficial/Picket Suga.png",
            categoria: "Merch Oficial"
          },
          {
            nombre: "Seven",
            imagen: "../../../public/img/Merch Oficial/SEVEN.png",
            categoria: "Merch Oficial"
          },
    ]
  };
  

  const contenedorCarruseles = document.querySelector('.w3-main');

  for (const categoria in productosPorCategoria) {
      const productos = productosPorCategoria[categoria];
  
      const carrusel = document.createElement('div');
      carrusel.classList.add('carousel', 'slide');
      carrusel.id = `${categoria}-carousel`;
  
      let innerHTML = `
          <h2 class="w3-text-teal" style="text-align: center; margin-top: 40px; margin-bottom: 20px;">${categoria}</h2>
          <div class="carousel-inner">
      `;
  
      for (let i = 0; i < productos.length; i += 3) {
          innerHTML += `<div class="row">`;
  
          for (let j = i; j < i + 3; j++) {
              const producto = productos[j];
              if (producto) {
                  innerHTML += `
                      <div class="col-md-4">
                          <div class="card">
                              <img src="${producto.imagen}" alt="${producto.nombre}">
                              <div class="card-body">
                                  <h3>${producto.nombre}</h3>
                                  <p class="card-text">${producto.categoria}</p>
                                  <a href="#" class="fa fa-shopping-cart car-icon" aria-hidden="true"></a>
                              </div>
                          </div>
                      </div>
                  `;
              } else {
                  innerHTML += `
                      <div class="col-md-4">
                      </div>
                  `;
              }
          }
  
          innerHTML += `</div>`;
      }
  
      innerHTML += `</div></div>`;
      carrusel.innerHTML = innerHTML;
      contenedorCarruseles.appendChild(carrusel);
}
  