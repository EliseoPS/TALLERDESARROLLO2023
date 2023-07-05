<?php
      include("encabezado.php");
    ?>
    
    <?php
      include("navbar.php");
    ?>
      <h1 class="text-center mt-4">Suscribete a nuestro boletin de ofertas por correo </h1>
      <h2 class="fs-4 text-center">y recibe un código de 5% de descuento en consumibles</h2>
      <div class="container mx-5 mt-5">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label fs-5">Dirección de correo electronico</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <!-- <label for="" style="color: red;">Correo in-válido</label> -->
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label for="">Mantenme al tanto de ofertas semanales</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Suscribirse</button>
                  </form>
            </div>
        </div>
      </div>


      <button class="btn-abrir-popup" id="btn-abrir-popup"><div id="fijo"><img src="imagenes/LOGOWSP.png" alt="whatsapp" style="height: 70px; width: 70px;"></div></button>

      <div class="overlay" id="overlay">
        <div class="popup" id="popup">
          <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa-solid fa-x"></i></a>
          <h2>¡CONTACTANOS! <img src="imagenes/QRWSP.jpg" alt="QR" style="height: 200px; width: 200px;"></h2>
          <h3 style="font-size: 50px;">+52 477 766 3937</h3>

    
    <script src="popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d9a92591f7.js" crossorigin="anonymous"></script>
</body>
</html>