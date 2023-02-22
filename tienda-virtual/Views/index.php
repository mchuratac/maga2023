<html>

<?php include_once 'Views/template-principal/header.php'; ?>

<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row p-5">
          <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
            <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/carrusel/1.jpg" alt="">
          </div>
          <div class="col-lg-6 mb-0 d-flex align-items-center">
            <div class="text-align-left align-self-center">
              <h1 class="h1 text-util"><b>Bibiri de </b> Hilo</h1>
              <h3 class="h2">Ropa de verano</h3>
              <p>
              Una mirada a esta camiseta sin mangas tejida de Beach Days y se despliega un universo de posibilidades de dónde usarlo: los fines de semana (con cortes), en la arena (sobre un bikini de hilo), incluso en la oficina (metido en cualquier cosa) . Esta camiseta sin mangas, de tejido ligero con un estampado. Detalles: Material: Poliéster TAMAÑO (IN) Longitud del busto S 30.7 21.7 M 32.3 22.0 L 33.9 22.4 XL 35.4 22.8</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row p-5">
          <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
            <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/carrusel/2.jpg" alt="">
          </div>
          <div class="col-lg-6 mb-0 d-flex align-items-center">
            <div class="text-align-left">
              <h1 class="h1">Proident occaecat</h1>
              <h3 class="h2">Aliquip ex ea commodo consequat</h3>
              <p>
                You are permitted to use this Zay CSS template for your commercial websites.
                You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template
                collection websites.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row p-5">
          <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
            <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/carrusel/3.png" alt="">
          </div>
          <div class="col-lg-6 mb-0 d-flex align-items-center">
            <div class="text-align-left">
              <h1 class="h1">Repr in voluptate</h1>
              <h3 class="h2">Ullamco laboris nisi ut </h3>
              <p>
                We bring you 100% free CSS templates for your websites.
                If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends
                about our website. Thank you.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
    <i class="fa fa-chevron-left"></i>
  </a>
  <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
    <i class="fa fa-chevron-right"></i>
  </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
  <div class="row text-center pt-3">
    <div class="col-lg-6 m-auto">
      <h1 class="h1">Categorias</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, voluptatibus!
      </p>
    </div>
  </div>
  <div class="row">
    <?php foreach ($data['categorias'] as $categoria) { ?>
      <div class="col-12 col-md-2 p-5 mt-3">
        <a href="#"><img src="<?php echo $categoria['imagen']; ?>" class="rounded-circle img-fluid border"></a>
        <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
      </div>
    <?php } ?>
  </div>
</section>
<!-- End Categories of The Month -->


<!-- Start Featured Product -->
<section class="bg-light">
  <div class="container py-5">
    <div class="row text-center py-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Productos</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci!
        </p>
      </div>
    </div>
    <div class="row">
      <?php foreach ($data['nuevoProductos'] as $producto) { ?>
        <div class="col-12 col-md-4 mb-4">
          <div class="card h-100">
            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
              <img src="<?php echo $producto['imagen'];?>" class="card-img-top" alt="<?php echo $producto['nombre'];?>">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
                <li class="text-muted text-right"><?php echo MONEDA . ' ' . $producto['precio'];?></li>
              </ul>
              <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>"><?php echo $producto['nombre']; ?></a>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- End Featured Product -->

<?php include_once 'Views/template-principal/footer.php'; ?>

</body>

</html>