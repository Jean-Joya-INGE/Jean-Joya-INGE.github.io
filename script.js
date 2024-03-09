
        // Función para mostrar la ventana emergente de cookies al cargar la página
        window.onload = function() {
            mostrarVentanaCookies();
        };

      
        document.addEventListener("DOMContentLoaded", function() {
            var menuBtn = document.querySelector(".menu-btn");
            var menuItems = document.querySelector(".menu-items");
        
            menuBtn.addEventListener("click", function() {
                menuItems.classList.toggle("show");
            });
        });
        
 

        // Función para mostrar la ventana emergente de cookies
        function mostrarVentanaCookies() {
            var aceptarCookies = confirm("¿Desea aceptar el uso de cookies?");
            if (aceptarCookies) {
                // Aquí puedes agregar el código para aceptar las cookies
                alert("Cookies aceptadas. Gracias por tu aceptación.");
            } else {
                // Aquí puedes agregar el código para rechazar las cookies
                alert("Cookies rechazadas. Algunas funcionalidades pueden verse afectadas.");
            }
        }
