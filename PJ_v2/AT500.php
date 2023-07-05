<?php
      include("encabezado.php");
    ?>
    
    <?php
      include("navbar.php");
    ?>
      <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                 <a href="impresoras.php"><i class="fa-solid fa-arrow-left fa-2xl mt-5 mx-5 mb-2" style="color: #000000;"></i></a>
                 
                 
            </div>
        </div>
      </div>
      <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-sm-6 col-md-6 col-6">
                <img src="imagenes/AT500.jpg" alt="" class="mt-4 img-fluid" style="">
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <h1>Pocketjet AT500 Online Printer</h1>
                <p class="fs-5">Ideal para emprendedores, micro, pequeña y mediana empresas que requieren
                   de mayor fluidez en sus procesos de producción. <br><br>
                   
                    <div class="accordion col-md-12 col-sm-12" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Dimensiones
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong class="fs-4">Dimensiones del equipo</strong> <br><br> 
                              <strong>Pantalla:</strong> pantalla touchscreen a color de 2. 8" <br>
                              <strong>Altura:</strong>  10cm <br>
                              <strong>Ancho:</strong>  8.5cm 
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Modo de impresión
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong class="fs-4">Modo de impresión</strong> <br><br> 
                                <strong>Resolución de impresion:</strong> hasta 600 dpi<br>
                                <strong>Altura de caracter:</strong> de 1 a 12mm<br>
                                <strong>Area de impresión:</strong> 1 a 8 líneas<br>
                                <strong>Distancia de impresión:</strong> 2 a 7 mm<br>
                                <strong>Velocidad de impresion:</strong> 100 pz/min.<br>
                                <strong>Dirección de impresion:</strong> 360°<br>
                                <strong>Tipos de tinta:</strong> Base solvente, base agua, Invisible y grado alimenticio.<br>
                                <strong>Colores de tinta:</strong> Negro, rojo, azul, amarillo, verde y blanco pigmentado.<br>
                                <strong>Imprime en:</strong> Vidrio, PET, metal, piel, madera, celofán, plástico, aluminio, cartón, etc.

                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Especificaciones
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong class="fs-4">Especificaciones del equipo</strong> <br><br> 
                                <strong>Funcionamiento:</strong> manual/semiautomático.<br>
                                <strong>Memoria:</strong> hasta 100 mensajes individuales distintos.<br>
                                <strong>Tecnología:</strong> T inkjet<br>
                                <strong>Carga:</strong> 9VDc a 2A<br>
                                <strong>Dirección de impresion:</strong> 360°<br>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="separador d-flex justify-content-center align-items-center">
                      <div class="row">
                        <a class="btn btn-primary btn-lg" href="">Comprar</a>
                      </div>
                    </div>
            </div>

            <div class="container-fluid">
              <p class="mx-5">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Características destacadas 
                </button>
              </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <ul class="fs-4">
                        - Impresión de 0.5 pulgada o 1 pulgada de alto <br>
                        - Velocidad de 70m/min <br>
                        - Trabajos robustos <br>
                        - Versátil <br>
                        - Libre de mantenimiento <br>
                        - Multilenguaje <br>
                        - Hasta 600 dpi de resolución <br>
                        - Mensajes de hasta 2000 caracteres <br>
                        - Uso en banda transportadora <br>
                        - Puede conectar un encoder


                  </ul>
  
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