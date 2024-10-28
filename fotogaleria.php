<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foto-galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css?v=1.0">
    
  </head>
  <body>
      <!--Incluir a menu.php-->
      <?php include 'menu.php'; ?>

      <!--Creación de la fotogaleria-->
      <section id="galeria">
            <div class="text-center p-5">
                <h1>FOTO-GALERIA</h1>
                <p>Ven y conoce nuestros productos artesanales 100% hechos en la región del eje cafetero </p>
            </div>
            <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <h3 class="text-center">Café Americano</h3>
                    <img src="img/americano.jpg" alt="Cargando" data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Café Americano" data-description="El café americano o american coffee es un tipo de preparación de procedencia estadounidense, en la que se diluye el café espresso en agua caliente, reduciendo así la intensidad de su sabor" data-price="$4.500">
                </div>


                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Bombon</h3>
                    <img src="img/cafe_bombon.jpg" alt="Cargando" data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Café Bombón" data-description="El café americano o american coffee es un tipo de preparación de procedencia estadounidense, en la que se diluye el café espresso en agua caliente, reduciendo así la intensidad de su sabor" data-price="$4.500">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Carajillo</h3>
                    <img src="img/carajillo.png" alt="Cargando">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Latte</h3>
                    <img src="img/late.jpeg" alt="Cargando">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Mocachino</h3>
                    <img src="img/mocachino_caliente.jpg" alt="Cargando">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Jamaiquino</h3>
                    <img src="img/jamaiquino frio.png" alt="Cargando">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Freddo</h3>
                    <img src="img/freddo_frio.jpeg" alt="Cargando">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Frapuchino</h3>
                    <img src="img/frapuchino_frio.jpg" alt="Cargando">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Azteca</h3>
                    <img src="img/azteca_frio.jpeg" alt="Cargando">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Irlandes</h3>
                    <img src="img/irlandes_frio.jpg" alt="Cargando">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café Mocachino Frio</h3>
                    <img src="img/mocachino_frio.jpg" alt="Cargando">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h3 class="text-center">Café</h3>
                    <img src="img/menu-3.jpg" alt="Cargando">
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

        <!--Creación de la ventana Modal-->

        
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle">Cafe Americano</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="" alt="" id="modalImage" class="img-fluid">
                            <p id="modalDescription" class="mt-3"></p>
                            <p><strong>Precio:</strong> <span id="modalPrice"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

            <script>
            // Obtener el modal y los elementos que serán actualizados
                const imageModal = document.getElementById('imageModal');
                const modalImage = document.getElementById('modalImage');
                const modalTitle = document.getElementById('modalTitle');
                const modalDescription = document.getElementById('modalDescription');
                const modalPrice = document.getElementById('modalPrice');
      
            // Añadir evento al modal para cuando se muestra
            imageModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget; // Botón que activó el modal
                const imgSrc = button.getAttribute('src');
                const title = button.getAttribute('data-title');
                const description = button.getAttribute('data-description');
                const price = button.getAttribute('data-price');
      
              // Actualizar el contenido del modal
                modalImage.src = imgSrc;
                modalTitle.textContent = title;
                modalDescription.textContent = description;
                modalPrice.textContent = price;
            });
          </script>

    <!--Incluir a menu.php-->
    <?php include 'footer.php'; ?>
    </body>
</html>