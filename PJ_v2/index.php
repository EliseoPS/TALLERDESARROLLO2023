    <?php
      include("encabezado.php");
    ?>
    
    <?php
      include("navbar.php");
    ?>
    <div class="header finisher-header d-flex align-items-center justify-content-center" style="width: 100%; height: 400px;">
       <h1 class="text-center" style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); "><strong>Bienvenido a PocketJet Systems México </strong></h1> 
    </div>




        <div class="separador"></div>

      <div class="row" style="width: 100%;">
        <div class="col-12 col-md-6 col-sm-12">
            <div class="container-fluid" style="" data-aos="fade-in">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="imagenes/impresora1.jpg" class="d-block w-20" alt="..." style="height: 400px; height: 400px;">
                      </div>
                      <div class="carousel-item">
                        <img src="imagenes/impresora2.jpg" class="d-block w-20" alt="..." style="height: 400px; height: 400px;">
                      </div>
                      <div class="carousel-item">
                        <img src="imagenes/impresora3.jpg" class="d-block w-20" alt="..." style="height: 400px; height: 400px;">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <i class="fa-solid fa-arrow-left" style="color: #000000;"></i>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>

                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>

            <div class="col-12 col-md-6 col-sm-12 text-center align-items-center justify-content-center d-flex hvr-grow" style="" data-aos="zoom-in">
                <p style="font-size: 30px;">Somos la solucion para tus problemas de lotificado <br><br>
    
                    En esta página podrás encontrar el equipo de impresión adecuado para tu empresa. <br>
                    Nuestros productos cubrirán todas tus nececidades actuales y futuras.<br><br>
                    
                    Mejora la calidad de tus productos, sin importar el tamaño de tu empresa</p>
            </div>
        


      </div>

      <section style="background-color: rgb(30, 25, 25);" class="mt-5 mb-5">
        <div class="container-fluid">
          <div class="container">
            <h2 style="color: white;">Nuestra promesa</h2><br>
            <p style="color: white;" class="fs-5">En PocketJet Systems México, entendemos que la eficiencia y la calidad son 
            fundamentales para el éxito de su negocio. Es por eso que nos enorgullece ofrecerle una amplia gama 
            de impresoras de lotificado y consumibles diseñados para satisfacer las necesidades desde emprendimientos
             hasta grandes corporaciones. <br><br>
  
            Con más de 10 años de experiencia en la industria, nos hemos convertido en líderes confiables
             en el suministro de soluciones de impresión de alto rendimiento. Nuestro objetivo es brindarle
              productos de calidad excepcional, un servicio al cliente sobresaliente y un apoyo técnico completo
               en cada paso del camino. <br><br>
            </p> 
          </div>
          

             <div class="container-fluid mb-4">
              <div class="row w-100">
                <div class="col-6">
                  <img src="imagenes/linea.jpg" alt="" style="width: 540px; height: 860px;" class="ml-5 img-fluid">
                </div>
                <div class="col-6 d-flex align-items-center">


                  
                </div>
              </div>
            </div>
             

        </div>
        
      </section>
      

      <div class="overlay" id="overlay">
        <div class="popup" id="popup">
          <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa-solid fa-x"></i></a>
          <h2>¡CONTACTANOS! <img src="imagenes/QRWSP.jpg" alt="QR" style="height: 200px; width: 200px;"></h2>
          <h3 style="font-size: 50px;">+52 477 766 3937</h3>
          
        </div>
      </div>
      <div class="separador"></div>
      <div class="separador"></div>

      <div class="separador"></div>
      <div class="separador"></div>

      

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
    <script src="finisher-header.es5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
new FinisherHeader({
  "count": 15,
  "size": {
    "min": 1139,
    "max": 1500,
    "pulse": 0.8
  },
  "speed": {
    "x": {
      "min": 0.6,
      "max": 3
    },
    "y": {
      "min": 0.6,
      "max": 3
    }
  },
  "colors": {
    "background": "#120957",
    "particles": [
      "#5a0e70",
      "#140968",
      "#000000",
      "#ff0000"
    ]
  },
  "blending": "screen",
  "opacity": {
    "center": 0.35,
    "edge": 0
  },
  "skew": 0,
  "shapes": [
    "c"
  ]
});
</script>
    <script>
      AOS.init();
    </script>
</body>
</html>