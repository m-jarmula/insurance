<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <base href="/insurance/" />
        <link rel="stylesheet" type="text/css" href="public/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="public/assets/bootstrap/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="public/assets/css/style.css" />
        <script type="text/javascript" src="public/assets/js/jquery.mini.js"></script>        
        <script type="text/javascript" src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron vertical-center">   
            <div class="container">
                <div class="row-fluid">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <?php $this->fetch($route) ?>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>  
        </div>   
    </body>
</html>

