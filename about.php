<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Preconnect To render the font faster -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- General Configurations -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/logo.png" type="image/png" />
    <title>NodeTicle</title>

    <!-- AOS ANIMATION LIBRARY-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Import of google fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- DM Sans -->
    <link
      href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <!-- Libre -->

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/282c54caee.js"
      crossorigin="anonymous"
    ></script>

    <!-- Own Styles -->
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/content.css" />
    <link rel="stylesheet" type="text/css" href="./styles/about.css" />

    <!-- JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <!-- Header of the webpage -->
    <header class="flexbox">
      <div>
        <h1 data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
          Node <span>Js</span>
        </h1>
        <div
          class="imgbox"
          data-aos="fade-down"
          data-aos-delay="200"
          data-aos-duration="200"
        >
          <img src="./assets/logo.png" alt="logo do nodejs" />
        </div>
      </div>
      <div>
        <ul>
          <li data-aos="fade-down" data-aos-delay="400" data-aos-duration="200">
            <a href="./index.php">Conceitos</a>
          </li>
          <li data-aos="fade-down" data-aos-delay="300" data-aos-duration="200">
            <a href="./howToInstall.php">Como Instalar</a>
          </li>
          <li data-aos="fade-down" data-aos-delay="200" data-aos-duration="200">
            <a href="./tutorial.php">Tutorial</a>
          </li>
        </ul>
      </div>
    </header>

    <!-- Main Section-->
    <main
      class="flexbox"
      data-aos="zoom-out"
      data-aos-delay="100"
      data-aos-duration="1000"
    >
      <!--About Section-->
      <section id="about" class="about">
        <!-- Text will here into article tag -->
        <article>
          <!-- etec section -->
          <div class="etec">
            <div class="title">
              <h1>SOBRE N??S</h1>
            </div>
            <div class="article">
              <div class="text">
                <p>
                  A Escola T??cnica Estadual de Carapicu??ba foi criada em 2006,
                  em parceria entre a Prefeitura de Carapicu??ba e o Centro Paula
                  Souza, em um campus de uso compartilhado com a Fatec,
                  possibilitando aos cidad??os da regi??o a aquisi????o de uma
                  forma????o t??cnica que qualifica para a inser????o no mercado de
                  trabalho. Os cursos ofertados pertencem aos seguintes Eixos
                  Tecnol??gicos: Gest??o e Neg??cios, Informa????o e Comunica????o e
                  Produ????o Cultural e Design. A Etec est?? localizada no Centro
                  da cidade de Carapicu??ba, ao lado do Terminal Rodovi??rio de
                  Carapicu??ba, Zona Oeste da Regi??o Metropolitana de S??o Paulo,
                  tendo f??cil acesso a rodovia Presidente Castelo Branco. A Etec
                  Carapicu??ba visa implementar valores e vis??o human??stica no
                  processo de ensino/aprendizagem, integrando novas tecnologias
                  inerentes ??s ??reas oferecidas.
                </p>
              </div>
              <div class="img-etec">
                <img src="assets/etec2.jpg" alt="Etec" />
              </div>
            </div>
          </div>

          <!-- Social Section -->
          <div class="social">
            <div class="sub-title">
              <h1>REDES SOCIAIS</h1>
            </div>
            <div class="us">
              <div class="leo">
                <img src="assets/leonardo.png" alt="Leonardo" />
                <div class="coluna">
                  <h3>Leonardo Paschoa</h3>

                  <p>
                    Com experiencia em Programa????o Web e Python, Leonardo ?? um
                    aluno da Etec de Carapicuiba que est?? realizndo o curso de
                    Desenvolvimento de Sistemas. Com 17 anos continou seu estudo
                    em programa????o, o intercalando com seu desejo de se tornar
                    musico. Seu objetivo ?? ter uma vida est??vel e conseguir
                    fazer aquilo que gosta sem se arrepender de nada.
                  </p>

                  <div class="icons">
                    <!-- Here go font awewsome icons -->
                    <a
                      href="https://github.com/LeonardoPaschoaBraga16"
                      target="_blank"
                      ><i class="fa-brands fa-github"></i
                    ></a>
                    <a
                      href="https://www.linkedin.com/in/leonardo-paschoa-braga-81a60120a/"
                      target="_blank"
                      ><i class="fa-brands fa-linkedin"></i
                    ></a>
                    <a href="mailto:leonardo.braga16@hotmail.com">
                      <i class="fa-solid fa-envelope"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="victor">
                <img src="assets/victor.png" alt="Victor" />
                <div class="coluna">
                  <h3>Victor Hugo</h3>

                  <p>
                    Com experiencia em Programa????o Front, Back, entre outras,
                    Victor ?? um aluno da Etec de Carapicu??ba que est?? realizando
                    o curso de Desenvolvimento de Sistemas. Com 17 anos come??ou
                    a trabalhar em uma empresa renomada de programa????o. Suas
                    habiliades de programa????o com o tempo vem melhorando e seu
                    objetivo um dia ?? formar uma grande empresa de programa????o
                    pelo mundo inteiro
                  </p>

                  <div class="icons">
                    <!-- Here go font awewsome icons -->
                    <a href="https://github.com/VictorSilva15" target="_blank"
                      ><i class="fa-brands fa-github"></i
                    ></a>
                    <a
                      href="https://www.linkedin.com/in/victorsilvadev/"
                      target="_blank"
                      ><i class="fa-brands fa-linkedin"></i
                    ></a>
                    <a href="mailto:victor.silvaPC@hotmail.com">
                      <i class="fa-solid fa-envelope"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Academy Section -->
          <div class="sub-title">
            <h1>FORMA????O ACADEMICA</h1>
          </div>
          <div class="academy">
            <div class="etec">
              <div class="img-etec">
                <img src="assets/etec.png" alt="Etec Carapicuiba" />
              </div>
              <h5>Etec de Carapicuiba</h5>
            </div>
            <div class="text">
              <p>
                Na Etec de Carapicuiba onde estudados e aperfei??oamos nossas
                habilidades em programa????o de softwares e websites. Cursamos o
                curso de Desenvolvimento de Sistemas, juntamente com nossa vaga
                para a Fatec de Carapicuiba, aonde conseguiremos nossos diplomas
              </p>
            </div>
          </div>
        </article>
      </section>
    </main>

    <!-- Footer of the webpage -->
    <footer class="footer-flex">
      <!--Here will be the footer-->
      <div
        class="footer-text"
        data-aos="fade-up-right"
        data-aos-delay="100"
        data-aos-duration="500"
      >
        <p class="footer-title">Etec de Carapicu??ba</p>

        <h5>
          Atividade de Programa????o Web 3 <br />
          Professor: Ivan Lima
        </h5>
      </div>

      <div
        class="footer-text"
        data-aos="fade-up"
        data-aos-delay="200"
        data-aos-duration="500"
      >
        <p class="footer-title">WebSite em PHP</p>

        <h5>
          Artigo sobre NodeJS e seus princ??pios <br />
          Deploy feito no
          <span id="webhost"
            ><a href="https://br.000webhost.com" target="_blank"
              >000webhost</a
            ></span
          >
        </h5>
      </div>

      <div
        class="footer-img"
        data-aos="fade-up-left"
        data-aos-delay="300"
        data-aos-duration="500"
      >
        <img src="assets/npm.png" alt="Logo NPN" />
      </div>
    </footer>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- FIX SideBar on Scroll -->
    <script>
      let el = document.querySelector("#sidebar aside ul");
      let elCoordenadas = el.getBoundingClientRect();
      $(function () {
        var links = $("#sidebar aside ul");
        $(window).scroll(function () {
          if ($(this).scrollTop() > elCoordenadas.y) {
            links.addClass("internal_links_fixed");
            //$('body').css('padding-top', 70);
          } else {
            links.removeClass("internal_links_fixed");
            //$('body').css('padding-top', 0);
          }
        });
      });
    </script>
  </body>
</html>
