<?php
get_header();

?>

    <section class="container-fluid position-relative echocabin-content-area-1" style="background-image: url('<?php echo get_template_directory_uri().'/images/Background.png'; ?>');">
        <div class="container position-relative">

            <div class="row echocabin-home-1">
                <div class="col-lg-8 col-md-12 col-12">

                    <div class="echocabin-home-content-1" data-aos="fade-up">
                        <h1 class="custom-font">
                            Duurzame materialen
                        </h1>
                        <p>
                            Alle EcoCabins hebben een hoge isolatiewaarde, worden geproduceerd met indien mogelijk duurzame en/of natuurlijke materialen en hebben als opvallende uiterlijke kenmerk de ‘ronde hoeken’, mogelijk gemaakt door het specifieke materiaalgebruik. De voordelen van bouwen met hout zijn legio: hout is licht, flexibel, isoleert goed en bouwt snel en efficiënt.
                        </p>
                        <button class="btn btn-outline-dark px-4">
                            Button
                        </button>
                    </div>

                    <div class="echocabin-home-content-1-image" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div id="carouselExampleIndicators" class="carousel slide me-auto" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri().'/images/IMG2.png'; ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri().'/images/IMG2.png'; ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri().'/images/IMG2.png'; ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <section class="container-fluid bg-dark echocabin-content-area-2">
        <div class="container">

            <div class="row echocabin-home-2">
                <div class="col-12" data-aos="fade-right">
                    <h1 class="custom-font text-white">
                        Innovatie
                    </h1>
                </div>
                <div class="col-md-6 col-12 text-white opacity-50" data-aos="fade-up" data-aos-duration="1500">
                    <p>
                        Wij hebben als doel om de EcoCabins voortdurend verder te ontwikkelen en innoveren, zodat de EcoCabins uiteindelijk 100% duurzaam en circulair zijn. Voorwaarde hierbij is dat de EcoCabins betaalbaar blijven. Met behulp van de zon, de wind en de beste isolatie geniet u van.
                    </p>
                </div>
                <div class="col-md-6 col-12 text-white opacity-50" data-aos="fade-up" data-aos-duration="1500">
                    <p>
                        Alle EcoCabins hebben een hoge isolatiewaarde, worden geproduceerd met indien mogelijk duurzame en/of natuurlijke materialen en hebben als opvallende uiterlijke kenmerk de ‘ronde hoeken’, mogelijk gemaakt door het specifieke materiaalgebruik De voordelen van bouwen.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="container-fluid echocabin-content-area-3" data-aos="fade-up">
        <div class="container">

            <div class="row echocabin-home-3">
                <div class="col-md-6 col-sm-12 d-flex" data-aos="fade-right" data-aos-duration="1500">
                    <img src="<?php echo get_template_directory_uri().'/images/features.png'; ?>" class="mr-auto">
                </div>
                <div class="col-md-6 col-sm-12 d-flex" data-aos="fade-up" data-aos-duration="1500">

                    <div class="row echocabin-home-content-3">
                        <div class="col-sm-6 col-12 pb-sm-0 pb-3">
                            <h4 class="custom-font">Hout</h4>
                            <span>De draagconstructies van EcoCabins bestaan uit hout. Hout is duurzaam en.</span>
                        </div>
                        <div class="col-sm-6 col-12 pb-sm-0 pb-3">
                            <h4 class="custom-font">Glaswol isolatie</h4>
                            <span>De combinatie van glaswol met een houtskelet constructie geeft een.</span>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-sm-6 col-12 pb-sm-0 pb-3">
                            <h4 class="custom-font">Afwerking</h4>
                            <span>De draagconstructies van EcoCabins bestaan uit hout. Hout is duurzaam en.</span>
                        </div>
                        <div class="col-sm-6 col-12 pb-sm-0 pb-3">
                            <h4 class="custom-font">Triple glas</h4>
                            <span>De combinatie van glaswol met een houtskelet constructie geeft een.</span>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-sm-6 col-12 pb-sm-0 pb-3">
                            <h4 class="custom-font">Stalen onderstel</h4>
                            <span>Het stalen onderstel is sterk zijn en heeft de benodigde stijfheid die</span>
                        </div>
                        <div class="col-sm-6 col-12 pb-sm-0 pb-3">
                            <h4 class="custom-font">Infrarood vloer</h4>
                            <span>De vloer wordt opgewarmd middels opgewekte warmte uit eigen zonne-energie.</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

<?php

get_footer();