document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    alert('¡Muchas gracias por sus comentarios!, procuraremos resolver y/o ponernos en contacto lo antes posible.');

    document.getElementById('contactForm').reset();
});