<?php
      include("encabezado.php");
    ?>
    
    <?php
      include("navbar.php");
    ?>

<div class="container-fluid w-100 mt-5">
        <div class="row w-100 justify-content-center text-center">
            <div class="card mx-5 mb-4 hvr-grow animate__animated animate__slideInUp" style="width: 18rem;">
                
                    <img src="imagenes/Psv.jpg" class="card-img-top" alt="Servicios Post venta">
                    <div class="card-body">
                      <h5 class="card-title">Asesorías</h5>
                      <p class="card-text">- Acompañamiento para seleccionar la mejor opción</p>
                      <p class="card-text">- Capacitación de usuarios y personal de mantenimiento</p>
                      
                    
                    </div>
                
            </div>
            <div class="card mx-5 mb-4 hvr-grow animate__animated animate__slideInUp animate__delay-1s" style="width: 18rem;">
                
                    <img src="imagenes/mant.jpg" class="card-img-top" alt="Mantenimiento">
                    <div class="card-body">
                      <h5 class="card-title">Mantenimiento</h5>
                      <p class="card-text">- Mantenimiento preventivo</p>
                      <p class="card-text">- Mantenimiento correctivo</p>
                      <p class="card-text">- Polizas de servicio</p>
                      <p class="card-text">- Capacitación</p>
                      
                    </div>
                 
            </div>
              <div class="card mx-5 mb-4 hvr-grow animate__animated animate__slideInUp animate__delay-2s" style="width: 18rem;">
                
                    <img src="imagenes/refaccion3.jpg" class="card-img-top" alt="Piezas de refaccion">
                    <div class="card-body">
                      <h5 class="card-title">Venta de refacciones</h5>
                      <p class="card-text">- Refacciónes para equipos actuales, obsoletos o sin distribución en México</p>
                      <p class="card-text">- Consumibles</p>
                      <p class="card-text">- Piezas disponibles</p>
                    </div>
                  
              </div>
        </div>
    </div>

    <?php
      include("botonWSP.php");
    ?>
    


    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
          return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    
    <script src="popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d9a92591f7.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>