<?php get_header();  // headeris //
?>



<!-- <?php
if (have_posts()) {

    while (have_posts()) {
        the_post(); //Parodo postus
        the_content(); //gali post isikelti img ir pan./
    }
}

?> -->
<!--slider  -->

<section>
    <div class="container d-none d-sm-block">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/statyba.jpg"
                        class="d-block w-100 slider" alt="matininkas">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/slide2.jpg"
                        class="d-block w-100 slider" alt="matininkas">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/slide3.jpg"
                        class="d-block w-100 slider" alt="kadastrinis">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</section>
<!--Apie -->
<section class="pt-4 p-3 text-center text-sm-start" id="apiemus">
    <div class="container">
        <div class="d-sm-flex ">
            <div>

                <h1 class="pt-5">Apie Artikada <span class="lt">LT</span></h1>
                <p class="lead my-4">MB ???Artikada LT??? savo veikl?? prad??jo nuo 2020 m., Kaune. ??iuo metu ??mon?? dirba
                    visoje
                    Lietuvoje. Artikada
                    LT
                    specializuojasi geodezini?? (kadastrini??) matavim?? srityje, taip pat atlieka ir daugel?? kit?? su
                    tiksliais
                    matavimais susijusi?? paslaug?? iki statyb?? ir po j??.</p>

            </div>
            <img class="img-fluid w-50" src="<?php echo  get_theme_file_uri(); ?>/assets/images/apie.jpg" alt="Apie">
        </div>
    </div>
</section>
<!--musu paslaugos cards-->
<div class="container-fluid">
    <h2 class="h2 text-center py-1">M??s?? Si??lomos Paslaugos</h2>
    <div class="container" id="paslaugos">
        <div class="row p-4">
            <div class="col-sm-12 col-md-4">
                <div class="card card border-success sm-2 " style="">
                    <div class="card-body">
                        <ul class="list-group list-group-flush h-100">
                            <li class="list-group-item">??em??s sklyp?? kadastriniai (geodeziniai) matavimai</li>
                            <li class="list-group-item">Statini?? ir in??inerini?? tinkl?? kadastriniai matavimai</li>
                            <li class="list-group-item">Statini?? geodezin??s nuotraukos</li>
                            <li class="list-group-item">In??inerini?? tinkl?? projektavimas</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card card border-success sm-2">
                    <div class="card-body">
                        <ul class="list-group list-group-flush h-100">
                            <li class="list-group-item">Po??emini?? komunikacij?? geodezin??s (i??pildomosios) nuotraukos
                            </li>
                            <li class="list-group-item">Topografinis planas</li>
                            <li class="list-group-item">Nu??ym??jimo darbai</li>
                            <li class="list-group-item">Geodeziniai darbai statybos aik??tel??je</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card card border-success mb-3">
                    <div class="card-body">
                        <ul class="list-group list-group-flush h-100">
                            <li class="list-group-item">??em??s sklyp?? formavimo ir pertvarkymo projekt?? rengimas</li>
                            <li class="list-group-item">Kaimo pl??tros ??em??tvarkos projekt?? rengimas</li>
                            <li class="list-group-item">Nam?? pridavimai</li>
                            <li class="list-group-item">Individuali?? nam?? projektavimas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  skyp?? formavimas-->
<div class="container-fluid">
    <h3 class="h3 text-center py-1">??em??s sklyp?? formavimo ir pertvarkymo projekt?? rengimas</h3>
    <p class="text-center">??em??s sklyp?? formavimo ir pertvarkymo b??dai:</p>
    <div class="container">
        <div class="row p-4">
            <div class="col-sm-12 col-md-12">
                <div class="card card border-success mb-3">
                    <div class=" card-body text-center">
                        <ul class="list-group list-group-flush h-100">
                            <li class="list-group-item">Padalijant ??em??s sklypus</li>
                            <li class="list-group-item">Atidalijant ??em??s sklypo dalis i?? bendrosios nuosavyb??s teise
                                turimo ??em??s
                                sklypo</li>
                            <li class="list-group-item">Sujungiant tos pa??ios pagrindin??s tikslin??s ??em??s naudojimo
                                paskirties ??em??s
                                sklypus ?? vien?? sklyp??</li>
                            <li class="list-group-item">Formuojant naujus valstybin??s ??em??s sklypus</li>
                            <li class="list-group-item">Gretim?? tos pa??ios pagrindin??s tikslin??s ??em??s naudojimo
                                paskirties ??em??s
                                sklyp?? rib?? pakeitimas (amalgamacija), kai vieno ??em??s sklypo dalis atidalijama
                                nesuformavus atskiro
                                ??em??s sklypo ir sujungiama su greta esan??iu ??em??s sklypu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact & Map -->
<section class="p-3" id="kontaktai">
    <div class="container">
        <div class="row pb-5 g-4">
            <div class="col-sm-12 col-md-12">
                <h2 class="text-center mb-4 h3">Kontaktin?? informacija:</h2>
                </div></div>
                <div class="row">
                    <div class="col">
                <ul class="list-group list-group-flush lead h-100">
                    <li class="list-group-item">
                        <span class="fw-bold">Tel.:</span> +370 605 39642
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Mus rasite adresu:</span> Veiveri?? g. 42, LT-46211 Kaunas
                    </li>

                    <li class="list-group-item">
                        <span class="fw-bold">El. Pa??tas:</span> info@artikada.lt
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="map"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2294.6264496845806!2d23.88644251579291!3d54.891926180331936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e722110f80b45d%3A0x6a5e6903164f163c!2sVeiveri%C5%B3%20g.%2042%2C%20Kaunas%2046211!5e0!3m2!1sen!2slt!4v1652960644792!5m2!1sen!2slt"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
        </div>
    </div>
</section>


<!-- JavaScript Bundle with Popper -->
<?php
get_footer();
?>