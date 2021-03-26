<?php
    require_once 'menu.php';
?>

<div class="text-center">
    <h4>Bem vindo</h4>
    <br>
    Somos a <span class="font-weight-bold">Docinho? Pode!</span>
    <br>
    Uma empresa especializada em doces feitos com muito amor e carinho visando a melhor qualidade!
</div>

<br>

<div id="carouselProdutos" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselProdutos" data-slide-to="0" class="active"></li>
        <li data-target="#carouselProdutos" data-slide-to="1"></li>
        <li data-target="#carouselProdutos" data-slide-to="2"></li>
        <li data-target="#carouselProdutos" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item text-center active">
            <img class="d-block w-50 mx-auto" src="img/bolo.jpg" alt="Primeiro Slide">
        </div>
        <div class="carousel-item text-center">
            <img class="d-block w-50 mx-auto" src="img/cupcake.jpg" alt="Segundo Slide">
        </div>
        <div class="carousel-item text-center">
            <img class="d-block w-50 mx-auto" src="img/naked cake.jpg" alt="Terceiro Slide">
        </div>
        <div class="carousel-item text-center">
            <img class="d-block w-50 mx-auto" src="img/taca.jpg" alt="Terceiro Slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselProdutos" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselProdutos" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>

<?php
    require_once 'rodape.php';
?>