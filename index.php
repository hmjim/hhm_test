<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <script src="https://use.fontawesome.com/53f39c7df3.js"></script>
    <title>HoneyHunters</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row space40">
                <div class="col-md-4"><a href="/"><img class="img-responsive" src="/img/logo.png" alt=""></a></div>
            </div>
            <div class="row">
                <div class="pic text-center"><img src="/img/contact.png" alt=""></div>
                <form action="" method="POST" role="form">
                    <div class="form-group col-md-5">
                        <div class="form-group">
                            <label for="">Имя <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name_txt"> </div>
                        <div class="form-group">
                            <label for="">E-mail <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email_txt"> </div>
                    </div>
                    <div class="form-group col-md-6 col-md-offset-1">
                        <label for="">Комментарий <span class="text-danger">*</span></label>
                        <textarea rows="4" type="text" class="form-control" name="message_txt"></textarea>
                    </div>
                    <div class="form-group col-xs-12">
                        <button id="post" type="submit" class="btn btn-danger btn-lg pull-right"><big>Записать</big></button>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <main>
        <section class="form">
            <div class="container"> </div>
        </section>
        <section class="comments">
            <div class="container">
                <div class="items row">
                    <h1 class="text-center">Выводим комментарии</h1>
                    <?php
                    include_once("config.php");

                    $Result = mysql_query("SELECT id,name,email,message FROM comments");

                    while($row = mysql_fetch_array($Result))
                    {
                    echo '<div class="item col-xs-12 col-sm-6 col-md-4 col-lg-3 text-center"><div class="panel panel-custom" id="item_'.$row["id"].'">';
                    echo '<div class="panel-heading"><h3 class="panel-title">'.$row["name"].'</h3></div>';
                    echo '<div class="panel-body">';
                    echo '<a href="mailto:'.$row["email"].'">'.$row["email"].'</a>';
                    echo '<br><p>'.$row["message"].'</p>';
                    echo '</div></div></div>';
                    }

                    mysql_close($useDB);
                    ?> </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img class="img-responsive" src="/img/logo.png" alt=""></div>
                <div class="social col-md-2 col-md-offset-7">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a href="https://vk.com" target="_blank">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x" aria-hidden="true"></i>
                                    <i class="fa fa-vk fa-stack-1x" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="https://facebook.com" target="_blank">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x" aria-hidden="true"></i>
                                    <i class="fa fa-facebook fa-stack-1x" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/validate.min.js"></script>
</body>

</html>