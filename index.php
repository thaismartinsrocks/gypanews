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
            </div>
        </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/main.js"></script>
</body>
</html>