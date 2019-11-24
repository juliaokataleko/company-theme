<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centro Boa Forma - O seu espaço de saúde</title>
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- MATERIALIZE CSS -->
    <link rel="stylesheet" href="css/materialize.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/all.css">
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- MENU MOBILE -->
        <ul class="sidenav" id="menu-mobile">
            <li><a class="hide-menu" href="#home">Home</a></li>
            <li><a class="hide-menu" href="#about">Sobre</a></li>
            <li><a class="hide-menu" href="#services">Serviços</a></li>
            <li><a class="hide-menu" href="#unities">Unidades</a></li>
            <li><a class="hide-menu" href="#contact">Contacto</a></li>
        </ul>

        <div class="navbar-fixed">
            <nav class="navbar z-depth-0">
                <div class="nav-wrapper container">
                    <h1 class="logo-text">Centro Boa Forma - O seu espaço de saúde</h1>
                    <a href="index.php"><img src="img/logo.png" alt="" class="logo_img" sizes="" srcset=""></a>

                    <ul class="right light hide-on-med-and-down">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#unities">Unidades</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>

                    <a href="#" style="" data-target="menu-mobile" class="sidenav-trigger button-collapse right hide-on-large-only">
                        <i class="material-icons">menu</i>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <!-- HOME -->
    <section class="home bloco scrollspy" id="home">
        <div class="row container banner">
            <div class="col s12 center">
                <h3 class="white-text">O melhor treinamento funcional da região</h3>
                <p class="white-text light">Um novo conceito de prevenção, promoção e reabilitação da saúde
                    para quem busca melhora do condicionamento e emagrecimento,
                    além de ser divertido e desafiador. Quer experimentar?
                </p>
                <div class="row botoes">
                    <a href="#about" class="btn btn-large primary-bg">Sobre nós</a>
                    <a href="#contact" class="btn btn-large white black-text">Mais informação</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT -->
    <section class="about bloco scrollspy" id="about">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="light title">Sobre Nós</h2>
            </div>

            <div class="col s12 l6">
                <p class="light">
                    O centro Boa Forma chegou a Itabuna e região trazendo
                    um novo conceito em prevenção, promoção e reabilitação da saúde. Localizado no
                    Centro da cidade, com fácil estacionamento, salas amplas e climatizadas, ambiente confortável
                    e seguro aos seus usuários. Suas instalações foram projectadas e equipadas
                    sob medida,
                    dentro dos padrões de acessibilidade, para acolher principalmente pessoas com limitações
                    funcionais. O centro dispõe de uma equipe profissional qualificada e com experiência
                    no mercado, prezando por tratamento individualizado e baseados em evidências científicas.
                </p>
            </div>

            <div class="col s12 l6">
                <div class="carousel carousel-slider">
                    <a href="#" class="carousel-item"><img src="img/banner-01.jpg" alt="Banner da instituição" sizes="" srcset=""></a>
                    <a href="#" class="carousel-item"><img src="img/banner-02.jpg" alt="" sizes="" srcset=""></a>
                    <a href="#" class="carousel-item"><img src="img/banner-02.jpg" alt="" sizes="" srcset=""></a>
                </div>
            </div>
        </div>

        <div class="row primary-bg mission-vision-value container">
            <div class="container">

                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">directions_run</i></span>
                    <h3 class="light">Missão</h3>
                    <p class="light">
                        Promover a saúde e bem estar dos clientes
                        com acções de prevenção, promoção erealibilitação, através de tratamentos
                        eficazes e humanizados em fisioterapia e suas vertentes
                    </p>
                </article>

                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">visibility</i></span>
                    <h3 class="light">Visão</h3>
                    <p class="light">
                        Tornar-se referência no cenário estadual, buscando a excelência
                        dos serviços prestados, além de promover
                        o desenvolvimento técnico-científico de sua equipa e da sociedade.
                    </p>
                </article>

                <article class="item col s12 m4 center">
                    <span class="icon"><i class="material-icons medium">grade</i></span>
                    <h3 class="light">Valores</h3>
                    <p class="light">
                        - Agir com ética frente aos clientes e colaboradores.</br>
                        - Tornar o ambiente de trabalho o mais familiar possível</br>
                        - Dar prioridade a qualidade e excelência do atendimento
                        valorizando e qualificando a equipa.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="services bloco scrollspy" id="services">
        <div class="col s12 center">
            <h2 class="light title white-text">Serviços</h2>
            <p class="light white-text">
                Suas instalações foram projectadas e equipadas sob medida, dentro dos
                padrões de acessibilidade, para acolher principalmente pessoas com limitações profissionais.
                O centro dispõe de uma equipe profissional qualificada e com experiência
                no mercado, prezando por tratamento individualizado e baseados em evidências científicas.
            </p>
        </div>

        <div class="row container">

            <!-- PILATES -->
            <article class="col s12 m6 l3 13">
                <div class="card">
                    <div class="card-image">
                        <img src="img/pilates.jpg" alt="Pilates" class="materialboxed">
                        <a href="#pilartes-modal" class="btn-floating halfway-fab 
                        waves-effect waves-light modal-trigger primary-bg">
                            <i class="material-icons">more_horiz</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Pilates</h3>
                        <p class="light black-text">
                            Pilates é um método de controle muscular desenvolvido
                            por Joseph Pilates...
                        </p>
                    </div>
                </div>
            </article>

            <!-- MODAL PILARTES -->
            <div class="modal" id="pilartes-modal">
                <div class="modal-content">
                    <h5 class="light">O que é Pilates</h5>
                    <p class="light black-text">
                        ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...
                    </p>
                    <h5>Quais os benefícios</h5>
                    <ul class="collection">
                        <li class="collection-item">Alongar, tonificar e definir a
                            musculatura sem exageros</li>
                        <li class="collection-item">Melhorar a postura</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdmoen.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn modal-action modal-close primary-bg">Sair</a>
                </div>
            </div>

            <!-- NUTRIÇÂO -->
            <article class="col s12 m6 l3 13">
                <div class="card">
                    <div class="card-image">
                        <img src="img/nutricao.jpg" alt="Nutrição" class="materialboxed">
                        <a href="#nutricao-modal" class="btn-floating modal-trigger halfway-fab waves-effect waves-light primary-bg">
                            <i class="material-icons">more_horiz</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Nutrição</h3>
                        <p class="light black-text">
                            Ele planeja programas de alimentação e Nutrição
                            em empresas, escolas...
                        </p>
                    </div>
                </div>
            </article>

            <!-- MODAL NUTRICAO -->
            <div class="modal" id="nutricao-modal">
                <div class="modal-content">
                    <h5 class="light">O que é Nutrição</h5>
                    <p class="light black-text">
                        ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...
                    </p>
                    <h5>Quais os benefícios da Nutrição</h5>
                    <ul class="collection">
                        <li class="collection-item">Alongar, tonificar e definir a
                            musculatura sem exageros</li>
                        <li class="collection-item">Melhorar a postura</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdmoen.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn modal-action modal-close primary-bg">Sair</a>
                </div>
            </div>

            <!-- FISIOTERAPIA -->
            <article class="col s12 m6 l3 13">
                <div class="card">
                    <div class="card-image">
                        <img src="img/fisioterapia.jpg" alt="Fisioterapia" class="materialboxed">
                        <a href="#fisioterapia-modal" class="btn-floating modal-trigger halfway-fab waves-effect waves-light primary-bg">
                            <i class="material-icons">more_horiz</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Fisioterapia</h3>
                        <p class="light black-text">
                            O fisioterapeuta trata e previne doenças
                            e lesões, empregando técnicas...
                        </p>
                    </div>
                </div>
            </article>

            <!-- MODAL FISIOTERAPIA -->
            <div class="modal" id="fisioterapia-modal">
                <div class="modal-content">
                    <h5 class="light">O que é Fisioterapia</h5>
                    <p class="light black-text">
                        ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...
                    </p>
                    <h5>Quais os benefícios da fisioterapia</h5>
                    <ul class="collection">
                        <li class="collection-item">Alongar, tonificar e definir a
                            musculatura sem exageros</li>
                        <li class="collection-item">Melhorar a postura</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdmoen.</li>
                        <li class="collection-item">Alongar, tonificar e definir a
                            musculatura sem exageros</li>
                        <li class="collection-item">Melhorar a postura</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdmoen.</li>
                        <li class="collection-item">Alongar, tonificar e definir a
                            musculatura sem exageros</li>
                        <li class="collection-item">Melhorar a postura</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdmoen.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn modal-action modal-close primary-bg">Sair</a>
                </div>
            </div>


            <!-- FUNCIONAL -->
            <article class="col s12 m6 l3 13">
                <div class="card">
                    <div class="card-image">
                        <img src="img/funcional.jpg" alt="Funcional" class="materialboxed">
                        <a href="#funcional-modal" class="btn-floating modal-trigger halfway-fab waves-effect waves-light primary-bg">
                            <i class="material-icons">more_horiz</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Funcional</h3>
                        <p class="light black-text">
                            O treinamento funcional é um método de trabalho ainda mais dinâmico...
                        </p>
                    </div>
                </div>
            </article>

            <!-- MODAL FUNCIONAL -->
            <div class="modal" id="funcional-modal">
                <div class="modal-content">
                    <h5 class="light">O que é Funcional</h5>
                    <p class="light black-text">
                        ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...ilates é um método de controle muscular desenvolvido
                        por Joseph Pilates...
                    </p>
                    <h5>Quais os benefícios da Funcional</h5>
                    <ul class="collection">
                        <li class="collection-item">Alongar, tonificar e definir a
                            musculatura sem exageros</li>
                        <li class="collection-item">Melhorar a postura</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdmoen.</li>
                        <li class="collection-item">Alongar, tonificar e definir a
                            musculatura sem exageros</li>
                        <li class="collection-item">Melhorar a postura</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdmoen.</li>
                        <li class="collection-item">Alongar, tonificar e definir a
                            musculatura sem exageros</li>
                        <li class="collection-item">Melhorar a postura</li>
                        <li class="collection-item">Tonificar a musculatura profunda do abdmoen.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn modal-action modal-close primary-bg">Sair</a>
                </div>
            </div>

            <!-- QUADRO DE HORÁRIOS -->
            <div class="row center">
                <a href="#quadro-de-horaio-modal" class="btn modal-trigger btn-large primary-bg btn-horario">
                    <i class="material-icons right">timer</i> Quadros de horários
                </a>
            </div>

            <!-- MODAL DO QUADRO DE HORARIO -->
            <div class="modal" id="quadro-de-horaio-modal">
                <div class="modal-content">
                    <h5 class="light">Quadro de Horário</h5>
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#table-pilates">Pilates</a></li>
                        <li class="tab col s3"><a href="#table-musculacao">Musculação</a></li>
                        <li class="tab col s3"><a href="#table-fitness">Fitness</a></li>
                        <li class="tab col s3"><a href="#table-artes-marciais">Artes Marciais</a></li>
                    </ul>

                    <!-- TABELA PILATES -->
                    <table class="striped responsive-table" style="width: 100%" id="table-pilates">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6:00 às 22:00</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>14:00 às 18:00</td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>16:00 às 20:00</td>
                                <td></td>
                                <td>Pilates</td>
                                <td>Pilates</td>
                                <td></td>
                                <td>Pilates</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- TABELA MUSCULACAO -->
                    <table class="striped responsive-table" id="table-musculacao">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>8:00 às 18:00</td>
                                <td>Musculação</td>
                                <td>Musculação</td>
                                <td></td>
                                <td>Musculação</td>
                                <td></td>
                                <td>Musculação</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8:00 às 18:00</td>
                                <td>Musculação</td>
                                <td>Musculação</td>
                                <td></td>
                                <td>Musculação</td>
                                <td></td>
                                <td>Musculação</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8:00 às 18:00</td>
                                <td></td>
                                <td>Musculação</td>
                                <td></td>
                                <td>Musculação</td>
                                <td></td>
                                <td>Musculação</td>
                                <td>Musculação</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- TABELA FITNESS -->
                    <table class="striped responsive-table" id="table-fitness">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>19:00 às 21:00</td>
                                <td>Fitness</td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8:00 às 18:00</td>
                                <td>Fitness</td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>14:00 às 18:00</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td></td>
                                <td>Fitness</td>
                                <td>Fitness</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- TABELA FITNESS -->
                    <table class="striped responsive-table" id="table-artes-marciais">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>19:00 às 21:00</td>
                                <td>Artes Marcias</td>
                                <td></td>
                                <td></td>
                                <td>Artes Marcias</td>
                                <td></td>
                                <td>Artes Marcias</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8:00 às 18:00</td>
                                <td>Artes Marcias</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Artes Marcias</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>14:00 às 18:00</td>
                                <td></td>
                                <td>Artes Marcias</td>
                                <td></td>
                                <td>Artes Marcias</td>
                                <td></td>
                                <td>Artes Marcias</td>
                                <td>Artes Marcias</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <a href="" class="btn modal-action modal-close primary-bg">Sair</a>
                </div>
            </div>

        </div>
    </section>

    <!-- UNITIES -->
    <section class="unities bloco scrollspy" id="unities">
        <div class="col s12 center">
            <h2 class="light title white-text">Unidades</h2>
            <p class="light white-text">
                Para oferecer serviços de acordo com a realidade e necessidade de cada região do Brasil
                , o centro boa forma possui unidades em quatro estados. Com actividades permanentes
                os espaços físicos busca, oferecer facilidade de acesso e atendimento de qaulidade.
            </p>
        </div>
        <div class="row container">

            <!-- BH -->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image card-image-horizontal">
                        <img src="img/bh.jpg" alt="Belo Horiznote">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">Belo Horizonte</h3>
                            <p class="light black-text">
                                <i class="material-icons left">phone</i> +244 944 335 233 <br>
                                <i class="material-icons left">email</i> nh@boaforma.com <br>
                                <i class="material-icons left">location_on</i> Av. Belo Horizonte, 123
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- SALVADOR -->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image card-image-horizontal">
                        <img src="img/salvador.jpg" alt="Salvador">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">Salvador</h3>
                            <p class="light black-text">
                                <i class="material-icons left">phone</i> +244 944 335 233 <br>
                                <i class="material-icons left">email</i> salvador@boaforma.com <br>
                                <i class="material-icons left">location_on</i> Av. Bahia, 123
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- SÃO PAULO -->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image card-image-horizontal">
                        <img src="img/sp.jpg" alt="São Paulo">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">São Paulo</h3>
                            <p class="light black-text">
                                <i class="material-icons left">phone</i> +244 944 335 233 <br>
                                <i class="material-icons left">email</i> sp@boaforma.com <br>
                                <i class="material-icons left">location_on</i> Av. Belo Horizonte, 123
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- RIO DE JANEIRO -->
            <article class="col s12 l6">
                <div class="card horizontal">
                    <div class="card-image card-image-horizontal">
                        <img src="img/rj.jpg" alt="Rio de Janeiro">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h3 class="card-title light">Rio de Janeiro</h3>
                            <p class="light black-text">
                                <i class="material-icons left">phone</i> +244 944 335 233 <br>
                                <i class="material-icons left">email</i> sp@boaforma.com <br>
                                <i class="material-icons left">location_on</i> Av. Rio de Janeiro, 123
                            </p>
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact bloco scrollspy" id="contact">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="title light">
                    Contacto
                </h2>
            </div>

            <div class="col s12 m6 l4 hide-on-med-only">
                <div class="map transparent">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3894.0027092317023!2d13.393074315298657!3d-12.582072755515766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1bafd1a2ec19f70f%3A0x8b90be9586fc0b01!2sBenguela!5e0!3m2!1spt-PT!2sao!4v1574534876413!5m2!1spt-PT!2sao" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                    </iframe>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="information white-text">
                    <h4> Redes Sociais </h4>
                    <p>
                        Fique por dentro das novidades, receba dicas, ou
                        simplesmente... Mostre ao mundo que você faz parte desse pr
                    </p>
                    <a href="#" class="btn-floating primary-bg"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn-floating primary-bg"><i class="fa fa-google"></i></a>
                    <a href="#" class="btn-floating primary-bg"><i class="fa fa-twitter"></i></a>

                    <h4>Endereço</h4>
                    <p class="light">
                        Rua Paraíso, 123 <br>
                        Centron, Itabuna - Ba
                    </p>

                    <h4>Contactos</h4>
                    <p class="light">
                        (244) 922 564 33 <br>
                        (244) 922 564 33 <br>
                        (244) 922 564 33
                    </p>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="form white black-text">
                    <h4>Fale connosco</h4>
                    <p class="light">
                        Dúvidas, críticas ou sugestões? Entre em contacto connosco,
                        pois seu feedback é muito importante para nós.
                    </p>
                    <form action="enviar-email.php" method="post" autocomplete="off">

                        <div class="input-field">
                            <input type="text" name="name" id="name">
                            <label for="name">Seu nome</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="email" id="email">
                            <label for="email">Email</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="subject" id="subject" class="validate">
                            <label for="subject">Assunto</label>
                        </div>

                        <div class="input-field">
                            <textarea class="materialize-textarea" name="message" id="message" class="validate"></textarea>
                            <label for="message">Mensagem</label>
                        </div>

                        <button class="btn primary-bg" type="submit"><i class="fa fa-paper-plane"></i></button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- DEPOIMENTS -->
    <section class="depoiments bloco primary-bg">
        <div class="row container">

            <div class="col s12 center">
                <h2 class="title white-text">Depoimentos</h2>
            </div>

            <div class="col s12 m4 center">
                <img src="img/depo1.jpg" alt="" class="circle responsive-img" alt="Depoimentos">
                <p class="light white-text">
                    "Conheci o treinamento funcional e a metodologia do Centro Boa Forma..."
                </p>
                <h4 class="light white-text">Filipe Sousa</h4>
                <p class="white-text light">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </p>
            </div>

            <div class="col s12 m4 center">
                <img src="img/depo2.jpg" alt="" class="circle responsive-img" alt="Depoimentos">
                <p class="light white-text">
                    "Conheci o treinamento funcional e a metodologia do Centro Boa Forma..."
                </p>
                <h4 class="light white-text">Filipe Sousa</h4>
                <p class="white-text light">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </p>
            </div>

            <div class="col s12 m4 center">
                <img src="img/depo3.jpg" alt="" class="circle responsive-img" alt="Depoimentos">
                <p class="light white-text">
                    "Conheci o treinamento funcional e a metodologia do Centro Boa Forma..."
                </p>
                <h4 class="light white-text">Filipe Sousa</h4>
                <p class="white-text light">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                </p>
            </div>

        </div>

    </section>

    <footer class="footer">
        <div class="row container center">
            <img src="img/logo.png" alt="" class="logo_img">
            <p class="light white-text">&copy; Centro Boa Forma 2019 - Todos direitos reservados</p>
        </div>
    </footer>

    <!-- Jquery -->
    <script src="js/jquery.js"></script>

    <!-- Materialize -->
    <script src="js/materialize.js"></script>

    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();

            // INTERNAL LINK
            $(".scrollspy").scrollSpy({
                scrollOffset: 0
            });

            // CAROUSEL
            $(".carousel.carousel-slider").carousel({
                fullWidth: true,
                indicators: true
            });

            // MODAL
            $(".modal").modal();

            // TABS
            $("ul.tabs").tabs();

            // HIDE MENU ONCLICK
            $(".hide-menu").click(function() {
                $(".sidenav").sidenav("close");
            });

            // AUTOPLAY
            function autoplay() {
                $(".carousel").carousel("next");
                setTimeout(autoplay, 4500);
            }

            autoplay();

            $(window).on("scroll", function() {
                if ($(window).scrollTop() > 100) {
                    $(".navbar").addClass("nav-color");
                } else {
                    $(".navbar").removeClass("nav-color");
                }
            });
        });
    </script>

    <?php
    if (isset($_SESSION['status'])) :
        if ($_SESSION['status'] == 1) :
            session_destroy();
            echo "<script>M.toast({html: '<span>Enviado com sucesso!</span>'});</script>";
        else :
            session_destroy();
            echo "<script>M.toast({html: '<span>Algo correu mal.!</span>'});</script>";
        endif;
    endif;
    ?>
</body>

</html>