@extends('layouts.main')

@section('title', 'Tudo Sobre Google Glass')
@section('content')
    <script language="javascript" src="/js/funcoes.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/specs.css"/>
    <linnk rel="stylesheet" href="/css/specs"></linnk>
    <section id="corpo-full">
        <header id="noticia-principal">
            <hgroup>
                <h3>Especificações</h3>
                <h1>Raio-X no Google Glass</h1>
                <h2> por Gustavo Guanabara</h2>
                <h3 class="direita">Atualizado em 01/Maio/2013</h3>
            </hgroup>
        </header>
        <p>Clique em qualquer área destacada da imagem para ter mais informações sobre os recursos do Google Glass. Qualquer ponto vermelho vai te levar a um lugar cheio de novas informações.</p>


        <section id="conteudo">
            <img class="mofador" src="/img/glass-esquema-marcado.jpg" usemap="#meumapa"/>
            <map name="meumapa"> <!-- to utilizando mapa de imagem e na imagem q eu quero coloco como se fosse o id dele pra ter a relacao #meumapa -->
                <area shape="rect" coords="272,258,179,204"href="/google#tela" target="janela"/><!-- shape é a forma q vai aparecer o item e o coods ta vendo a coodernada em um photoshop aonde realemente esta a marcacao em vermelho
        href vai pegar aonde está o conteudo q no caso é no google-glass e target vai pegar o id od iframe q é name=janela -->
                <area shape="circle" coords="175,259,142,230"href="/google#camera" target="janela"/>
                <area shape="poly" coords="27,147,83,211,82,251,26,173"href="/google#sensores"target="janela"/>
                <area shape="circle"coords="89,41,92,61,67,68,59,41"href="/google#bateria"target="janela"/>
            </map>
            <iframe  src="/google" name="janela" id="frame-spec"></iframe>

        </section>


    </section>
@endsection
