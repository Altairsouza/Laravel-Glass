<!DOCTYOE hmtl>
<html lang="pt-br"> <!--<p> quando for buscar o seu site no google ele altomaticamente vai saber q é do brasil</p>-->

<head>
    <meta charset="UTF-8"/>  <!--<p> utf-8 serve pra poder usar asentuação nas palavras</p>-->
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="/css/form.css" />
    <script language="javascript" src="/js/funcoes.js"></script>


<body style="background-color: -moz-buttonhoverface"><!-- <p> mudando a cor do fundo da pagina em body=corpo </p> -->
<div id="interface">
    <header id="cabecalho">
        <hgroup ><!-- <p> ele incicando o inicio e fim do cabecalho </p> -->
            <hgroup> <!-- <p>ele esta marcando um grupo de titulos html</p>-->
                <h1>Google Glass</h1>
                <h2>A revolução do Google está chegando</h2>
            </hgroup>
            <img id="icone" src="/img/glass-oculos-preto-peq.png.png"/> <!-- <p> src= origem do destino</p>-->
            <nav id="menu"> <!-- <p> quando for criar menu por exemplo. modo facil de acessar outro conteudo dentro da pagina</p> -->
                <h1> Menu Principal</h1>
                <ul type="disc"> <!--<p>type=(algarimos romanos letras e numeors) start=""( de onde vai comecar e so recebe numero ex: 3==c) </p>-->
                    <li onmouseover="mudaFoto('/img/home.png')" onmouseout="mudaFoto('/img/glass-oculos-preto-peq.png.png')"><a href="/">home</a></li>
                    <li onmouseover="mudaFoto('/img/especificacoes.png')" onmouseout="mudaFoto('/img/glass-oculos-preto-peq.png.png')"><a href="/especificacoes">Especificações</a> </li>
                    <li onmouseover="mudaFoto('/img/fotos.png')" onmouseout="mudaFoto('/img/glass-oculos-preto-peq.png.png')"><a href="/fotos">fotos</a></li>
                    <li onmouseover="mudaFoto('/img/multimidia.png')" onmouseout="mudaFoto('/img/glass-oculos-preto-peq.png.png')"><a href="/multimidia">multimidia</a></li>
                    <li onmouseover="mudaFoto('/img/contato.png')" onmouseout="mudaFoto('/img/glass-oculos-preto-peq.png.png')"><a href="/faleConosco">fale conosco</a></li>
                    
                    
                    @auth
                    <li onmouseover="mudaFoto('/img/lista.jpg')" onmouseout="mudaFoto('/img/glass-oculos-preto-peq.png.png')"><a href="/dashboard">Infomarções dos Contatos</a></li>
                    
                    <li class="sair">
                  
                    <form action="/logout" method="POST">
                   @csrf
                   <a href="/logout"
                   class="nav-link"
                   onclick="event.preventDefault();
                   this.closest('form').submit();">
                        Sair
                        </a>
                    </form>
                    </li>
                    @endauth
                    
                    @guest
                    <li onmouseover="mudaFoto('/img/entrar.jpg')" onmouseout="mudaFoto('/img/glass-oculos-preto-peq.png.pgn')"><a href="/login">Entrar</a></li>
                    <li onmouseover="mudaFoto('/img/cadastrar.jpg')" onmouseout="mudaFoto('/img/glass-oculos-preto-peq.png.pgn')"><a href="/register">Cadastrar</a></li>
                    @endguest
                
                </ul> <!--<p>ol== lista ordenada aonde aparece a seguencia letra ou numero ------- ul== lista nao ordernada aonde aparece so os pontos de marca cao</p>-->
            </nav>
        </hgroup>
    </header>
    </head>

    @yield('content')

    <footer id="rodape"> <!-- aqui vai ser criado o rodape -->
        <p>Copyright&copy; 2021 - by altair <br/>
            <a href="http://www.faceook.com.br"target="_blank"> Facebook</a> | <a href="http://www.twitter.com"target="_blank">  Twitter</a></p>
    </footer>
</div>
</body>
</html>



