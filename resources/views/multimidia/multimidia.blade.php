@extends('layouts.main')

@section('title', 'Tudo Sobre Google Glass')
@section('content')


    <link rel="stylesheet" type="text/css" href="/css/media.css"/>

    <section id="corpo-full">
        <article id="noticia-principal">
            <header>
                <hgroup>
                    <h3>Glass > Multimidia</h3>
                    <h1>Sons e Videos</h1>
                    <h2>por Altair Capiroto</h2>
                    <h3 class="direita">Atualizado em 21/agosto/2020</h3>
                </hgroup>
            </header>
            <div id="tv-radio">



                <!-- colocando video do youtube
                                          <iframe width="560" height="315" src="https://www.youtube.com/embed/4EvNxWhskf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>





                                        -->

                <audio id="musica" controls="controls"><!-- esse controls q vai fazer aparecer o audio pra reproduzir -->
                    <source src="/media/2009-lovers-carvings-bibio.mp3" type="audio/mpeg"/> <!-- soucer signifia origem -->
                    <source src="/media/2009-lovers-carvings-bibio.m4a" type="audio/x-aac"/> <!-- compatibilidade com outros navagadores aqui por exemplo é safari (so n coverti) -->
                    <source src="/media/2009-lovers-carvings-bibio.ogg" type="audio/ogg"/><!-- outra conversao -->
                    desculpe, não foi possível carregar o áudio.<br/> <!-- tratamento de erro -->
                </audio>




                <video id="video" controls="controls" poster="_imagens/video-mini03.jpg"> <!-- aqui do msm jeito colocando todos os formatos para funcionar em todos os navegadores e poster serve pra deixar uma imagem congelada no inicio do video(como fazer é so tirar um print da parte do video) -->
                    <source src="/media/getting-started.mp4" type="video/mp4"/>
                    <source src="/media/getting-started.webn" type="video/webm"/>
                    <source src="/media/getting-started.ogv" type="video/ogg"/>
                    desculpe, não foi possível carregar o vídeo.<!-- tratamento de erro -->
                </video >


            </div>
        </article>
    </section>


@endsection
