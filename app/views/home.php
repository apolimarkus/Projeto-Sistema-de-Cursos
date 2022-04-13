<!--Inicio do Carousel-->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo URL_BASE ?>/assets/img/img01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo URL_BASE ?>/assets/img/img02.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo URL_BASE ?>/assets/img/img03.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--Fim do Carousel-->

<div class="container mt-3">
    <h1 class="mb-5">Venha fazer parte da melhor plataforma de cursos online.</h1>

    <!--Inico dos Cards-->
    <div class="row">
        <div class="col-md-4">

            <div class="card mb-5" style="width: 18rem;">

                <img src="<?php echo URL_BASE ?>/assets/img/img05.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
        </div>




     
        <div class="col-md-4">
            <div class="card mb-5" style="width: 18rem;">
                <img src="<?php echo URL_BASE ?>/assets/img/img06.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-5" style="width: 18rem;">
                <img src="<?php echo URL_BASE ?>/assets/img/img07.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        

    </div>

    <!--Fim dos Cards-->

    <!--Inicio do formulario de contato-->
    <div class="container mb-5" id="contato">

    <div class="row">        <hr>
        <div class="col-md-12">
        <h1 class="text-center mb-5">Contate-nos</h1>

        </div>
        <div class="col-md-6">
            <h2>Nossos Endereços</h2>
            
            <h5>Redes Sociais</h5>
            <i><a href="facebook"><img src="<?php echo URL_BASE?>/assets/img/facebook-square-brands.svg" style="height:30px; width:30px" alt=""></a></i>
            <i><a href="instagran"><img src="<?php echo URL_BASE?>/assets/img/instagram-square-brands.svg" style="height:30px; width:30px" alt=""></a></i>
            <i><a href="whatsapp"><img src="<?php echo URL_BASE?>/assets/img/whatsapp-square-brands.svg" style="height:30px; width:30px" alt=""></a></i>
            <h5 class="mt-3">Telefones</h5>
            <p>(99) 9999-9999</p>
            <p>(99) 8888-8888</p>
        </div>
        <div class="col-md-6">
            <form class="row g-3">
                <div class="col-md-12">

                    <input type="text" class="form-control" placeholder="Digite seu nome">
                </div>
                <div class="col-md-12">

                    <input type="email" class="form-control" placeholder="Informe um endereço de email válido">
                </div>
                <div class="col-12">
                    <textarea name="" id="" style="height: 150px; width: 100%;" placeholder="Escreva sua mensagem aqui"></textarea>

                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
                </div>
            </form>
        </div>
    </div>

</div>
    <!--Fim do formulario de contato-->

</div>