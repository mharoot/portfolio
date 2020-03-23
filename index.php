<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Filtrify">
        <meta name="keywords" content="javascript, jquery, lazy load, performance, plugin" />
        <meta name="author" content="Luís Almeida">
        <meta name="viewport" content="width=device-width">
        <title>Michael Harootoonyan | Portfolio</title>
        <script src="./Assets/js/jquery.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" href="./Assets/css/bootstrap.min.css">
        <script src="./Assets/js/bootstrap.min.js"></script>
        <script src="./Assets/js/modernizr.custom.js"></script>
        <link rel="stylesheet" type="text/css" href="./Assets/css/component.css">
        <link rel="stylesheet" type="text/css" href="./Assets/css/default.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>


    <body>
        <div class="container">
                <ul id="og-grid" class="og-grid">
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/anabarsegian-thumb.jpg">
                        <span class="overlay"><a href="https://www.anabarsegian.com/" target="_blank">LAW OFFICE OF ANA BARSEGIAN</a></span>
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/colepedroza-thumb.jpg">
                        <span class="overlay"><a href="https://colepedroza.com/" target="_blank">COLE PEDROZA LAW</a></span>
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/cwcalifornia-thumb.jpg">
                        <span class="overlay"><a href="https://www.cwcalifornia.com/" target="_blank">CW California</a></span>
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/gogreensolar-thumb.jpg">
                        <span class="overlay"><a href="http://hiregogreen.com/" target="_blank">GOGREEN SOLAR</a></span>
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/kristinmullertranscription-thumb.jpg">
                        <span class="overlay"><a href="https://kristinmullertranscription.com/" target="_blank">KRISTIN MULLER TRANSCRIPTION SERVICES</a></span>
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/roseviewproductions-portfoilo-thumb.jpg">
                        <span class="overlay"><a href="https://roseviewproductions.com/" target="_blank">ROSEVIEW PRODUCTIONS</a></span>
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/warehouse1production-thumb.jpg">
                        <span class="overlay"><p>WAREHOUSE 1 PRODUCTIONS</p><a href="https://warehouse1productions.com/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></span>
                    </li>
                </ul>
        </div>
    </body>


<script src="./Assets/js/grid.js"></script>
<script>
    $(function() {
        Grid.init();
    });
</script>
<script src="./Assets/js/LazyLoad.js"></script>
<script>
let images = document.querySelectorAll(".img-responsive");
new LazyLoad(images);
</script>