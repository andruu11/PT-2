<?php
session_start();
require_once("../../default/default_tutor/main_tutor.php");
require_once("../../default/default_tutor/header_tutor.php");
require_once("../../default/default_tutor/footer_tutor.php");
require_once("../../default/default_tutor/sidebar_tutor.php");
?>


    <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================--> 

                    <!-- Start top-post Area -->
                    <style type="text/css">/*HYPER LINK*/
                    a:hover{
                        
                    }
                    a, a:focus , a:hover{ 
                      text-decoration: none;
                      color: inherit;
                    }
                     a:hover, .btn{
                        outline:none!important;
                    }na

                    /*ROUNDED CORNER*/
                    *{
                      -webkit-border-radius: 0 !important;
                         -moz-border-radius: 0 !important;
                              border-radius: 0 !important;
                    }
                    /*CATEGORIES BADGE*/
                    .badge {
                        font-weight: 600;
                        font-size: 13px;
                        color: white;
                        background-color: #289dcc;
                    }
                    /*FEATURED*/
                    .mg-2, .mg-4{
                        margin-left:-20px;
                    }
                    .linkfeat{
                        background: rgba(76,76,76,0);
                        background: -moz-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
                        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(76,76,76,0)), color-stop(49%, rgba(48,48,48,0)), color-stop(100%, rgba(19,19,19,1)));
                        background: -webkit-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
                        background: -o-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
                        background: -ms-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
                        background: linear-gradient(to bottom, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
                        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
                    }
                    </style>

                    <script>
                    //FEATURED HOVER
                    $(document).ready(function(){
                          $(".linkfeat").hover(
                            function () {
                                $(".textfeat").show(500);
                            },
                            function () {
                                $(".textfeat").hide(500);
                            }
                        );
                    });
                    </script>
                    

                    <div class="container">
                    <h3 class="text-center">Ultimas Noticias <small>NewsFed</small></h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard">
                           <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card bg-dark text-white">
                                        <img class="card-img img-fluid" src="../../assets/hrefnoticias/not1.jpg" alt="">
                                            <div class="card-img-overlay d-flex linkfeat">
                                            <a href="https://sepeap.org/nuevos-avances-en-el-diagnostico-de-trastornos-del-espectro-autista/" class="align-self-end">
                                                <p><span class="badge">Medicina</span> 21 junio, 2018</p> 
                                                <h4 class="card-title">Nuevos avances en el diagnóstico de trastornos del espectro autista</h4>
                                                <p class="textfeat" style="display: none;">El trastorno del espectro autista (TEA) es uno de los trastornos del neurodesarrollo más comunes en la infancia. Las estimaciones recientes de prevalencia son entre 1-1.5%.
Este artículo es una revisión de los principales avances y problemas prácticos relacionados con la evaluación del TEA. [...]</p>
                                            </a>
                                            </div>
                                    </div>
                                </div>
                            <div class="carousel-item">
                            <div class="card bg-dark text-white">
                                <img class="card-img img-fluid" src="../../assets/hrefnoticias/not2.jpg" alt="">
                                    <div class="card-img-overlay d-flex linkfeat">
                                        <a href="https://cienciatv.com/2017/09/neurociencia-y-el-autismo/" class="align-self-end">
                                        <p><span class="badge">Ciencia</span> 7 febrero, 2016</p>
                                        <h4 class="card-title">NEUROCIENCIA Y EL AUTISMO</h4>
                                        <p class="textfeat" style="display: none;">Seguramente leyeron la noticia de La celebración de unas madres por el cambio de clase de un compañero de sus hijos que sufre el síndrome de Asperger, un desastre para el comportamiento humano, sería la descripción que yo le daría a dicha celebración. 
Pero mi opinión no es el punto, el punto es, que volví a entender que hay mucha gente desinformada respecto al autismo, qué es y qué no es.  </p>
                                        </a>
                                    </div>
                            </div>
                            </div>
                            <div class="carousel-item">           <div class="card bg-dark text-white">
                                    <img class="card-img img-fluid" src="../../assets/hrefnoticias/not3.jpg" alt="">
                                    <div class="card-img-overlay d-flex linkfeat">
                                      <a href="http://www.med.ufro.cl/index.php/archivos/noticias/1976-con-gran-exito-se-realizo-la-primera-jornada-sobre-trastorno-del-espectro-autista-en-el-ciclo-vital" class="align-self-end">
                                        <p><span class="badge">Social</span> 10 mayo, 2018</p>
                                        <h4 class="card-title">Se realizó la primera jornada sobre Trastorno del Espectro Autista en el Ciclo Vital</h4>
                                        <p class="textfeat" style="display: none;">Casi 600 personas se dieron cita en esta primera jornada que llevo como título el “TEA no es solo cosa de niños”.</p>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                            <div class="carousel-item">           <div class="card bg-dark text-white">
                                    <img class="card-img img-fluid" src="../../assets/hrefnoticias/not4.jpg" alt="">
                                    <div class="card-img-overlay d-flex linkfeat">
                                      <a href="https://infotiti.com/2017/11/gaba-en-el-trastorno-del-espectro-autista/" class="align-self-end">
                                        <p><span class="badge">Biología</span> 15 noviembre, 2017</p>
                                        <h4 class="card-title">Identifican el papel del neurotransmisor GABA en el trastorno del espectro autista</h4>
                                        <p class="textfeat" style="display: none;">Un estudio reciente encontró una relación entre el neurotransmisor inhibidor más abundante en el sistema nervioso central y el origen del autismo.</p>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                            <div class="carousel-item">           <div class="card bg-dark text-white">
                                    <img class="card-img img-fluid" src="../../assets/hrefnoticias/not5.jpg" alt="">
                                    <div class="card-img-overlay d-flex linkfeat">
                                      <a href="https://www.irbbarcelona.org/es/news/descubren-una-proteina-clave-en-el-desarrollo-del-autismo" class="align-self-end">
                                        <p><span class="badge">Bioquímica</span> 16 agosto, 2018</p>
                                        <h4 class="card-title">Descubren una proteína clave en el desarrollo del autismo</h4>
                                        <p class="textfeat" style="display: none;">
La proteína CPEB4, que coordina la expresión de cientos de genes necesarios para la actividad neuronal, está alterada en el cerebro de los pacientes con autismo</p>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                            <div class="carousel-item">           <div class="card bg-dark text-white">
                                    <img class="card-img img-fluid" src="../../assets/hrefnoticias/not6.jpg" alt="">
                                    <div class="card-img-overlay d-flex linkfeat">
                                      <a href="https://www.cochrane.org/es/CD004381/musicoterapia-para-pacientes-con-trastorno-del-espectro-autista" class="align-self-end">
                                        <p><span class="badge">Música</span> 17 junio, 2014</p>
                                        <h4 class="card-title">Musicoterapia para pacientes con trastorno del espectro autista</h4>
                                        <p class="textfeat" style="display: none;">Se examinaron las pruebas acerca del efecto de la musicoterapia en los pacientes con trastorno del espectro autista (TEA). Se comparó la musicoterapia o la musicoterapia además de atención estándar con ninguna terapia, terapia similar sin música (terapia "placebo") o atención estándar.</p>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                    </div>
                          </div>
                        </div>
                        <div class="col-6 py-0 px-1 d-none d-lg-block">
                            <div class="row">
                                <div class="col-6 pb-2 mg-1 ">
                                    <div class="card bg-dark text-white">
                                    <img class="card-img img-fluid" src="../../assets/hrefnoticias/not4.jpg" alt="">
                                    <div class="card-img-overlay d-flex">
                                      <a href="https://infotiti.com/2017/11/gaba-en-el-trastorno-del-espectro-autista/" class="align-self-end">
                                        <p><span class="badge">Biología</span> 15 noviembre, 2017</p>
                                        <h6 class="card-title">Identifican el papel del neurotransmisor GABA en el trastorno del espectro autista</h6>
                                      </a>
                                    </div>
                                    </div>
                                </div>
                                            <div class="col-6 pb-2 mg-2 ">
                                    <div class="card bg-dark text-white">
                                    <img class="card-img img-fluid" src="../../assets/hrefnoticias/not6.jpg" alt="">
                                    <div class="card-img-overlay d-flex">
                                      <a href="https://www.cochrane.org/es/CD004381/musicoterapia-para-pacientes-con-trastorno-del-espectro-autista" class="align-self-end">
                                        <p><span class="badge">Música</span> 17 junio, 2014</p>
                                        <h6 class="card-title">Musicoterapia para pacientes con trastorno del espectro autista</h6>
                                      </a>
                                    </div>
                                    </div>
                                </div>
                                            <div class="col-6 pb-2 mg-3 ">
                                    <div class="card bg-dark text-white">
                                    <img class="card-img img-fluid" src="../../assets/hrefnoticias/not3.jpg" alt="">
                                    <div class="card-img-overlay d-flex">
                                      <a href="http://www.med.ufro.cl/index.php/archivos/noticias/1976-con-gran-exito-se-realizo-la-primera-jornada-sobre-trastorno-del-espectro-autista-en-el-ciclo-vital" class="align-self-end">
                                        <p><span class="badge">Social</span> 10 mayo, 2018</p>
                                        <h6 class="card-title">Se realizó la primera jornada sobre Trastorno del Espectro Autista en el Ciclo Vital</h6>
                                      </a>
                                    </div>
                                    </div>
                                </div>
                                            <div class="col-6 pb-2 mg-4 ">
                                    <div class="card bg-dark text-white">
                                    <img class="card-img img-fluid" src="../../assets/hrefnoticias/not2.jpg" alt="">
                                    <div class="card-img-overlay d-flex">
                                      <a href="https://cienciatv.com/2017/09/neurociencia-y-el-autismo/" class="align-self-end">
                                        <p><span class="badge">Ciencia</span> 7 febrero, 2016</p> 
                                        <h6 class="card-title">NEUROCIENCIA Y EL AUTISMO</h6>
                                      </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<hr>
                        <div class="form-control">
                            <div class="widget-box">
                              <div class="widget-title"> <span class="icon"> <i class="icon-hand-right"></i> </span>
                                <h5>Notificaciones</h5>
                              </div>
                                <div class="widget-content">
                                    
                                    <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                                      <h4 class="alert-heading">Bienvenido!</h4>
                                      Gracias por apoyar esta iniciativa y formar parte de de esta comunidad. </div>

                                    <div class="alert alert-info alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                                      <h4 class="alert-heading">Info!</h4>
                                      En esta sección podrás encontrar las ultimas noticias además de notificaciones importantes acerca del sistema. </div>

                                    <div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                                      <h4 class="alert-heading">Pronto!</h4>
                                      Estamos trabajando para brindar un mejor servicio! por favor no te desesperes, que las cosas buenas llegan a quien espera! </div>
                                    <div class="alert">
                                      <button class="close" data-dismiss="alert">×</button>
                                      <strong>Dudas?</strong> Si tienes preguntas por favor espera a finalizar la presentación. </div>
                                      <br><br><br>
                                    <!--<div class="alert alert-success">
                                      <button class="close" data-dismiss="alert">×</button>
                                      <strong>Success!</strong> Libero, a pharetra augue. Praesent commodo</div>
                                    <div class="alert alert-info">
                                      <button class="close" data-dismiss="alert">×</button>
                                      <strong>Info!</strong> you're not looking too good. </div>
                                    <div class="alert alert-error">
                                      <button class="close" data-dismiss="alert">×</button>
                                      <strong>Error!</strong> Nulla vitae elit libero, a pharetra augue. Praesent commodo </div>-->
                                </div>
                            </div>
                        </div>
                <!--==================================================================================-->
                <!--*********************************   PAGE AREA   **********************************-->
                <!--==================================================================================-->  

   <?php 
    require_once("../../default/sidebarend.php");
    ?>