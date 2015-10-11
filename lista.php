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

        <div class="container">
            <div class="news paddingtop paddingbottom col-xs-12 col-sm-8">
                <h1><span>Reportagens</span></h1>
                <?php for($i = 1; $i < 11; $i++){ ?>
                    <article class="col-xs-12">
                        <div class="image col-xs-2">
                            <a href="#">
                                <img src="http://placehold.it/100x100" alt="Noticia" title="Noticia">
                                <p>3° Edição</p>
                            </a>
                        </div>
                        <div class="content col-xs-10">
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
                <div class="buttons col-xs-12">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-arrow-left"></i> Anterior</a>
                        </li>
                        <li>
                            <a href="#">Próximo <i class="fa fa-arrow-right"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="paddingtop-double paddingbottom mobile-nopaddingtop col-xs-12 col-sm-4">
                <div class="search hidden-xs">
                    <form method="post">
                        <input type="text" name="s" placeholder="Pesquisar por...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="facebook-box hidden-xs">
                    <div class="fb-page" data-href="https://www.facebook.com/gypanews" data-small-header="true" data-width="380px" data-height="245px" data-hide-cover="true" data-show-facepile="true" data-show-posts="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/gypanews">
                                <a href="https://www.facebook.com/gypanews">Conheça a página do Facebook da Gypa News</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="ads">
                    <ul>
                        <?php for($i = 1; $i < 5; $i++){ ?>
                            <li>
                                <div class="ad">
                                    <a href="#" target="_blank">
                                        <img src="http://placehold.it/320x100?text=Anuncio+<?php echo $i ?>" alt="Anuncie Aqui" title="Anuncie Aqui">
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="news hidden-xs">
                    <h1><span>Mais Lidas</span></h1>
                    <?php for($i = 1; $i < 5; $i++){ ?>
                        <article class="col-xs-12">
                            <div class="image col-xs-2">
                                <a href="#">
                                    <img src="http://placehold.it/100x100" alt="Noticia" title="Noticia">
                                </a>
                            </div>
                            <div class="content col-xs-10">
                                <div class="col-sm-6 hidden-xs">
                                    <p class="small">10/05/2015 - Por <a href="#">Ana Claudia</a></p>
                                </div>
                                <div class="col-xs-12">
                                    <a href="#">
                                        <p>Teste de Título</p>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                </div>
                <div class="categories hidden-xs">
                    <h1><span>Categorias</span></h1>
                    <ul>
                        <?php for($i = 1; $i < 9; $i++){ ?>
                            <li>
                                <a href="#">
                                    <p>Teste de Título</p>
                                </a>
                            </li>
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