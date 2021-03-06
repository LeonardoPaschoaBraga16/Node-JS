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
            <a href="index.php">Conceitos</a>
          </li>
          <li
            data-aos="fade-down"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <a href="./tutorial.php">Tutorial</a>
          </li>
          <li
            data-aos="fade-down"
            data-aos-delay="100"
            data-aos-duration="1000"
          >
            <a href="./about.php">Sobre</a>
          </li>
        </ul>
      </div>
    </header>

    <!-- main section -->
    <main
      class="flexbox"
      data-aos="fade-left"
      data-aos-delay="100"
      data-aos-duration="1000"
    >
      <!-- article section -->
      <section id="content" class="flexbox">
        <!-- Text will here into article tag -->
        <article>
          <div class="title" id="historia_do_node">
            <h1>COMO INSTALAR?</h1>
          </div>

          <p>
            Seja qual for seu Sistema Operacional (SO), basta acessar o
            <a href="https://nodejs.org/en" target="_blank">Site Oficial</a> do
            node que disponibiliza instaladores e que atendem cada um dos
            cen??rios poss??veis. Ou seja, n??o importa se seu sistema ?? Mac,
            Windows ou Linux, atrav??s do instalador correspondente ao seu SO,
            ser?? poss??vel instalar nativamente
          </p>

          <div class="article">
            <div id="windows">
              <h2>Windows</h2>

              <p>
                Para baixar no Windows, ?? o mais f??cil de todos, basta acessar a
                <a href="https://nodejs.org/en" target="_blank"
                  >p??gina oficial</a
                >, e clicar no bot??o esquerdo com a op????o LTS (Latest Version -
                ou ??ltima vers??o). O
              </p>

              <img
                src="./assets/node-installers.png"
                alt="Imagem retirada do site oficial do nodejs exibindo dois bot??es. O da esquerda instala a ??ltima vers??o est??vel lan??ada. O da direita instala a vers??o atual em desenvolvmento, e que por tanto pode conter algum bug."
              />

              <p>
                Essas op????es servem para o usu??rio decidir qual quer instalar na
                m??quina. Recomenda-se instalar o
                <span style="color: green">LTS</span> uma vez que, ?? a ??ltima
                vers??o lan??ada e est??vel, o que significa que est?? atualizada e
                sem erros. A op????o <span style="color: green">Current</span> ?? a
                vers??o que est?? em desenvolvimento, e ?? uma libera????o beta para
                testes das novas features (funcionalidades) que s??o adicionadas.
                Ela n??o ?? t??o recomendada pois pode conter bugs e gerar erros.
              </p>

              <p>
                Ap??s a instala????o, siga os passos e configura????es da tela
                "pop-up". Nela ser?? poss??vel configurar a pasta que ficar??
                instalado o NodeJS e muito mais
              </p>
            </div>
            <div id="linux">
              <h2>Linux</h2>

              <p>
                No Linux o procedimento ?? bem f??cil, al??m de haver a op????o de
                usar um instalador.deb (o qual pode ser instalado no site
                oficial, como fizemos com o windows) basta rodar alguns comandos
                no terminal shell e o apt ser?? respons??vel por instalar o NodeJS
                nativamente na sua distribui????o Linux. Existem sim distribui????es
                que precisaram de outras formas de instala????o, mas com o intuito
                de cobrir os comandos no sistemas Linux mais usados como Linux
                Ubunut, Mint, Kali e afins, vamos estar rodando os seguintes
                comandos:
              </p>

              <p class="code">$> sudo apt update</p>
              <p class="code">$> sudo apt install nodejs</p>

              <p>
                Feito isso, a instala????o ser?? feita, e, em poucos segundos voc??
                ter?? o nodejs instalado
              </p>
            </div>
            <div id="macos">
              <h2>MacOS</h2>

              <p>
                Para MacOS voc?? pode seguir os passos feitos tanto para windows
                (Baixar o bin??rio respons??vel por fazer a instala????o) quanto
                para Linux (baixando via terminal). Muitas vezes o MacOS e
                algumas distribui????es linux podem vim com o node j?? instalado.
                Para saber se voc?? j?? tem instalado, basta rodar:
              </p>

              <p class="code">$> node --version</p>

              <img
                src="./assets/macos-installer.png"
                alt="Todos os poss??veis instaladores incluindo o de MacOS"
              />
            </div>

            <p>
              Caso apare??a a vers??o do node em uma estrutura similar como a da
              imagem abaixo, significa que o node est?? instalado corretamente.
            </p>

            <img
              src="./assets/node-version.png"
              alt="Comando rodado no Git Bash
            para mostrar a vers??o do node com o comando: node --version"
            />

            <p>
              Para atualizar o node previamente instalado, voc?? pode
              reinstal??-lo usando o instalador ou usar o nvm (node version
              manager) o qual permite mudar de vers??o de forma r??pida e f??cil. O
              mais f??cil nesse caso seria atrav??s do NPM pedir para instalar o
              node globalmente, ent??o o node seria sobrescrito com as mudan??as
              da vers??o mais recente. Rode:
            </p>

            <p class="code">$> sudo npm install --global npm</p>
          </div>
        </article>
      </section>

      <!-- sidebar section -->
      <section id="sidebar">
        <!-- The sidebar will here into aside tag -->
        <aside>
          <ul>
            <li class="animatedlink">
              <a href="#windows">Windows</a>
            </li>
            <li class="animatedlink">
              <a href="#linux">Linux</a>
            </li>
            <li class="animatedlink">
              <a href="#macos">MacOS</a>
            </li>
          </ul>
        </aside>
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
