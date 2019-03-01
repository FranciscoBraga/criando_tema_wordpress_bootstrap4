<!DOCTYPE html>
<html <?php language_attributes()?>>
    <head>
   
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must;* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php wp_title('-',true,'right'); bloginfo();?></title>

     <!-- Bootstrap CSS -->
       <link rel="stylesheet" type="text/css" href="wp-content/themes/wpBootstrap/estilo/css/bootstrap.min.css">
   
    <!-- Font Awesome -->
        <link rel="stylesheet"  type="text/css" href="wp-content/themes/wpBootstrap/fontawesome/css/all.css">

        <!-- Custom styles for this template -->
        <style type="text/css">
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php //wp_head(); ?>
    </head>

    <body>
        <head>
            <nav class="navbar  navbar-expand-lg navbar-light bg-light"  style="margin-top: -50px" >
                    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav " >
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Arquivos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Serviço</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link " href="#">Contato</a>
                            </li>                                            
                     </ul>       
                    <ul class="navbar-nav " >
                            <li class="nav-item active">
                                <a class="nav-link" href="#">
                                    <i class ="fab fa-facebook-square fa-2x text-info" ></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fab fa-twitter-square fa-2x text-primary"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fab fa-youtube-square  fa-2x text-danger"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">                           
                                    <i class="fab fa-google-plus-square fa-2x text-primary"></i>
                                </a>
                            </li>                                              
                    </ul>             
                </div><!--fim div-->              
            </nav><!--fim nav-->
            
        <!-- Main jumbotron for a primary marketing message or call to action -->       
        </head>
        <section >
            <div class="jumbotron" style="border-bottom:2px solid red">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="brand align-self-center">
                            <h1 class="display-4"><a href="#">Trust</a></h1>
                            <p>Um portal comprometido com a verdade.</p>
                            </div>                      
                        </div>
                        <div class="col-md-6 ">
                            <div class="ml-auto mt-5">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="Digite...">
                                    <div class="input-group-append">
                                        <button class="btn btn-info">Buscar</button>
                                    </div>
                                </div>
                            </div>                      
                        </div>
                    </div> 
                    
                </div>
            </div>
        </section>
                               
            <nav class="navbar sticky-top navbar-expand-sm  bg-dark  " style="margin-top: -33px">
               
                <!--navegação-->
                <ul class="navbar-nav ml-5"><!--definindo a margem ml- esquerda-->
                    <li class="nav-item ml-5">
                        <a href="" class="nav-link ">Notícias</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a href="" class="nav-link ">Esporte</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a href="" class="nav-link">Tecnolgia</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a href="" class="nav-link">Entretenimento</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a href="" class="nav-link">Multimidias</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a href="" class="nav-link">Saúde</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a href="" class="nav-link">Política</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a href="" class="nav-link">Games</a>
                    </li>
                </ul>
            </nav>
        
        
        
 
    
            

                           
       
        

        


        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>

            <hr>
                  <!-- Example row of columns -->
                  <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>

            <hr>

                  <!-- Example row of columns -->
                  <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>

            <hr>

            <footer>
                <p>&copy; Company 2014</p>
            </footer>
        </div> <!-- /container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="wp-content/themes/wpBootstrap/estilo/js/bootstrap.min.js"></script>
    <?php //wp_footer(); ?>
    </body>
</html>
