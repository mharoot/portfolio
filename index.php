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
        <script src="./Assets/js/modernizr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./Assets/css/component.css">
        <link rel="stylesheet" type="text/css" href="./Assets/css/default.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
	</head>


    <body>
        <div class="container">
                <ul id="og-grid" class="og-grid">
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/anabarsegian-thumb.jpg">
                        <span class="overlay">
                            <p>LAW OFFICE OF ANA BARSEGIAN</p>
                            <a href="https://www.anabarsegian.com/" target="_blank"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
                            <i class="fa fa-picture-o fa-2x" aria-hidden="true" data-src="./Assets/images/anabarsegian.png"></i>
                        </span>
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/colepedroza-thumb.jpg">
                        <span class="overlay">
                            <p>COLE PEDROZA LAW</p>
                            <a href="https://colepedroza.com/" target="_blank"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
                            <i class="fa fa-picture-o fa-2x" aria-hidden="true" data-src="./Assets/images/colepedroza.jpg"></i>
                        </span>        
                   </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/cwcalifornia-thumb.jpg">
                        <span class="overlay">
                            <p>CW California</p>
                            <a href="https://www.cwcalifornia.com/" target="_blank"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
                            <i class="fa fa-picture-o fa-2x" aria-hidden="true" data-src="./Assets/images/cwcalifornia.jpg"></i>
                        </span>   
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/gogreensolar-thumb.jpg">
                        <span class="overlay">  
                            <p>GOGREEN SOLAR</p>
                            <a href="http://hiregogreen.com/" target="_blank"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
                            <i class="fa fa-picture-o fa-2x" aria-hidden="true" data-src="./Assets/images/gogreensolar.jpg"></i>
                        </span>   
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/kristinmullertranscription-thumb.jpg">
                        <span class="overlay">
                            <p>KRISTIN MULLER TRANSCRIPTION SERVICES</p>
                            <a href="https://kristinmullertranscription.com/" target="_blank"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
                            <i class="fa fa-picture-o fa-2x" aria-hidden="true" data-src="./Assets/images/kristinmullertranscription.jpg"></i>
                        </span>   
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/roseviewproductions-portfoilo-thumb.jpg">
                        <span class="overlay">
                            <p>ROSEVIEW PRODUCTIONS<</p>
                            <a href="https://roseviewproductions.com/" target="_blank"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
                            <i class="fa fa-picture-o fa-2x" aria-hidden="true" data-src="./Assets/images/roseviewproductions-portfolio-website.jpg"></i>
                        </span>                   
                    </li>
                    <li>
                        <img width="380"height="280" class="img-responsive" src="./Assets/images/loading.gif" data-src="./Assets/images/warehouse1production-thumb.jpg">
                        <span class="overlay">
                            <p>WAREHOUSE 1 PRODUCTIONS</p>
                            <a href="https://warehouse1productions.com/" target="_blank"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
                            <i class="fa fa-picture-o fa-2x" aria-hidden="true" data-src="./Assets/images/warehouse1production.jpg"></i>
                        </span>
                    </li>
                </ul>
        </div>
        <div id="big-image-preview" style="display:none;"><img src=""></img></div>
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
<script>
$(document).ready(function(){
    let src = "";
    let $body = $('body');
    let $bigImage = $('#big-image-preview');
    $('.fa-picture-o').on('click',function(e){
        src = this.getAttribute('data-src');
        // let img = document.createElement('img');
        // img.src = src;
        $bigImage.find('img')[0].src = src;
        $bigImage.show();
        $body.toggleClass('overflow');

    });
    $bigImage.on('click', function(e){
        $bigImage.hide();
        $body.toggleClass('overflow');
    });
    
});
</script>