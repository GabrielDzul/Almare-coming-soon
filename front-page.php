<?php get_header() ?>

<div id="preloader" class="preloader">
  <div class="loader-status">
    <div class="spinner"></div>
  </div>
</div>

<!-- Global overlay -->
<div class="global-overlay">
  <div class="overlay-inner bg-dark opacity-80"></div>
</div>

<!-- Site header -->
<header class="site-header header-light header-mobile-light">
  <div class="header-brand">
    <!-- Logo -->
    <a class="logo" href="#">
      <img src="assets/images/logo.png" alt="">
    </a>
    <button type="button" id="navigation-toggle" class="nav-toggle">
      <span></span>
    </button>
  </div>
  <div class="header-collapse">
    <div class="header-collapse-inner">
      <nav class="site-nav">
        <ul id="navigation">
          <li>
            <a href="#home">Inicio</a>
          </li>
          <li>
            <a href="#subscribe">Inauguración</a>
          </li>
          <li>
            <a href="#about">Nosotros</a>
          </li>
          <li>
            <a href="#contact" class="btn btn-primary">Contacto</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<main id="content">
  <div class="site-content">
    <div class="site-content-inner">

      <div class="site-part no-overlay" id="home">

      </div>

      <div class="site-part" id="subscribe">
        <section class="min-vh-100 d-flex">
          <div class="container align-self-center text-white text-center">
            <div class="row">
              <div class="col-12 col-lg-10 mx-lg-auto">
                <div class="countdown mx-auto mb-4 animated" data-animation="fadeInUp"
                  data-countdown="2020/5/02 09:00:00"></div>
                <h3 class="mb-5 animated" data-animation="fadeInUp" data-animation-delay="200">Estamos ultimando los
                  detalles para llevarte nuevos sabores y experiencias saludables.</h3>
                <a href="#about" class="btn btn-white mr-3 scrollto animated" data-animation="fadeInUp"
                  data-animation-delay="400">Saber más</a>
                <a href="#contact" class="btn btn-primary scrollto animated" data-animation="fadeInUp"
                  data-animation-delay="600">Contacto</a>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="site-part" id="about">
        <section class="min-vh-100 d-flex">
          <div class="container align-self-center text-white">
            <div class="row">
              <div class="col-lg-10 mx-lg-auto text-center">
                <h2 class="h1 mb-4 animated" data-animation="fadeInUp">Nosotros</h2>
                <div class="divider mx-auto bg-white animated" data-animation="fadeInUp" data-animation-delay="200">
                  <span></span></div>

                <div class="d-table mx-auto">
                  <div class="nav nav-pills justify-content-center tab-modern tab-modern--light rounded mb-5 animated"
                    data-animation="fadeInUp" data-animation-delay="400" id="about-tab" role="tablist">
                    <a class="nav-link h5 active" id="tab-forward-tab" data-toggle="pill" href="#tab-forward" role="tab"
                      aria-controls="tab-forward" aria-selected="true">
                      Salud y bienestar
                    </a>
                    <a class="nav-link h5" id="tab-together-tab" data-toggle="pill" href="#tab-together" role="tab"
                      aria-controls="tab-together" aria-selected="false">
                      Colores y sabores
                    </a>
                    <a class="nav-link h5" id="tab-tools-tab" data-toggle="pill" href="#tab-tools" role="tab"
                      aria-controls="tab-tools" aria-selected="false">
                      Elaboración y materiales
                    </a>
                  </div>
                </div>

                <div class="tab-content animated" data-animation="fadeInUp" data-animation-delay="600" id="tabContent">
                  <div class="tab-pane fade show active" id="tab-forward" role="tabpanel"
                    aria-labelledby="tab-forward-tab">

                    <p>La salud y el bienestar son factores importantes en la vida y desarrollo de una persona. A través
                      de estos dos aspectos fundamentales es como percibimos el mundo.
                      Tener hábitos saludables nos ayuda a sentirnos mejor, no solamente físicamente, sino también
                      mentalmente</p>

                  </div>
                  <div class="tab-pane fade" id="tab-together" role="tabpanel" aria-labelledby="tab-together-tab">

                    <p>El sabor no tiene que estar peleado con lo saludable, ni lo saludable tiene que ser aburrido. Las
                      frutas contienen una gran gama de colores,
                      texturas y sabores deliciosos. Gracias a esto podemos traerle nuevas experiencias a su paladar y
                      lo mejor de todo, sin el sentimiento de culpa</p>

                  </div>
                  <div class="tab-pane fade" id="tab-tools" role="tabpanel" aria-labelledby="tab-tools-tab">

                    <p>Nuestro proceso de elaboración sigue siendo artesanal, pero con un toque moderno al incorporar
                      las más nuevas técnicas de elaboración de postres. Los ingredientes que usamos son naturales, las
                      decoraciones y rellenos se realizan a base de frutas, sin azúcares añadidos</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="site-part" id="contact">
        <section class="min-vh-100 d-flex">
          <div class="container align-self-center text-white">
            <div class="row text-center">
              <div class="col-12 col-lg-9 mx-lg-auto">
                <h2 class="h1 mb-4 animated" data-animation="fadeInUp">Contacto</h2>
                <div class="divider mx-auto bg-white animated" data-animation="fadeInUp" data-animation-delay="200">
                  <span></span></div>
                <p class="animated mb-5" data-animation="fadeInUp" data-animation-delay="400">¿No puedes esperar hasta
                  la inauguración para conocer más sobre nosotros? Envíanos un mensaje y te responderemos a la brevedad
                  posible</p>
                <div class="contact-form text-left animated" data-animation="fadeInUp" data-animation-delay="600">
                  <form class="mb-0" id="cf" name="cf"
                    action="<?= get_template_directory_uri() ?>/includes/sendemail.php" method="post"
                    autocomplete="off">
                    <div class="form-row">

                      <div class="form-process"></div>

                      <div class="col-12 col-md-6">
                        <div class="form-group error-text-white">
                          <input type="text" id="cf-name" name="cf-name" placeholder="Tu nombre"
                            class="form-control form-control-alternative-light required">
                        </div>
                      </div>

                      <div class="col-12 col-md-6">
                        <div class="form-group error-text-white">
                          <input type="email" id="cf-email" name="cf-email" placeholder="Tu email"
                            class="form-control form-control-alternative-light required">
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group error-text-white">
                          <input type="text" id="cf-subject" name="cf-subject" placeholder="Asunto (Opcional)"
                            class="form-control form-control-alternative-light">
                        </div>
                      </div>

                      <div class="col-12 mb-4">
                        <div class="form-group error-text-white">
                          <textarea name="cf-message" id="cf-message" placeholder="Aquí va tu mensaje"
                            class="form-control form-control-alternative-light required" rows="7"></textarea>
                        </div>
                      </div>

                      <div class="col-12 d-none">
                        <input type="text" id="cf-botcheck" name="cf-botcheck" value=""
                          class="form-control form-control-alternative-light" />
                      </div>

                      <div class="col-12 text-center">
                        <button class="btn btn-primary" type="submit" id="cf-submit" name="cf-submit">Enviar
                          mensaje</button>
                      </div>

                    </div>
                  </form>
                  <div class="contact-form-result text-center"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    </div>
  </div>
</main>

<?php get_footer() ?>