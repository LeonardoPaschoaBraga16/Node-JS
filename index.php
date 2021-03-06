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
            <a href="./howToInstall.php">Como Instalar</a>
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
              <a href="#historia_do_node">Hist??ria</a>
            </li>
            <li class="animatedlink">
              <a href="#o_que_e">O que ?? NodeJS</a>
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
            



            <h2>Hist??ria</h2>

            <p>
              Foi criado por Ryan Dahl em janeiro de 2010, e Isaac Schlueter criou o NPM (Node Package Manager). Em fevereiro de 2009 o MongoDB foi criado e no mesmo tempo APIS come??aram a se popularizar com a nova integra????o de RESTful JSON APIS.
              Ryan, percebeu que as aplica????es eram mal utilizadas e ineficientes o modo que usu??rios lidavam com os recursos da m??quina, consumindo mais recursos de processamento que o necess??rio.
            </p>

            <p>
              Em uma aplica????o web tradicional, ?? comum a sobrecarga de requisi????es, o que muitas vezes gera o bloqueio por carregamentos de arquivos ou processamentos pesados e por isso, o pesquisador entendeu a necessidade de criar o Node.js.
              O fato do Node ser single thread ?? um diferencial no desenvolvimento, s??o chamados fluxos de execu????o, o que simplifica o processo de demanda evitando a interrup????o.
            </p>

            <p>Desenvolvida a partir da tecnologia V8 Engine e do Javascript, cujo o prop??sito ?? acelerar o desempenho de uma aplica????o, o Node.js ?? port??vel pelas plataformas Windows, Mac e Linux, possibilitando a elabora????o de diferentes aplica????es Web e utilizando apenas um c??digo em Javascript. Portanto, as demandas que surgem por parte da internet e a forma que o c??digo em JavaScript pode ser constru??do, proporciona in??meras possibilidades de desenvolvimentos a serem feitos na Web, o que torna o Node.js uma plataforma colaborativa, ??gil </p>
          
              
            <img src="assets/node-faixa.png" alt="Faixa Node JS" />
        
            <h3>Cronologia</h3>

            <p>A cronologia tem como finalidade apresentar a hist??ria e os avan??os da tecnologia desde a corrida dos browsers, para um melhor atendimento:</p>

            <ul>
              <li> <b>1993</b> ??? O Mosaic ?? inserido como primeiro a rodar no Windows, permitindo o acesso da web para o p??blico em geral.
              <li> <b>1994</b> ??? O Netscape trouxe caracter??sticas que um browser moderno oferece: abas, hist??rico de visitas, entre outros.
              <li> <b>1995</b> ??? O Explorer 1,0 a Microsoft chega ao mercado e em pouco tempo ?? atualizado.
              <li> <b>1996</b> ??? A Microsoft lan??a a vers??o 3.0 do Explorer e em 1997 a quarta vers??o do navegador ?? divulgada.
              <li> <b>1998</b> ??? Com a libera????o do c??digo-fonte a Netscape cria o Mozilla
              <li> <b>2000</b> ??? Com uma comunidade fiel, ?? desenvolvido o Opera, como navegador alternativo do Mozilla
              <li> <b>2003</b> ??? A Apple anuncia seu navegador, o Safari, padr??o de todo sistema operacional e permanece at?? os dias de hoje
              <li> <b>2004</b> ??? O Firefox 1.0 surge como uma vers??o atualizada do Mozilla
              <li> <b>2008</b> ??? A Google finalmente apresenta um projeto, sendo ele, r??pido, seguro e est??vel, comparado aos concorrentes, uma promessa que iria poupar bloqueios.
            </ul>

            <p>
              Diante de in??meros lan??amentos da Google, o V8 ?? o interpretador (m??quina virtual) Javascript Engine, uma linguagem utilizada no navegador Google Chrome e no Node.js, com o desempenho r??pido e aperfei??oado devido a corrida dos browsers; potencializando o processamento do back-end.
              Por isso, implementar solu????es inovadoras em todas as etapas do seu servi??o ?? fundamental. Conte com a X-Apps para garantir o desenvolvimento seguro, ??gil e eficaz para seu cliente.
            </p>

            <h2 id="o_que_e">O que ??</h2>

            <p>O NodeJS foi constru??do no topo do motor de compila????o do google, o V8. Computadores modernos apenas entendem c??digo de m??quina (0 ??? 1). Ao inv??s de escrever c??digo de m??quina, muitos desenvolvedores (devs) preferem escrever em linguagens de alto n??vel (High Level Language). Mas o que acontece exatamente antes da execu????o de um programa escrito em NodeJS?</p> 

            <p>Basicamente qualquer c??digo escrito em linguagens como Java, Python, c++, JavaScript e outros, sofrem uma tradu????o da sintaxe digitada pelo desenvolvedor para uma syntax compreens??vel pelos navegadores, computadores e m??quinas em geral. Essa convers??o ?? feita por 3 tipos de tradutores:</p>
            
            <ul>
              <li> ???	Traspilers (Transpiladores) <br>
              Pegam o c??digo fonte e transforma o c??digo em um outro tipo. Um exemplo ?? quando usamos TypeScript com syntax de classes e tipagens, e assim que a convers??o ?? feita, o c??digo deixa de ser TS, e vira JS.

              <li> ???	Compilers (Compiladores) <br>
              Pegam o c??digo fonte e transforma ele em um arquivo / programa execut??vel. Um exemplo seria programar em C# e assim que a compila????o ?? realizada e dentro da pasta Debug tem o arquivo.exe que significa execut??vel.
              
              <li> ???	Interpreters (Interpretadores) <br>
              Pegam o c??digo fonte e executam eles diretamente sem qualquer convers??o ou transforma????o do c??digo.
            </ul>

            <p>
              V8 ?? um JavaScript Engine (Motor JavaScript), o qual ?? um tipo de Interpretador (Interpreter) JavaScript. O V8 interpreta JavaScript para c??digo de m??quina nativo e executa imediatamente. Tamb??m otimiza o c??digo fazendo o processo de compila????o e execu????o ficarem mais r??pido.
            </p>
                        
            <p>
              V8 n??o ?? o Chrome, ele est?? dentro do Chrome. Em outros navegadores tempos outros motores JavaScript, sendo alguns deles:
            </p>

            <ul>
           <li> ???	JavaScriptCore (IOS, Safari)
           <li> ???	SpiderMonkey (Firefox)
           <li> ???	Chakra (Internet Explorer)
            </ul>

            <p>SpiderMonkey Engine ?? usado no MongoDB, por tanto esse NoSQL Database consegue entender comandos JSON. Ele foi o primeiro motor JavaScript de todos.</p>

            <p>Sabendo ent??o o que ?? o V8 e o que ele faz, ent??o sabemos o que o NodeJS. Digo isso pois o NodeJS faz o mesmo, ele incorpora o Motor JavaScript V8 do google Chrome para executar JavaScript fora do navegador (browser).</p>

            <p>Em outras palavras o NodeJS ?? um Server-Side JavaScript runtime environment, ou em portugu??s, Um Ambiente de tempo de execu????o JavaScript do lado do servidor. Imagine que o V8 fosse o motor e o c??mbio de transmiss??o de um carro, O NodeJS ?? tudo a mais que comp??em o carro (tirando o c??mbio e o motor), por tanto, rodas, volante, painel inteligente, bancos macios, sistemas de seguran??a, airbags, retrovisores, far??is etc. E por fim, o programador, seria o motorista desse carro, utilizando da sintaxe para pilotar esse potente ???ve??culo???.</p>

            <p>O NodeJS foi constru??do usando C++, e hoje j?? existe seu irm??o o DENO que foi feito em RUST (uma linguagem de programa????o de Baixo N??vel segura e perform??tica, que vem para melhorar a forma como os programas eram escritos em C e C++. Rust seria uma evolu????o do C++ com uma sintaxe de alto n??vel).</p>

            <h2 id="como_funciona">Como Funciona</h2>

            <p>
              O NodeJS se apresenta de duas formas, s??o elas:
            </p>

            <ul>
              <li>1.  Um Processador de Script
              <li>2.	A REPL (Read Eval Print Loop)
            </ul>

            <p>O processador de Script pode ser chamado com:</p>

            <p class="code">$> node {script name}</p>
            <p class="code"> $> node index.js</p>

            <p>O evento de loop ?? continuamente checado para verificar se h?? algum processo novo na fila para o NodeJS executar.</p>

            <p>O Node.js ?? uma plataforma orientada a eventos de thread ??nico capaz de executar programa????o ass??ncrona e sem bloqueio. Essas funcionalidades do Node.js tornam a mem??ria eficiente. O loop de eventos permite que o Node.js execute opera????es de E/S sem bloqueio, apesar do JavaScript ser de thread ??nico. Isso ?? feito atribuindo opera????es ao sistema operacional sempre e sempre que poss??vel.
            </p>
            
            <p>A maioria dos sistemas operacionais ?? multithread e, portanto, pode lidar com v??rias opera????es em execu????o em segundo plano. Quando uma dessas opera????es ?? conclu??da, o kernel informa ao Node.js e o respectivo retorno de chamada atribu??do a essa opera????o ?? adicionado ?? fila de eventos que eventualmente ser?? executada.</p>

            <p>Quando a pilha de processos finaliza o c??digo para de rodar porque n??o h?? mais nada para ser executado. Ent??o para manter a aplica????o rodando h?? dois tipos de invocadores, sendo eles:</p>

                  <h3>1.	S??ncronos (Synchronous)</h3>
                  
                  <p>
                    Os aplicativos da web s??ncronos carregam recursos ??nica e sequencialmente, de modo que, quando um recurso ou componente superior na hierarquia falha ao carregar, aqueles abaixo dele n??o respondem.
                    As solicita????es feitas por voc?? operam de maneira s??ncrona com um protocolo multithread.
                    Nota: Um thread ?? um ??nico trabalhador de ponta a ponta ou canal que lida com solicita????es na programa????o.
                  </p>

                  <p>Cada um desses threads lida com solicita????es separadamente na programa????o s??ncrona. Portanto, cada thread tem seu tempo de execu????o e carrega completamente antes de executar o pr??ximo evento. Consequentemente, a execu????o do evento em um thread trava outras threads, bloqueando toda a interface do usu??rio no processo.</p>

                  <p>Portanto, as chamadas s??ncronas garantem que um cliente ou navegador obtenha uma resposta da primeira solicita????o antes de executar a pr??xima. Isso pode resultar em atrasos desnecess??rios e m?? experi??ncia do usu??rio.</p>


                  <h3>2.	Ass??ncronos (Asynchronous)</h3>

                  <p>Na programa????o ass??ncrona, os aplicativos atendem a solicita????es e respostas usando um protocolo de entrada e sa??da (I / O) sem bloqueio. Ao contr??rio da programa????o s??ncrona, um programa ass??ncrono n??o executa opera????es hierarquicamente. Assim, o programa n??o esperar?? pela execu????o de uma solicita????o antes de responder com outra.</p>
                  
                  <p>Em ess??ncia, ele executa solicita????es simultaneamente, mesmo se elas estiverem em fun????es diferentes. Como resultado, um aplicativo desenvolvido com programa????o ass??ncrona carrega todo o seu conte??do apenas uma vez.</p>

                  <p>Um ??nico thread lida com v??rias solicita????es em um loop de eventos. Portanto, a falha de uma solicita????o n??o afeta a outra.</p>

                  <p>Sabendo da diferen??a entre Asynchronous e Synchronous, e que o NodeJS ?? Single-thread, podemos dizer que, toda vez que o event-loop roda, o n??mero de itens faltantes para serem processados, podem continuar do mesmo jeito ou crescerem. O evento de loop checa o ??ltimo item que tem para fazer na lista de tarefas, e se n??o h?? mais nada o processo ?? encerrado.</p>

                  <p>Por??m, se cada tarefa na lista criar uma tarefa, a lista nunca alcan??ara a zero. Assim ?? poss??vel fazer com que o node rode definitivamente, ou infinitamente, o que faz o processo nunca chegar em um ponto que finaliza.</p>

                  <p>Muitos programas em Node como servidores ou trabalhos em segundo plano por exemplo s??o desenhados desse jeito. Para criar mais itens na lista de tarefas e assim a lista nunca chegar a zero para o servidor continuar rodando.</p>

                  <p>Existem tamb??m tarefas n??o bloqueantes (Non-blocking Tasks) os quais s??o processados na lista de tarefas do Node, e ele executa essas tarefas assim que poss??vel. Tarefas n??o bloqueantes n??o permite o Node fazer m??ltiplas coisas ao mesmo tempo, eles apenas permitem o Node agendar essas tarefas para depois, enquanto executa outras tarefas.</p>
              
                <p>Quando voc?? quer rodar uma aplica????o em node, voc?? n??o especifica todos os arquivos do projeto. Voc?? apenas espec??fica o arquivo de entrada. Por que o projeto pode conter mil arquivos em diferentes diret??rios etc. Ent??o n??s importamos um arquivo para outro e assim sucessivamente, at?? chegar no arquivo index (??ndice) da aplica????o, o qual ?? respons??vel por executar tudo. Essas importa????es fazemos atrav??s do module system, usando a sintaxe:</p>

                <p class="code">module.exports = {nome_da_variavel_ou_funcao}; </p>
                <p class="code" style="text-align: left;">const dado_importado = require(???nome_do_arquivo_que_esta_exportando???)</p>

                <p>Sistema de modulo do Node cria uma ??rvore de depend??ncia, o qual espec??fica para o node quais arquivos s??o necess??rios para rodar a aplica????o.</p>
                
                <p>Em resumo o Processador de Script do node faz o seguinte:</p>

                <ul>
                  <li>  1.	L?? o c??digo e as importa????es no arquivo de entrada que ?? especificado

                  <li>  2.	L?? em todos os arquivos que est??o sendo importados e exportados.

                  <li>  3.	Come??a a executar as tarefas s??ncronas desses arquivos.

                  <li>  4.	Come??a a processar a lista de tarefas criadas pela Stack do node. Ent??o o Event Loop fica verificando sempre se h?? ou n??o tarefa para ser executado. </li>
                </ul>

                <p>Para invocar o REPL, apenas digite ???node??? em seu terminal ap??s ter instalado na sua m??quina. Isso ir?? iniciar o REPL que ?? um ambiente de execu????o JavaScript interativo no pr??prio terminal. Voc?? pode escrever qualquer c??digo JavaScript que voc?? quiser, e ter ele executado.</p>

                <h3>Conven????es</h3>

                  <h4>Package.json</h4>

                  <p>Dentro do arquivo Package.json n??s temos uma estrutura JSON que cont??m algumas informa????es sobre o projeto como: ???name???, ???description???, ???version???, ???license???, ???main???, ???dependencies???, ???scripts???, ???devDependencies??? etc.</p>

                  <p>Quando alguma depend??ncia ?? instalada, n??s podemos requisitar o pacote passando o nome da depend??ncia instalada (biblioteca), ex:</p>

                  <p class="code">
                    $> npm i express <br>
                    <br>
                    // In index.js <br>
                    <br>
                    let express = require(???express???);
                  </p>

                  <h4>Testes e Execu????o de Tarefas</h4>

                  <p>Testes de scripts ?? comumente mantido no diret??rio chamado /test. E ?? acionado por um executor de tarefas como ???mocha??? ou ???jest???.</p>

                  <p>Arquivos comuns de testes incluem:</p>

                  <ul>
                    <li> .travis.yml
                    <li> .jshintrc
                  </ul>

                  <p>Executores de tarefas de prop??sitos gerais frequentemente controlam todo o processo da aplica????o. Grunt e Gulp s??o os mais populares pacotes.</p>

                  <h4>Git & GitHub</h4>

                  <p>S??o de longe as mais populares ferramentas de controle de versionamento. Voc?? ver?? frequentemente arquivos como .git e .gitignore em seus projetos node. O .git servir?? para manter a configura????o do reposit??rio git criado. Gitignore servir?? para dizer quais arquivos o git pode ignorar. Geralmente colocamos a node_modules dentro  do arquivo porque ?? ela que mantem o c??digo fonte de todas as bibliotecas que instalamos. ?? arvore de depend??ncia fica absurdamente grande, o que faz com que o Github n??o consiga tratar. Por tanto, quando queremos subir o arquivo, colocamos dentro do gitignore para ele ignorar a node_modules, que pode ser instalada apenas rodando ???npm install??? ou ???yarn??? dependendo de qual gerenciado de pacotes voc?? tiver instalado.</p> 

                  <h4>Coment??rios de c??digo</h4>

                  <p>?? uma conven????o comum usar coment??rios de c??digo sobre a fun????o. Digo isso pois o pr??prio node j?? vem com uma funcionalidade que, quando voc?? cria um coment??rio de v??rias linhas em cima de algum c??digo javascript como express??o ou fun????o, ao chamar a fun????o vai aparecer uma descri????o explicando o que a fun????o faz, a qual ?? o coment??rio que voc?? criou. Ent??o d?? curtos e bons coment??rios para seus c??digos.</p>


                  <h4>Estilos e Padr??es de Desenvolvimento</h4>

                  <p>Os padr??es de desenvolvimento nesse caso n??o seria apenas sobre clean Code, design Pattern, padr??es MVCs ou SOLID. Mas sim sobre como a comunidade node v?? a melhor forma de escrever e manter o c??digo em javascript. Esses estilos dizem respeito a sintaxe usada, como ponto e v??rgula, uso de Arrow Functions ou n??o etc. Esses estilos s??o mantidos em pacotes como eslint, quando voc?? o instala e usa ele, voc?? pode usar muitos padr??es. Um dos padr??es javascript est?? em um reposit??rio chamado Airbnb, e conforme voc?? ir programando, o pr??prio eslint vai dizer o que est?? certo ou errado e como corrigir.</p>

                <h3>NodeJS VS Browser</h3>

                <p>Como j?? sabemos o NodeJS ir?? implementar o motor de compila????o JavaScript que o Chrome utiliza, o V8. Sabendo disso, ?? poss??vel abrir o devtools do navegador em qualquer p??gina que voc?? quiser, clicando F12 ou com o bot??o direito no mouse e ???inspecionar???. Dentro do devtools, h?? uma aba chamada ???console???. Esse espa??o ?? como um CMD para javascript, voc?? consegue interagir com a DOM do HTML al??m de criar c??digo javascript, o qual permanece vivo durante a sess??o do navegador. Assim que a p??gina ?? recarregada o c??digo javascript que voc?? criou na sess??o anterior n??o existe mais. Algo que vale ressaltar ?? que n??o importa quais mudan??as voc?? fa??a no site, pelo devtools, o servidor n??o sofrer?? as altera????es, por tanto, tudo que voc?? faz acontece apenas para voc??.
                </p>

                <p>Mas ent??o, qual a diferen??a entre o JavaScript convencional do browser e no NodeJS?</p>

                <p>
                  Existem muitas diferen??as entre eles, mas a linguagem ?? 100% a mesma. O que vai ser diferente ?? apenas camadas de intera????o. Enquanto o browser vai disponibilizar objetos e m??todos para manipula????o dos elementos do website como a DOM, no Nodejs n??o existir?? DOM, j?? que ele trabalha no lado do servidor e em nossa m??quina est?? tendo uma intera????o com o File System.
                  Simplesmente pense que o JavaScript do Browser ?? usado especificamente no Front-End e tudo que est?? envolvido com o visual. O JavaScript do NodeJS ?? usado especificamente no Backend fazendo conex??o com Banco de Dados, construindo l??gica de neg??cio etc.
                </p>

                <p>Algo importante de saber ?? que o Node vai trabalhar como um ambiente ??nico (o servidor), enquanto o browser ser?? muitos ambientes.</p>

              <h2 id="NPM">NPM</h2>

              <p>NPM significa Node Package Manager. E com ele podemos basicamente insatalar c??digos de outras pessoas, criar nossas pr??prias bibliotecas al??m de gerenciar e rodar nossos scripts atrav??s de configura????es do Package.JSON. O Npm j?? vem dentro do Node  quando ele ?? instalado. Para usar digite apenas npm ???version para mostrar a vers??o do NPM. Caso aparece um valor do tipo: X.XX.XX, ?? a especifica????o da vers??o, e mostra que o npm est?? instalado.</p>

              <p>A primeira coisa que fazemos ao usar o npm ?? iniciar um projeto. Para isso fazemos o:</p>

              <p class="code">$> npm init ???y</p>

              <p>Esse comando nos permite iniciar um package.json no diret??rio /~ da aplica????o o qual vem com informa????es b??sicas pr?? configuradas como explicado anteriormente quando falamos de como funciona. </p>

              <p>Com npm conseguimos instalar, remover atualizar e rodar bibliotecas externas, desenvolvidas por outros desenvolvedores, e que geralmente usamos para automatizar tarefas e scripts repetitivos. Ao querer utilizar uma biblioteca como ReactJS por exemplo precisamos  instalar atrav??s do NPM ou Yarn, que ?? outro gerenciador de pacotes desenvolvidos pela Facebook</p>

              <p>npm ?? o gerenciador de pacotes para a plataforma JavaScript Node. Ele coloca os m??dulos no lugar para que o n?? possa encontr??-los e gerencia conflitos de depend??ncia de forma inteligente.</p>

              <p>?? extremamente configur??vel para suportar uma ampla variedade de casos de uso. Mais comumente, ?? usado para publicar, descobrir, instalar e desenvolver programas de n??.</p>

              <p>O npm est?? configurado para usar o registro p??blico da npm, Inc. em <a href="https://registry.npmjs.org" target="_blank">NPM</a> por padr??o. O uso do registro p??blico npm est?? sujeito aos termos de uso dispon??veis em <a href="https://www.npmjs.com/policies/terms." target="_blank">NPM - Politicas</a></p>

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