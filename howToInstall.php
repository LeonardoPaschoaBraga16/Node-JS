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
            cenários possíveis. Ou seja, não importa se seu sistema é Mac,
            Windows ou Linux, através do instalador correspondente ao seu SO,
            será possível instalar nativamente
          </p>

          <div class="article">
            <div id="windows">
              <h2>Windows</h2>

              <p>
                Para baixar no Windows, é o mais fácil de todos, basta acessar a
                <a href="https://nodejs.org/en" target="_blank"
                  >página oficial</a
                >, e clicar no botão esquerdo com a opção LTS (Latest Version -
                ou última versão). O
              </p>

              <img
                src="./assets/node-installers.png"
                alt="Imagem retirada do site oficial do nodejs exibindo dois botões. O da esquerda instala a última versão estável lançada. O da direita instala a versão atual em desenvolvmento, e que por tanto pode conter algum bug."
              />

              <p>
                Essas opções servem para o usuário decidir qual quer instalar na
                máquina. Recomenda-se instalar o
                <span style="color: green">LTS</span> uma vez que, é a última
                versão lançada e estável, o que significa que está atualizada e
                sem erros. A opção <span style="color: green">Current</span> é a
                versão que está em desenvolvimento, e é uma liberação beta para
                testes das novas features (funcionalidades) que são adicionadas.
                Ela não é tão recomendada pois pode conter bugs e gerar erros.
              </p>

              <p>
                Após a instalação, siga os passos e configurações da tela
                "pop-up". Nela será possível configurar a pasta que ficará
                instalado o NodeJS e muito mais
              </p>
            </div>
            <div id="linux">
              <h2>Linux</h2>

              <p>
                No Linux o procedimento é bem fácil, além de haver a opção de
                usar um instalador.deb (o qual pode ser instalado no site
                oficial, como fizemos com o windows) basta rodar alguns comandos
                no terminal shell e o apt será responsável por instalar o NodeJS
                nativamente na sua distribuição Linux. Existem sim distribuições
                que precisaram de outras formas de instalação, mas com o intuito
                de cobrir os comandos no sistemas Linux mais usados como Linux
                Ubunut, Mint, Kali e afins, vamos estar rodando os seguintes
                comandos:
              </p>

              <p class="code">$> sudo apt update</p>
              <p class="code">$> sudo apt install nodejs</p>

              <p>
                Feito isso, a instalação será feita, e, em poucos segundos você
                terá o nodejs instalado
              </p>
            </div>
            <div id="macos">
              <h2>MacOS</h2>

              <p>
                Para MacOS você pode seguir os passos feitos tanto para windows
                (Baixar o binário responsável por fazer a instalação) quanto
                para Linux (baixando via terminal). Muitas vezes o MacOS e
                algumas distribuições linux podem vim com o node já instalado.
                Para saber se você já tem instalado, basta rodar:
              </p>

              <p class="code">$> node --version</p>

              <img
                src="./assets/macos-installer.png"
                alt="Todos os possíveis instaladores incluindo o de MacOS"
              />
            </div>

            <p>
              Caso apareça a versão do node em uma estrutura similar como a da
              imagem abaixo, significa que o node está instalado corretamente.
            </p>

            <img
              src="./assets/node-version.png"
              alt="Comando rodado no Git Bash
            para mostrar a versão do node com o comando: node --version"
            />

            <p>
              Para atualizar o node previamente instalado, você pode
              reinstalá-lo usando o instalador ou usar o nvm (node version
              manager) o qual permite mudar de versão de forma rápida e fácil. O
              mais fácil nesse caso seria através do NPM pedir para instalar o
              node globalmente, então o node seria sobrescrito com as mudanças
              da versão mais recente. Rode:
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
