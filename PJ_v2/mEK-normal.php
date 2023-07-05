<?php
      include("encabezado.php");
    ?>
    
    <?php
      include("navbar.php");
    ?>
      <div class="container-fluid">
        <div class="row w-100">
            <div class="col-12 col-md-12">
                 <a href="consumibles.php"><i class="fa-solid fa-arrow-left fa-2xl mt-5 mx-5 mb-2" style="color: #000000;"></i></a>
                 
                 
            </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row w-100">
            <div class="col-6 col-md-6">
                <img src="imagenes/MEKnormal.jpg" alt="" class="mx-5 mt-4">
            </div>
            <div class="col-6 col-md-6">
                <h1>Tinta MEK uso normal</h1>
                <p>Esta tinta es la más utilizada por nuestros clientes debido a su bajo costo 
                    y excelente desempeño en las líneas de produccion.
                </p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Tamaños
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong class="fs-4">Tamaños:</strong> <br><br> 
                              <strong>Grande:</strong> 2 lts <br>
                              <strong>Mediano:</strong>  1.5 lts <br>
                              <strong>Pequeño:</strong>  600 ml 
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Presentación
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong class="fs-4">Presentación:</strong> <br><br> 
                                <strong>Cartucho:</strong> Esta presentación se usa para modelos de impresoras como la PocketJet 6M
                                                     Plus que utilizan cartuchos especiales de tinta<br>
                                <strong>Botella:</strong> Presentacion de tinta liquida que funciona con impresoras de intección y en conjunto con solventes
                                                    el tamaño de las botellas puede variar.

                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="separador d-flex justify-content-center align-items-center">
                      <div class="row">
                        <a class="btn btn-primary btn-lg" href="">Cotizar</a>
                      </div>
                    </div>
            </div>
        </div>
      </div>
      <div class="separador"></div>

      <button class="btn-abrir-popup" id="btn-abrir-popup"><div id="fijo"><img src="imagenes/LOGOWSP.png" alt="whatsapp" style="height: 70px; width: 70px;"></div></button>

      <div class="overlay" id="overlay">
        <div class="popup" id="popup">
          <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa-solid fa-x"></i></a>
          <h2>¡CONTACTANOS! <img src="imagenes/QRWSP.jpg" alt="QR" style="height: 200px; width: 200px;"></h2>
          <h3 style="font-size: 50px;">+52 477 766 3937</h3>
          
        </div>
      </div>

<script src="popup.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/d9a92591f7.js" crossorigin="anonymous"></script>
</body>
</html>