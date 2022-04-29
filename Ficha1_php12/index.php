<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once 'head.php';
    ?>
    <title>Pagina Inicial</title>
</head>

<body>
    <header>
        <?php
        require_once 'navbar.php';
        ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Cidade de Leiria</h2>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="img/img1.jpg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/img2.JPG" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/img3.jpg" class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <div class="row">
            <div id="descricao" class="col-12 col-md-8">
                <h2>Descrição</h2>
                <p>
                    Leiria é uma cidade portuguesa, capital do distrito de
                    Leiria,
                    na
                    província da Beira Litoral, sede da Comunidade
                    Intermunicipal da
                    Região de Leiria, no Centro de
                    Portugal, com cerca de 63000 habitantes no seu perímetro
                    urbano.
                    Os
                    habitantes desta cidade
                    chamam-se leirienses ou coliponenses.
                </p>
                <p>
                    É sede de um município com 565,09 km² de área e 126 897
                    habitantes
                    (2011) subdividido
                    em 18 freguesias, o que faz dele o segundo concelho mais
                    populoso
                    das Beiras, só superado por
                    Coimbra. É limitado a norte/nordeste pelo concelho de
                    Pombal, a
                    leste pelo de Ourém, a sul pelos
                    municípios de Batalha e Porto de Mós, a sudoeste pelo de
                    Alcobaça, a
                    oeste pelo concelho da
                    Marinha Grande e a noroeste pelo Oceano Atlântico.
                </p>
            </div>
            <div id="estatistica" class="col-12 col-md-4">
                <h2>Estatística</h2>
                <ul class="list-unstyled">
                    <li>565,09 km²</li>
                    <li> 126 897 habitantes </li>
                    <li>18 freguesias</li>
                    <li>2400 código-postal</li>
                </ul>
            </div>

        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <?php
        require_once 'footer.php';
        ?>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>