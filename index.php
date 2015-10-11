<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="pt" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="pt" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="pt" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>GypaNews</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="bower_components/fontawesome/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="bower_components/lightbox2/dist/css/lightbox.css" rel='stylesheet' type='text/css'>

    <link href="style.css" rel='stylesheet' type='text/css'>
    <link href="css/blog.css" rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=522695374411593";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!--[if lt IE 7]>
    <p>Você está usando um navegador <strong>desatualizado</strong>. Por favor, <a href="http://browsehappy.com/">atualize-o</a> para ter uma melhor experiência.</p>
    <![endif]-->

    <div class="container-fluid">
        <?php include('header.php'); ?>

        <div class="highlights col-xs-12">
            <div class="container">
                <div class="slide col-xs-12 col-sm-8">
                    <ul>
                        <?php for($i = 1; $i < 4; $i++){ ?>
                            <li>
                                <a href="#">
                                    <img src="http://placehold.it/700x320" alt="Destaque" title="Destaque">
                                    <div class="details">
                                        <div class="edition"><?php echo $i; ?>ª Edição</div>
                                        <h1>Lorem ipsum dolor sit amet no his propriae reprimiq</h1>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="buttons">
                        <div class="prev"></div>
                        <div class="next"></div>
                    </div>
                </div>
                <div class="search col-xs-12 col-sm-4">
                    <form method="post">
                        <input type="text" name="s" placeholder="Pesquisar por...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="facebook-box col-xs-12 col-sm-4">
                    <div class="fb-page" data-href="https://www.facebook.com/gypanews" data-small-header="true" data-width="380px" data-height="245px" data-hide-cover="true" data-show-facepile="true" data-show-posts="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/gypanews">
                                <a href="https://www.facebook.com/gypanews">Conheça a página do Facebook da Gypa News</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news col-xs-12">

            <div class="container">
                <section class="nopadding-mobile col-xs-12 col-sm-8">
                    <h1><span>Reportagens</span></h1>

                    <article class="first col-xs-12 col-sm-6">
                        <div class="image col-xs-12">
                            <a href="#">
                                <img src="http://placehold.it/350x230" alt="Noticia" title="Noticia">
                                <p>3° Edição</p>
                            </a>
                        </div>

                        <div class="content col-xs-6">
                            <p class="small">10/05/2015 - Por <a href="#">Ana Claudia</a></p>
                        </div>
                        <div class="content col-xs-6">
                            <p class="small pull-right"><a href="#"><i class="fa fa-comments-o"></i> 1 comentário</a></p>
                        </div>

                        <div class="content col-xs-12">
                            <a href="#">
                                <h2>Teste de Título</h2>
                                <p>Lorem ipsum dolor sit amet, ius semper quaeque an. Eam te meis elitr, quis reprimique omittantur has cu, everti sapientem et vis.</p>
                            </a>
                        </div>
                    </article>

                    <?php for($i = 1; $i < 4; $i++){ ?>
                        <article class="col-xs-12 col-sm-6">
                            <div class="image col-xs-4">
                                <a href="#">
                                    <img src="http://placehold.it/100x100" alt="Noticia" title="Noticia">
                                    <p>3° Edição</p>
                                </a>
                            </div>
                            <div class="content col-xs-8">
                                <div class="col-sm-6 hidden-xs">
                                    <p class="small">10/05/2015 - Por <a href="#">Ana Claudia</a></p>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <p class="small pull-right"><a href="#"><i class="fa fa-comments-o"></i> 1 comentário</a></p>
                                </div>
                                <div class="col-xs-12">
                                    <a href="#">
                                        <h2>Teste de Título</h2>
                                        <p>Lorem ipsum dolor sit amet, ius semper quaeque an. Eam te meis elitr... </p>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                </section>

                <div class="ads paddingtop col-xs-12 col-sm-4">
                    <ul>
                        <?php for($i = 1; $i < 5; $i++){ ?>
                            <li>
                                <div class="ad col-xs-12 col-sm-12">
                                    <a href="#" target="_blank">
                                        <img src="http://placehold.it/320x100?text=Anuncio+<?php echo $i ?>" alt="Anuncie Aqui" title="Anuncie Aqui">
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="container">
                <div class="ads">
                    <ul>
                        <?php for($i = 1; $i < 4; $i++){ ?>
                            <li>
                                <div class="ad col-xs-12 col-sm-4">
                                    <a href="#" target="_blank">
                                        <img src="http://placehold.it/320x100?text=Anuncio+<?php echo $i ?>" alt="Anuncie Aqui" title="Anuncie Aqui">
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="container">
                <div class="ads">
                    <ul>
                        <?php for($i = 1; $i < 3; $i++){ ?>
                            <li>
                                <div class="ad ad-border col-xs-12 col-sm-4">
                                    <a href="#" target="_blank">
                                        <img src="http://placehold.it/320x200?text=Anuncio+<?php echo $i ?>" alt="Anuncie Aqui" title="Anuncie Aqui">
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="interviews col-xs-12 col-sm-4">
                    <h1><span>Entrevistas</span></h1>
                    <?php for($i = 1; $i < 3; $i++){ ?>
                        <article class="row">
                            <div class="col-xs-4">
                                <img src="http://placehold.it/100x100" alt="Entrevistado" title="Entrevistado">
                            </div>
                            <div class="col-xs-8">
                                <h2>Nome do entrevistado</h2>
                                <p>Lorem ipsum dolor sit amet, ius semper quaeque an. Eam te meis elitr...</p>
                            </div>
                        </article>
                    <?php } ?>
                </div>

            </div>
        </div>
        <?php include "footer.php"; ?>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/main.js"></script>
</body>
</html>