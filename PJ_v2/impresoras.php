<?php
      include("encabezado.php");
    ?>
    
    <?php
      include("navbar.php");
    ?>

    <div class="text-center mt-3 mb-5">
        <h1>Nuestras Impresoras</h1>
    </div>

<div class="container-fluid" style="width: 100%;">
    <div class="row text-center justify-content-center" style="width: 100%;">
        
            <div class="card mx-5 mb-4 hvr-grow animate__animated animate__slideInUp" style="width: 18rem;">
                <img src="imagenes/IMP1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PocketJet 6M/8M Pro</h5>
                  <p class="card-text">Impresora de gran versatilidad en un pequeño empaque</p>
                  <a href="pocketJet6MPlus.php" class="btn btn-primary">Detalles</a>
                </div>
            </div>

            <div class="card mx-5 mb-4 img-grow animate__animated animate__slideInUp animate__delay-1s" style="width: 18rem;">
                <img src="imagenes/IMP2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Handheld 300H</h5>
                  <p class="card-text">Impresora de mano con display de 4.3 pulgadas</p>
                  <p class="card-text">Trabajos robustos</p>
                  <a href="HandHeld.php" class="btn btn-primary">Detalles</a>
                </div>
            </div>

            <div class="card mx-5 mb-4 img-grow animate__animated animate__slideInUp animate__delay-2s" style="width: 18rem;">
                <img src="imagenes/ATP600.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Pocketjet AT600-3p</h5>
                  <p class="card-text">Cabezal de impresion para implemetacion en bandas de producción</p>
                  <a href="Pocketjet AT600-3p.php" class="btn btn-primary">Detalles</a>
                </div>
            </div>       
            
            <div class="card mx-5 mb-4 img-grow animate__animated animate__slideInUp animate__delay-3s" style="width: 18rem;">
                <img src="imagenes/AT500.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">AT500 online printer</h5>
                  <p class="card-text">Libre de mantenimiento</p>
                  <p class="card-text">Trabajos robustos</p>
                  <a href="AT500.php" class="btn btn-primary">Detalles</a>
                </div>
            </div> 

            <div class="card mx-5 mb-4 img-grow animate__animated animate__slideInUp animate__delay-4s" style="width: 18rem;">
                <img src="imagenes/impresora3.jpg" class="card-img-top" alt="...">
                <img src="imagenes/controlador.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PJ600 Series online printer</h5>
                  <p class="card-text">Versátil</p>
                  <p class="card-text">De 1 a 6 cabezales separados o en cascada</p>
                  <a href="PJ600.php" class="btn btn-primary">Detalles</a>
                </div>
            </div> 
    </div>
</div>    
    
<?php
      include("botonWSP.php");
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/d9a92591f7.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="popup.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>