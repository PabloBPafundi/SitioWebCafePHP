
<?php 

include("../includes/header.php");
?>


<main >

<!-- Carrusel Inicio  -->

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/ejemplo.png" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="../img/ejemplo.png" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<!-- Categorias por origen de cafe -->

<div class="container d-none d-lg-block">
<div class="container d-flex align-items-center mt-4">
  <hr class="flex-grow-1">
  <h2 class="text-center mx-3">Categorias de Café</h2>
  <hr class="flex-grow-1">
</div>








<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
    <button class="bg-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button class="bg-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="card-group container justify-content-center row">
  <div class="position-relative mx-2 my-5 col-3">
    <img src="../img/cafe2.jpg" class="card-img-top rounded-3" alt="Img de cafe">
    
    <h5 class="d-inline position-absolute bottom-0 text-center title__origen fcafeButton p-3 rounded-5">Café de Colombia</h5>
   
  </div>

  <div class="position-relative  mx-2 my-5 col-3">
    <img src="../img/cafe2.jpg" class="card-img-top rounded-3" alt="Img de cafe">
    
    <h5 class="d-inline position-absolute bottom-0 text-center title__origen fcafeButton p-3 rounded-5">Café de Etiopía</h5>
   
  </div>
  
  <div class="position-relative  mx-2 my-5 col-3">
    <img src="../img/cafe2.jpg" class="card-img-top rounded-3" alt="Img de cafe">
    
    <h5 class="d-inline position-absolute bottom-0 text-center title__origen fcafeButton p-3 rounded-5">Café de Brazil</h5>
   
  </div>
  

</div>
    </div>
    <div class="carousel-item">
    <div class="card-group container justify-content-center row">
  <div class="position-relative mx-2 my-5 col-3">
    <img src="../img/cafe2.jpg" class="card-img-top rounded-3" alt="Img de cafe">
    
    <h5 class="d-inline position-absolute bottom-0 text-center title__origen fcafeButton p-3 rounded-5 fs-6">Café de Costa Rica</h5>
   
  </div>

  <div class="position-relative mx-2 my-5 col-3">
    <img src="../img/cafe2.jpg" class="card-img-top rounded-3" alt="Img de cafe">
    
    <h5 class="d-inline position-absolute bottom-0 text-center title__origen fcafeButton p-3 rounded-5">Café de Guatemala</h5>
   
  </div>
  
  <div class="position-relative  mx-2 my-5 col-3">
    <img src="../img/cafe2.jpg" class="card-img-top rounded-3" alt="Img de cafe">
    
    <h5 class="d-inline position-absolute bottom-0 text-center title__origen  fcafeButton p-3 rounded-5">Café de México</h5>
   
  </div>
  

</div>
    </div>
    <div class="carousel-item">
    <div class="card-group container justify-content-center row">
  <div class="position-relative mx-2 my-5 col-3">
    <img src="../img/cafe2.jpg" class="card-img-top rounded-3" alt="Img de cafe">
    
    <h5 class="d-inline position-absolute bottom-0 text-center title__origen fcafeButton p-3 rounded-5">Café de Kenia</h5>
   
  </div>

  <div class="position-relative mx-2 my-5 col-3">
    <img src="../img/cafe2.jpg" class="card-img-top rounded-3" alt="Img de cafe">
    <h5 class="d-inline position-absolute bottom-0 text-center title__origen fcafeButton p-3 rounded-5">Café de Perú</h5>
   
  </div>
  
  

</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden ">Previous</span>
  </button>
  <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>











<div class="fcafe py-3">
<!-- Productos destacados -->
<div class="container">
<div class="container d-flex align-items-center mt-4">
  <hr class="flex-grow-1">
  <h2 class="text-center mx-3">Destacados</h2>
  <hr class="flex-grow-1">
</div>



<div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col ">
    <div class="card h-100 border border-black">
      <img src="../img/cafeP.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Café</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border border-black">
      <img src="../img/cafeP.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Café</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border border-black">
      <img src="../img/cafeP.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Café</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border border-black">
      <img src="../img/cafeP.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Café</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border border-black">
      <img src="../img/cafeP.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Café</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border border-black">
      <img src="../img/cafeP.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fs-1">Café</h5>
        <p class="card-text fs-4">$2000</p>
      </div>
    </div>
  </div>


</div>



</div>
</div>

<!-- Subscripciones -->
<div class="container" id="Sub">
<div class="container d-flex align-items-center mt-4">
  <hr class="flex-grow-1">
  <h2 class="text-center mx-3">Subscripciones</h2>
  <hr class="flex-grow-1">
</div>


<div class="row g-4">
<div class="col-xl-4">
  <div class="card h-100 position-relative">
    <img src="../img/cafe1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Suscripción Cafetero Gourmet</h5>
      <p class="card-text">Disfruta del auténtico sabor del café desde la comodidad de tu hogar con nuestra suscripción Cafetero Gourmet. Cada mes, recibirás una selección exclusiva de nuestros mejores granos de café provenientes de diversas regiones del mundo. Nuestro equipo de expertos catadores elige cuidadosamente cada café para brindarte una experiencia única y excepcional. Además, como miembro de la suscripción, obtendrás acceso a descuentos exclusivos en nuestra tienda en línea y a contenido especial en nuestro blog de noticias. Déjate cautivar por los matices y aromas de nuestros cafés premium y déjate llevar por un viaje sensorial inolvidable.</p>
    </div>

    <div class="button-group d-flex justify-content-center">
      <p class="bg-danger text-center title__subcripcion rounded-3 align-self-center p-2 border border-dark">Precio: $5000</p>
      <button class="btn btn-danger text-center title__subcripcion rounded-3 comprar-btn fs-3 mx-3">Comprar</button>
    </div>
    
  </div>
</div>


<div class="col-xl-4">
  <div class="card h-100 position-relative">
    <img src="../img/cafe6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Suscripción Café a Tu Gusto</h5>
      <p class="card-text">Si te encanta personalizar tu experiencia cafetera, nuestra suscripción Café a Tu Gusto es perfecta para ti. Elige entre nuestra amplia variedad de cafés en grano o molido y selecciona la frecuencia de entrega que mejor se adapte a tus necesidades. Experimenta la frescura y calidad de nuestros cafés, y descubre una nueva aventura cada mes. Además, como suscriptor, recibirás recetas exclusivas y consejos para preparar el café perfecto en casa. Vive la pasión por el café con total flexibilidad y disfruta de tu bebida favorita a tu manera.</p>
    </div>

    <div class="button-group d-flex justify-content-center">
      <p class="bg-danger text-center title__subcripcion rounded-3 align-self-center p-2 border border-dark">Precio: $10000</p>
      <button class="btn btn-danger text-center title__subcripcion rounded-3 comprar-btn fs-3 mx-3">Comprar</button>
    </div>
    
  </div>
</div>


<div class="col-xl-4">
  <div class="card h-100 position-relative">
    <img src="../img/cafe5.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Suscripción Maestro Barista:</h5>
      <p class="card-text">Conviértete en un verdadero maestro barista con nuestra suscripción exclusiva Maestro Barista. Descubre técnicas y secretos de preparación del café de la mano de nuestros baristas expertos en una experiencia de aprendizaje única. Recibirás mensualmente nuestros cafés especiales y herramientas de barista, incluyendo molinillos y métodos de preparación, para que puedas perfeccionar tus habilidades y crear obras de arte en cada taza. Además, como miembro de la suscripción, tendrás acceso a eventos y talleres presenciales y en línea para seguir desarrollando tus habilidades como amante del café. ¡Sé el maestro del café que siempre has deseado ser!</p>
    </div>

    <div class="button-group d-flex justify-content-center">
      <p class="bg-danger text-center title__subcripcion rounded-3 align-self-center p-2 border border-dark">Precio: $20000</p>
      <button class="btn btn-danger text-center title__subcripcion rounded-3 comprar-btn fs-3 mx-3">Comprar</button>
    </div>
    
  </div>
</div>



</div>


<!-- Locales -->
<div class="container mt-4">
  <div class="container d-flex align-items-center pt-5 ">
    <hr class="flex-grow-1">
    <h2 class="text-center mx-3">Locales</h2>
    <hr class="flex-grow-1">
  </div>
  






 <div class="d-none d-lg-block">




  
  
  
  
  
  
  <div class="card mb-3" id="lm">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="../img/local1.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Local Mercedes | Prov. Bs. As.</h5>
          <p class="card-text">¡Bienvenido a nuestro acogedor rincón cafetero en Mercedes, Provincia de Buenos Aires! En este encantador local, te ofrecemos una experiencia única donde los aromas de nuestros cafés especiales se entrelazan con el cálido ambiente del lugar. Disfruta de deliciosas bebidas de café preparadas por nuestros apasionados baristas, acompañadas de exquisitas opciones de repostería y bocados. Nuestro equipo estará encantado de recibirte y hacer de tu visita una experiencia inolvidable. ¡Ven a compartir tu pasión por el café con nosotros en el corazón de Mercedes</p>
          <p class="card-text"><small class="text-body-secondary">Av. Avenida 1111 </small></p>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="card mb-3" id="lst">
    <div class="row g-0">
      
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Local San telmo | CABA</h5>
          <p class="card-text">En el corazón histórico de San Telmo, Ciudad Autónoma de Buenos Aires, te esperamos en nuestro local lleno de encanto y tradición. Sumérgete en la atmósfera bohemia mientras saboreas nuestros cafés especiales, cuidadosamente seleccionados y preparados para deleitar tus sentidos. Nuestro equipo de baristas te sorprenderá con creaciones únicas y auténticas, mientras disfrutas de la combinación perfecta de café y arte que San Telmo tiene para ofrecer. ¡Únete a nosotros y comparte la magia del café en este icónico barrio porteño!</p>
          <p class="card-text"><small class="text-body-secondary">Av. Avenida 1111 </small></p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="../img/local1.jpg" class="img-fluid rounded-start" alt="...">
      </div>
    </div>
  </div>
  
  
  <div class="card mb-3" id="lp">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="../img/local1.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Local Palermo | CABA</h5>
          <p class="card-text">¡Palermo, el vibrante corazón de la Ciudad Autónoma de Buenos Aires, te recibe con los brazos abiertos en nuestro moderno y sofisticado local de café! Aquí, la innovación y la pasión por el café se unen en una experiencia que despierta tus sentidos. Descubre un mundo de sabores y texturas en cada taza de café que preparamos con esmero y amor. Nuestro espacio moderno y acogedor es el lugar ideal para disfrutar de momentos especiales junto a amigos, familia o en solitario. Entra y sumérgete en la escena café de Palermo, donde cada sorbo es una aventura para los amantes del buen café.</p>
          <p class="card-text"><small class="text-body-secondary">Av. Avenida 1111 </small></p>
        </div>
      </div>
    </div>
  </div>
  
  
  </div> 



  <!-- Corousel Locales -->

 
  <div id="carouselLocales" class="carousel slide d-lg-none">
    <div class="carousel-inner">
      <div class="carousel-item active">
        

        <div class="card mb-3" id="lm">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/local1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Local Mercedes | Prov. Bs. As.</h5>
                <p class="card-text">¡Bienvenido a nuestro acogedor rincón cafetero en Mercedes, Provincia de Buenos Aires! En este encantador local, te ofrecemos una experiencia única donde los aromas de nuestros cafés especiales se entrelazan con el cálido ambiente del lugar. Disfruta de deliciosas bebidas de café preparadas por nuestros apasionados baristas, acompañadas de exquisitas opciones de repostería y bocados. Nuestro equipo estará encantado de recibirte y hacer de tu visita una experiencia inolvidable. ¡Ven a compartir tu pasión por el café con nosotros en el corazón de Mercedes</p>
                <p class="card-text"><small class="text-body-secondary">Av. Avenida 1111 </small></p>
              </div>
            </div>
          </div>
        </div>




      </div>
      <div class="carousel-item">
       

        <div class="card mb-3" >
          <div class="row g-0">
            
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Local San telmo | CABA</h5>
                <p class="card-text">En el corazón histórico de San Telmo, Ciudad Autónoma de Buenos Aires, te esperamos en nuestro local lleno de encanto y tradición. Sumérgete en la atmósfera bohemia mientras saboreas nuestros cafés especiales, cuidadosamente seleccionados y preparados para deleitar tus sentidos. Nuestro equipo de baristas te sorprenderá con creaciones únicas y auténticas, mientras disfrutas de la combinación perfecta de café y arte que San Telmo tiene para ofrecer. ¡Únete a nosotros y comparte la magia del café en este icónico barrio porteño!</p>
                <p class="card-text"><small class="text-body-secondary">Av. Avenida 1111 </small></p>
              </div>
            </div>
            <div class="col-md-4">
              <img src="../img/local1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
          </div>
        </div>



      </div>
      <div class="carousel-item">
        


        <div class="card mb-3" id="lp">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/local1.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Local Palermo | CABA</h5>
                <p class="card-text">¡Palermo, el vibrante corazón de la Ciudad Autónoma de Buenos Aires, te recibe con los brazos abiertos en nuestro moderno y sofisticado local de café! Aquí, la innovación y la pasión por el café se unen en una experiencia que despierta tus sentidos. Descubre un mundo de sabores y texturas en cada taza de café que preparamos con esmero y amor. Nuestro espacio moderno y acogedor es el lugar ideal para disfrutar de momentos especiales junto a amigos, familia o en solitario. Entra y sumérgete en la escena café de Palermo, donde cada sorbo es una aventura para los amantes del buen café.</p>
                <p class="card-text"><small class="text-body-secondary">Av. Avenida 1111 </small></p>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselLocales" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-info rounded-4 p-4" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselLocales" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-info rounded-4 p-4" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




















</div>


</main>





<?php 

include("../includes/footer.php");
?>