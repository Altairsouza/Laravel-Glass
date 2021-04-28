@extends('layouts.main')

@section('title', 'Tudo Sobre Google Glass')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/welcome.css"/>
    <section id="corpo"> <!-- significa sessao vai ter uma divisao na pagina so pra ele -->
        <article id="noticia-principal"><!--  ta definindo o artigo, se por agora tiver outro artigo(outro assunto q nao seja o google gless)é so criar outro article  dentro do section-->
           <main>
               <div class="container-fluid">
                   <div class="row">
                     @if(session('msg'))
                         <p class="msg">{{session('msg')}}</p>
                     @endif
                   </div>
               </div>
           </main>

            <header id="cabecalho-artigo"><!-- segundo cabecalho obs: eu posso criar quantos eu quiser exemplo: cabecalho de sessao de artigo ou do proprio site -->
                <hgroup>

                    <h3>Tecnologia  Inovações</h3>    <!-- <p> (br) serve pra quebrar linha</p>-->
                    <h1>Saiba tudo sobre o &nbsp; Google Glass</h1> <!-- <p> &nbsp   serve para da espaco entre as frases quanto mais ultilizar mais serar separado</p>-->
                    <h2>por  altair capiroto</h2>
                    <h3 class="direita">Atualizado em 05/agosto/2020</h3>
                </hgroup>
            </header>

            <!--<pre> tudo q estiver entre (pre) serár  mostrado da forma original </p>-->
            <!-- <code> ele ta avisando q é um condigo em um linguagem de programacao </p>-->




            <h2 style="text-align:center">O que é</h2><!-- deixar o testo no centro </p>-->
            <p style="text-align: justify"> <span>O <b>Google Glass</b> é um <del>acessório</del> em forma de óculos que possibilita a interação dos usuários com diversos conteúdos em realidade aumentada. Também chamado de <a href="http://www.google.com.br"target="_blank">Project Glass</a>, o eletrônico é capaz de tirar fotos a partir de comandos de voz, enviar mensagens instantâneas e realizar vídeo&shy;conferências. Seu lançamento está previsto para 2014, e seu <span style="text-decoration:none">preço</span> deve ser de US$ 1,5 mil. Atualmente o <em>Google Glass</em> encontra-se em fase de testes e já possui um vídeo totalmente <span style="font-weight:900;">gravado</span> com o dispositivo. Além disso, a companhia de buscas registrou novas patentes anti-furto e de desbloqueio de tela para o acessório.</p>   <!-- <p> (&shy) serve para colocar um ifen(-) quando for separar as silabas</p>-->
            <figure class="fotos-legenda"> <!--<p> serve pra marca na internet q é uma imagem e fica mais facil de encontrar o seu site</p>-->
                <img src="/img/glass-quadro-homem-mulher.jpg"/>
                <figcaption> <!--<p>aqui vai entrar a legenda pra busca no google</p>-->
                    <h3>Google Glass</h3>
                    <p>Uma nova maneira de ver o mundo.</p>
                </figcaption>
            </figure>
            <h2>Data de lançamento</h2>
            <p>Não há uma data específica e oficial para o dispositivo ser lançado, ainda. Pode ser que ele esteja disponível em demonstrações a partir de 2013, mas seu lançamento para as lojas fica para, pelo menos, 2014.</p>

            <h2>Especificações Técnicas</h2>
            <table id="tabelaspec"><!-- criando tabela no html -->
                <caption>Tabela Técnica do Google Glass <span>agosto/2020</span></caption><!-- aqui é o titulo  e o span pra ajustar a data no canto do da tabela e termina os ajustes no css-->

                <tr><td class="colunaesquerda">Tela:</td><td class="colunadireita">Resolução equivalente a tela de 25"</td></tr>
                <tr><td rowspan="2" class="colunaesquerda">Camera</td><td class="colunadireita"> 5MP para fotos</td></tr><!-- rowspan ele esta dizendo q vai usar duas linha pq a camera tem duas informacoes -->
                <tr><td class="colunadireita">720p para vídeos</td></tr>
                <tr><td rowspan="2" class="colunaesquerda">Conectividade</td><td class="colunadireita"> Wi-Fi </td></tr>
                <tr><td class="colunadireita">Bluetooth</td></tr>
                <tr><td class="colunaesquerda">Memória Interna</td><td class="colunadireita"> 12GB</td></tr>
                <tr><td colspan="2" class="colunacentro">linha extra</td></tr><!-- aqui ele vai criar uma linha extra a divisao entre o tr e td nao vai ter mais -->
            </table>

            <h2 class="h2">Como funciona</h2>
            <p>De acordo com fontes próximas do Google, os óculos vão contar com uma pequena tela de LCD ou AMOLED na parte superior e em frente aos olhos do usuário. Com o uso de uma câmera e GPS, você pode se situar, assim como selecionar opções com o movimento da cabeça</p>

            <h2>O que você pode fazer com o Google Glasses</h2>
            O vídeo de divulgação do Google mostra que você pode se transformar em uma espécie de “super-<wbr/>humano”, já que o aparelho pode indicar a quantos metros você está de seu destino, se o metrô está aberto ou fechado, mostrar o clima, agenda e até mesmo permitir que você marque encontros apenas com comandos de voz.<br/>  <!-- <p> (wbr serve como quebra de palavra separacao de silabas</p>-->

            [AQUI ENTRA UM VÍDEO]
        </article>
    </section>
    <aside id="lateral"> <!-- ele vai criar uma sensao na lateral dividindo a pagina ao meio -->
        <h1>Outras Notícias</h1>
        <h2>Vídeo mais recente</h2>

        [AQUI ENTRA UM VÍDEO]

        <h2>Novidades no Glass</h2>
        <p>O Google enfim revelou as especificações completas do Google Glass, e com ele uma surpresa ainda inédita no mercado: a gigante das buscas usará um sistema de áudio baseado na transdução por condução. Através das hastes dos óculos, o som será transmitido para o ouvido do usuário por meio de microvibrações em determinados ossos de sua cabeça, sem usar nenhum tipo de alto-falante.</p>

        <p>Além da surpresa do áudio, a tela montada a frente do olho do usuário também chamou atenção. Serão 640 x 360 pixels de resolução que, em proporção, equivaleria a um monitor de 25 polegadas de alta definição colocado a 2,5 metros de distância do espectador.</p>
    </aside>
@endsection



