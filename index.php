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
            <a href="./howToInstall.html">Como Instalar</a>
          </li>
          <li
            data-aos="fade-down"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <a href="./tutorial.html">Tutorial</a>
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
      <!-- sidebar section -->
      <section id="sidebar">
        <!-- The sidebar will here into aside tag -->
        <aside>
          <ul>
            <li class="animatedlink">
              <a href="#historia_do_node">História</a>
            </li>
            <li class="animatedlink">
              <a href="#o_que_e">O que é NodeJS</a>
            </li>
            <li class="animatedlink">
              <a href="#como_funciona">Como Funciona</a>
            </li>
            <li class="animatedlink" id="last">
              <a href="#NPM">NPM</a>
            </li>
          </ul>
        </aside>
      </section>

      <!-- article section -->
      <section id="content" class="flexbox">
        <!-- Text will here into article tag -->
        <article>
          <div class="title" id="historia_do_node">
            <h1>NODEJS</h1>
          </div>
          <div class="article">
            



            <h2>História</h2>

            <p>
              Foi criado por Ryan Dahl em janeiro de 2010, e Isaac Schlueter criou o NPM (Node Package Manager). Em fevereiro de 2009 o MongoDB foi criado e no mesmo tempo APIS começaram a se popularizar com a nova integração de RESTful JSON APIS.
              Ryan, percebeu que as aplicações eram mal utilizadas e ineficientes o modo que usuários lidavam com os recursos da máquina, consumindo mais recursos de processamento que o necessário.
            </p>

            <p>
              Em uma aplicação web tradicional, é comum a sobrecarga de requisições, o que muitas vezes gera o bloqueio por carregamentos de arquivos ou processamentos pesados e por isso, o pesquisador entendeu a necessidade de criar o Node.js.
              O fato do Node ser single thread é um diferencial no desenvolvimento, são chamados fluxos de execução, o que simplifica o processo de demanda evitando a interrupção.
            </p>

            <p>Desenvolvida a partir da tecnologia V8 Engine e do Javascript, cujo o propósito é acelerar o desempenho de uma aplicação, o Node.js é portável pelas plataformas Windows, Mac e Linux, possibilitando a elaboração de diferentes aplicações Web e utilizando apenas um código em Javascript. Portanto, as demandas que surgem por parte da internet e a forma que o código em JavaScript pode ser construído, proporciona inúmeras possibilidades de desenvolvimentos a serem feitos na Web, o que torna o Node.js uma plataforma colaborativa, ágil </p>
          
              
            <img src="assets/node-faixa.png" alt="Faixa Node JS" />
        
            <h3>Cronologia</h3>

            <p>A cronologia tem como finalidade apresentar a história e os avanços da tecnologia desde a corrida dos browsers, para um melhor atendimento:</p>

            <ul>
              <li> <b>1993</b> – O Mosaic é inserido como primeiro a rodar no Windows, permitindo o acesso da web para o público em geral.
              <li> <b>1994</b> – O Netscape trouxe características que um browser moderno oferece: abas, histórico de visitas, entre outros.
              <li> <b>1995</b> – O Explorer 1,0 a Microsoft chega ao mercado e em pouco tempo é atualizado.
              <li> <b>1996</b> – A Microsoft lança a versão 3.0 do Explorer e em 1997 a quarta versão do navegador é divulgada.
              <li> <b>1998</b> – Com a liberação do código-fonte a Netscape cria o Mozilla
              <li> <b>2000</b> – Com uma comunidade fiel, é desenvolvido o Opera, como navegador alternativo do Mozilla
              <li> <b>2003</b> – A Apple anuncia seu navegador, o Safari, padrão de todo sistema operacional e permanece até os dias de hoje
              <li> <b>2004</b> – O Firefox 1.0 surge como uma versão atualizada do Mozilla
              <li> <b>2008</b> – A Google finalmente apresenta um projeto, sendo ele, rápido, seguro e estável, comparado aos concorrentes, uma promessa que iria poupar bloqueios.
            </ul>

            <p>
              Diante de inúmeros lançamentos da Google, o V8 é o interpretador (máquina virtual) Javascript Engine, uma linguagem utilizada no navegador Google Chrome e no Node.js, com o desempenho rápido e aperfeiçoado devido a corrida dos browsers; potencializando o processamento do back-end.
              Por isso, implementar soluções inovadoras em todas as etapas do seu serviço é fundamental. Conte com a X-Apps para garantir o desenvolvimento seguro, ágil e eficaz para seu cliente.
            </p>

            <h2 id="o_que_e">O que é</h2>

            <p>O NodeJS foi construído no topo do motor de compilação do google, o V8. Computadores modernos apenas entendem código de máquina (0 – 1). Ao invés de escrever código de máquina, muitos desenvolvedores (devs) preferem escrever em linguagens de alto nível (High Level Language). Mas o que acontece exatamente antes da execução de um programa escrito em NodeJS?</p> 

            <p>Basicamente qualquer código escrito em linguagens como Java, Python, c++, JavaScript e outros, sofrem uma tradução da sintaxe digitada pelo desenvolvedor para uma syntax compreensível pelos navegadores, computadores e máquinas em geral. Essa conversão é feita por 3 tipos de tradutores:</p>
            
            <ul>
              <li> •	Traspilers (Transpiladores) <br>
              Pegam o código fonte e transforma o código em um outro tipo. Um exemplo é quando usamos TypeScript com syntax de classes e tipagens, e assim que a conversão é feita, o código deixa de ser TS, e vira JS.

              <li> •	Compilers (Compiladores) <br>
              Pegam o código fonte e transforma ele em um arquivo / programa executável. Um exemplo seria programar em C# e assim que a compilação é realizada e dentro da pasta Debug tem o arquivo.exe que significa executável.
              
              <li> •	Interpreters (Interpretadores) <br>
              Pegam o código fonte e executam eles diretamente sem qualquer conversão ou transformação do código.
            </ul>

            <p>
              V8 é um JavaScript Engine (Motor JavaScript), o qual é um tipo de Interpretador (Interpreter) JavaScript. O V8 interpreta JavaScript para código de máquina nativo e executa imediatamente. Também otimiza o código fazendo o processo de compilação e execução ficarem mais rápido.
            </p>
                        
            <p>
              V8 não é o Chrome, ele está dentro do Chrome. Em outros navegadores tempos outros motores JavaScript, sendo alguns deles:
            </p>

            <ul>
           <li> •	JavaScriptCore (IOS, Safari)
           <li> •	SpiderMonkey (Firefox)
           <li> •	Chakra (Internet Explorer)
            </ul>

            <p>SpiderMonkey Engine é usado no MongoDB, por tanto esse NoSQL Database consegue entender comandos JSON. Ele foi o primeiro motor JavaScript de todos.</p>

            <p>Sabendo então o que é o V8 e o que ele faz, então sabemos o que o NodeJS. Digo isso pois o NodeJS faz o mesmo, ele incorpora o Motor JavaScript V8 do google Chrome para executar JavaScript fora do navegador (browser).</p>

            <p>Em outras palavras o NodeJS é um Server-Side JavaScript runtime environment, ou em português, Um Ambiente de tempo de execução JavaScript do lado do servidor. Imagine que o V8 fosse o motor e o câmbio de transmissão de um carro, O NodeJS é tudo a mais que compõem o carro (tirando o câmbio e o motor), por tanto, rodas, volante, painel inteligente, bancos macios, sistemas de segurança, airbags, retrovisores, faróis etc. E por fim, o programador, seria o motorista desse carro, utilizando da sintaxe para pilotar esse potente “veículo”.</p>

            <p>O NodeJS foi construído usando C++, e hoje já existe seu irmão o DENO que foi feito em RUST (uma linguagem de programação de Baixo Nível segura e performática, que vem para melhorar a forma como os programas eram escritos em C e C++. Rust seria uma evolução do C++ com uma sintaxe de alto nível).</p>

            <h2 id="como_funciona">Como Funciona</h2>

            <p>
              O NodeJS se apresenta de duas formas, são elas:
            </p>

            <ul>
              <li>1.  Um Processador de Script
              <li>2.	A REPL (Read Eval Print Loop)
            </ul>

            <p>O processador de Script pode ser chamado com:</p>

            <p class="code">$> node {script name}</p>
            <p class="code"> $> node index.js</p>

            <p>O evento de loop é continuamente checado para verificar se há algum processo novo na fila para o NodeJS executar.</p>

            <p>O Node.js é uma plataforma orientada a eventos de thread único capaz de executar programação assíncrona e sem bloqueio. Essas funcionalidades do Node.js tornam a memória eficiente. O loop de eventos permite que o Node.js execute operações de E/S sem bloqueio, apesar do JavaScript ser de thread único. Isso é feito atribuindo operações ao sistema operacional sempre e sempre que possível.
            </p>
            
            <p>A maioria dos sistemas operacionais é multithread e, portanto, pode lidar com várias operações em execução em segundo plano. Quando uma dessas operações é concluída, o kernel informa ao Node.js e o respectivo retorno de chamada atribuído a essa operação é adicionado à fila de eventos que eventualmente será executada.</p>

            <p>Quando a pilha de processos finaliza o código para de rodar porque não há mais nada para ser executado. Então para manter a aplicação rodando há dois tipos de invocadores, sendo eles:</p>

                  <h3>1.	Síncronos (Synchronous)</h3>
                  
                  <p>
                    Os aplicativos da web síncronos carregam recursos única e sequencialmente, de modo que, quando um recurso ou componente superior na hierarquia falha ao carregar, aqueles abaixo dele não respondem.
                    As solicitações feitas por você operam de maneira síncrona com um protocolo multithread.
                    Nota: Um thread é um único trabalhador de ponta a ponta ou canal que lida com solicitações na programação.
                  </p>

                  <p>Cada um desses threads lida com solicitações separadamente na programação síncrona. Portanto, cada thread tem seu tempo de execução e carrega completamente antes de executar o próximo evento. Consequentemente, a execução do evento em um thread trava outras threads, bloqueando toda a interface do usuário no processo.</p>

                  <p>Portanto, as chamadas síncronas garantem que um cliente ou navegador obtenha uma resposta da primeira solicitação antes de executar a próxima. Isso pode resultar em atrasos desnecessários e má experiência do usuário.</p>


                  <h3>2.	Assíncronos (Asynchronous)</h3>

                  <p>Na programação assíncrona, os aplicativos atendem a solicitações e respostas usando um protocolo de entrada e saída (I / O) sem bloqueio. Ao contrário da programação síncrona, um programa assíncrono não executa operações hierarquicamente. Assim, o programa não esperará pela execução de uma solicitação antes de responder com outra.</p>
                  
                  <p>Em essência, ele executa solicitações simultaneamente, mesmo se elas estiverem em funções diferentes. Como resultado, um aplicativo desenvolvido com programação assíncrona carrega todo o seu conteúdo apenas uma vez.</p>

                  <p>Um único thread lida com várias solicitações em um loop de eventos. Portanto, a falha de uma solicitação não afeta a outra.</p>

                  <p>Sabendo da diferença entre Asynchronous e Synchronous, e que o NodeJS é Single-thread, podemos dizer que, toda vez que o event-loop roda, o número de itens faltantes para serem processados, podem continuar do mesmo jeito ou crescerem. O evento de loop checa o último item que tem para fazer na lista de tarefas, e se não há mais nada o processo é encerrado.</p>

                  <p>Porém, se cada tarefa na lista criar uma tarefa, a lista nunca alcançara a zero. Assim é possível fazer com que o node rode definitivamente, ou infinitamente, o que faz o processo nunca chegar em um ponto que finaliza.</p>

                  <p>Muitos programas em Node como servidores ou trabalhos em segundo plano por exemplo são desenhados desse jeito. Para criar mais itens na lista de tarefas e assim a lista nunca chegar a zero para o servidor continuar rodando.</p>

                  <p>Existem também tarefas não bloqueantes (Non-blocking Tasks) os quais são processados na lista de tarefas do Node, e ele executa essas tarefas assim que possível. Tarefas não bloqueantes não permite o Node fazer múltiplas coisas ao mesmo tempo, eles apenas permitem o Node agendar essas tarefas para depois, enquanto executa outras tarefas.</p>
              
                <p>Quando você quer rodar uma aplicação em node, você não especifica todos os arquivos do projeto. Você apenas específica o arquivo de entrada. Por que o projeto pode conter mil arquivos em diferentes diretórios etc. Então nós importamos um arquivo para outro e assim sucessivamente, até chegar no arquivo index (índice) da aplicação, o qual é responsável por executar tudo. Essas importações fazemos através do module system, usando a sintaxe:</p>

                <p class="code">module.exports = {nome_da_variavel_ou_funcao}; </p>
                <p class="code" style="text-align: left;">const dado_importado = require(“nome_do_arquivo_que_esta_exportando”)</p>

                <p>Sistema de modulo do Node cria uma árvore de dependência, o qual específica para o node quais arquivos são necessários para rodar a aplicação.</p>
                
                <p>Em resumo o Processador de Script do node faz o seguinte:</p>

                <ul>
                  <li>  1.	Lê o código e as importações no arquivo de entrada que é especificado

                  <li>  2.	Lê em todos os arquivos que estão sendo importados e exportados.

                  <li>  3.	Começa a executar as tarefas síncronas desses arquivos.

                  <li>  4.	Começa a processar a lista de tarefas criadas pela Stack do node. Então o Event Loop fica verificando sempre se há ou não tarefa para ser executado. </li>
                </ul>

                <p>Para invocar o REPL, apenas digite “node” em seu terminal após ter instalado na sua máquina. Isso irá iniciar o REPL que é um ambiente de execução JavaScript interativo no próprio terminal. Você pode escrever qualquer código JavaScript que você quiser, e ter ele executado.</p>

                <h3>Convenções</h3>

                  <h4>Package.json</h4>

                  <p>Dentro do arquivo Package.json nós temos uma estrutura JSON que contém algumas informações sobre o projeto como: “name”, “description”, “version”, “license”, “main”, “dependencies”, “scripts”, “devDependencies” etc.</p>

                  <p>Quando alguma dependência é instalada, nós podemos requisitar o pacote passando o nome da dependência instalada (biblioteca), ex:</p>

                  <p class="code">
                    $> npm i express <br>
                    <br>
                    // In index.js <br>
                    <br>
                    let express = require(“express”);
                  </p>

                  <h4>Testes e Execução de Tarefas</h4>

                  <p>Testes de scripts é comumente mantido no diretório chamado /test. E é acionado por um executor de tarefas como “mocha” ou “jest”.</p>

                  <p>Arquivos comuns de testes incluem:</p>

                  <ul>
                    <li> .travis.yml
                    <li> .jshintrc
                  </ul>

                  <p>Executores de tarefas de propósitos gerais frequentemente controlam todo o processo da aplicação. Grunt e Gulp são os mais populares pacotes.</p>

                  <h4>Git & GitHub</h4>

                  <p>São de longe as mais populares ferramentas de controle de versionamento. Você verá frequentemente arquivos como .git e .gitignore em seus projetos node. O .git servirá para manter a configuração do repositório git criado. Gitignore servirá para dizer quais arquivos o git pode ignorar. Geralmente colocamos a node_modules dentro  do arquivo porque é ela que mantem o código fonte de todas as bibliotecas que instalamos. Á arvore de dependência fica absurdamente grande, o que faz com que o Github não consiga tratar. Por tanto, quando queremos subir o arquivo, colocamos dentro do gitignore para ele ignorar a node_modules, que pode ser instalada apenas rodando “npm install” ou “yarn” dependendo de qual gerenciado de pacotes você tiver instalado.</p> 

                  <h4>Comentários de código</h4>

                  <p>É uma convenção comum usar comentários de código sobre a função. Digo isso pois o próprio node já vem com uma funcionalidade que, quando você cria um comentário de várias linhas em cima de algum código javascript como expressão ou função, ao chamar a função vai aparecer uma descrição explicando o que a função faz, a qual é o comentário que você criou. Então dê curtos e bons comentários para seus códigos.</p>


                  <h4>Estilos e Padrões de Desenvolvimento</h4>

                  <p>Os padrões de desenvolvimento nesse caso não seria apenas sobre clean Code, design Pattern, padrões MVCs ou SOLID. Mas sim sobre como a comunidade node vê a melhor forma de escrever e manter o código em javascript. Esses estilos dizem respeito a sintaxe usada, como ponto e vírgula, uso de Arrow Functions ou não etc. Esses estilos são mantidos em pacotes como eslint, quando você o instala e usa ele, você pode usar muitos padrões. Um dos padrões javascript está em um repositório chamado Airbnb, e conforme você ir programando, o próprio eslint vai dizer o que está certo ou errado e como corrigir.</p>

                <h3>NodeJS VS Browser</h3>

                <p>Como já sabemos o NodeJS irá implementar o motor de compilação JavaScript que o Chrome utiliza, o V8. Sabendo disso, é possível abrir o devtools do navegador em qualquer página que você quiser, clicando F12 ou com o botão direito no mouse e “inspecionar”. Dentro do devtools, há uma aba chamada “console”. Esse espaço é como um CMD para javascript, você consegue interagir com a DOM do HTML além de criar código javascript, o qual permanece vivo durante a sessão do navegador. Assim que a página é recarregada o código javascript que você criou na sessão anterior não existe mais. Algo que vale ressaltar é que não importa quais mudanças você faça no site, pelo devtools, o servidor não sofrerá as alterações, por tanto, tudo que você faz acontece apenas para você.
                </p>

                <p>Mas então, qual a diferença entre o JavaScript convencional do browser e no NodeJS?</p>

                <p>
                  Existem muitas diferenças entre eles, mas a linguagem é 100% a mesma. O que vai ser diferente é apenas camadas de interação. Enquanto o browser vai disponibilizar objetos e métodos para manipulação dos elementos do website como a DOM, no Nodejs não existirá DOM, já que ele trabalha no lado do servidor e em nossa máquina está tendo uma interação com o File System.
                  Simplesmente pense que o JavaScript do Browser é usado especificamente no Front-End e tudo que está envolvido com o visual. O JavaScript do NodeJS é usado especificamente no Backend fazendo conexão com Banco de Dados, construindo lógica de negócio etc.
                </p>

                <p>Algo importante de saber é que o Node vai trabalhar como um ambiente único (o servidor), enquanto o browser será muitos ambientes.</p>

              <h2 id="NPM">NPM</h2>

              <p>NPM significa Node Package Manager. E com ele podemos basicamente insatalar códigos de outras pessoas, criar nossas próprias bibliotecas além de gerenciar e rodar nossos scripts através de configurações do Package.JSON. O Npm já vem dentro do Node  quando ele é instalado. Para usar digite apenas npm –version para mostrar a versão do NPM. Caso aparece um valor do tipo: X.XX.XX, é a especificação da versão, e mostra que o npm está instalado.</p>

              <p>A primeira coisa que fazemos ao usar o npm é iniciar um projeto. Para isso fazemos o:</p>

              <p class="code">$> npm init –y</p>

              <p>Esse comando nos permite iniciar um package.json no diretório /~ da aplicação o qual vem com informações básicas pré configuradas como explicado anteriormente quando falamos de como funciona. </p>

              <p>Com npm conseguimos instalar, remover atualizar e rodar bibliotecas externas, desenvolvidas por outros desenvolvedores, e que geralmente usamos para automatizar tarefas e scripts repetitivos. Ao querer utilizar uma biblioteca como ReactJS por exemplo precisamos  instalar através do NPM ou Yarn, que é outro gerenciador de pacotes desenvolvidos pela Facebook</p>

              <p>npm é o gerenciador de pacotes para a plataforma JavaScript Node. Ele coloca os módulos no lugar para que o nó possa encontrá-los e gerencia conflitos de dependência de forma inteligente.</p>

              <p>É extremamente configurável para suportar uma ampla variedade de casos de uso. Mais comumente, é usado para publicar, descobrir, instalar e desenvolver programas de nó.</p>

              <p>O npm está configurado para usar o registro público da npm, Inc. em <a href="https://registry.npmjs.org" target="_blank">NPM</a> por padrão. O uso do registro público npm está sujeito aos termos de uso disponíveis em <a href="https://www.npmjs.com/policies/terms." target="_blank">NPM - Politicas</a></p>

            </ul>
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