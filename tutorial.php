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
    <title>Node Article</title>

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

    <!-- Own Styles -->
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/content.css" />

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
          data-aos-duration="1000"
        >
          <img src="./assets/logo.png" alt="logo do nodejs" />
        </div>
      </div>
      <div>
        <ul>
          <li
            data-aos="fade-down"
            data-aos-delay="300"
            data-aos-duration="1000"
          >
            <a href="./index.html">Conceitos</a>
          </li>
          <li
            data-aos="fade-down"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <a href="./howToInstall.html">Como Instalar</a>
          </li>
          <li
            data-aos="fade-down"
            data-aos-delay="100"
            data-aos-duration="1000"
          >
            <a href="./about.html">Sobre</a>
          </li>
        </ul>
      </div>
    </header>

    <!-- main section -->
    <main
      class="flexbox"
      data-aos="zoom-out"
      data-aos-delay="100"
      data-aos-duration="1000"
    >
      <!-- article section -->
      <section id="content" class="flexbox">
        <!-- Text will here into article tag -->
        <article>
          <div class="title" id="historia_do_node">
            <h1>NODEJS Tutorial</h1>
          </div>

          <div class="article">
            <iframe
              width="960"
              height="475"
              src="https://www.youtube.com/embed/DiXbJL3iWVs"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              style="margin-bottom: 2rem"
            ></iframe>

            <p>
              O que acha de hoje estudarmos sobre o Node.js?<br />
              O que é ele? Para que serve? Como funciona?
            </p>

            <p>
              Estudaremos um pouco de teoria e bastante prática, desenvolvendo
              algumas aplicações com Node puro, para conhecer os módulos nativos
              como os, fs, path, url, events, http e comportamentos do Node no
              geral como, por exemplo, o Event Loop. Espero que seja um conteúdo
              que te faça crescer ainda mais na sua carreira. 🚀
            </p>
          </div>
        </article>
      </section>
    </main>

    <div id="end" class="end-flex">
      <hr />
      <h4>Ferramentas Utilizadas</h4>
      <h5>
        PHP8; HTML; CSS3; JavaScript; Fonts Google; Figma.com; Xampp; Visual
        Studio Code
      </h5>
    </div>

    <!-- Footer of the webpage -->
    <footer class="footer-flex">
      <!--Here will be the footer-->
      <div
        class="footer-text"
        data-aos="fade-up-right"
        data-aos-delay="100"
        data-aos-duration="500"
      >
        <p class="footer-title">Etec de Carapicuíba</p>

        <h5>
          Atividade de Programação Web 3 <br />
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
          Artigo sobre NodeJS e seus princípios <br />
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

    <!-- Smooth Scroll -->
    <script>
      $(".animatedlink a").click(function (e) {
        e.preventDefault();
        let id = $(this).attr("href"),
          targetOffset = $(id).offset().top,
          menuHeight = $("header").innerHeight();

        $("html, body").animate(
          {
            scrollTop: targetOffset - menuHeight - 30,
          },
          500
        );
      });
    </script>

    <!-- FIX SideBar on Scroll -->
    <script>
      let widthPage = { w: window.innerWidth };
      let widthSaved = JSON.parse(localStorage.getItem("widthPage"));

      if (
        localStorage.getItem("elcoordenadas") === null ||
        widthSaved === null ||
        widthPage.w !== widthSaved.w
      ) {
        let el = document.querySelector("#sidebar aside ul");
        localStorage.setItem(
          "elcoordenadas",
          JSON.stringify({ y: el.getBoundingClientRect().y })
        );

        localStorage.setItem("widthPage", JSON.stringify(widthPage));
      }
      let { y } = JSON.parse(localStorage.getItem("elcoordenadas"));

      $(function () {
        var links = $("#sidebar aside ul");
        $(window).scroll(function () {
          if ($(this).scrollTop() > y) {
            links.addClass("internal_links_fixed");
            //$("body").css("padding-top", 70);
          } else {
            links.removeClass("internal_links_fixed");
            //$("body").css("padding-top", 0);
          }
        });
      });
    </script>
  </body>
</html>
