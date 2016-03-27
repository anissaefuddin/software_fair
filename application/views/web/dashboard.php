<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Xeon | OnePage Responsive Theme</title>
    <link href="<?php base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php base_url();?>assets/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php base_url();?>assets/js/html5shiv.js"></script>
    <script src="<?php base_url();?>assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="#apps">Apps</a></li>
                        <li><a href="#comment">Comment</a></li>
                        <li><a href="#vote">Vote</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Free Onepage Theme</h1>
                        <p class="lead">Xeon is the best free onepage responsive theme available arround the globe<br>Download it right now for free</p>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>ShapeBootstrap.net</h1>
                        <p class="lead">Download free but 100% premium quaility twitter Bootstrap based WordPress and HTML themes <br>from shapebootstrap.net</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

    
    <section id="apps">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>Software Apps</h2>
                    <p class="lead">Pameran yang digelar di Gedung H UDINUS Semarang menampilkan berbagai aplikasi karya mahasiswa Teknik Informatika, yang meliputi:</p>
                </div><!--/.center-->
                <ul class="portfolio-filter">
                    <li><a class="btn btn-primary active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".webapps">Weeb Apps</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".mobile">Mobile Apps</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".desktop">Desktop</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".game">Game</a></li>
                </ul><!--/#portfolio-filter-->
                <ul class="portfolio-items col-4">
                    <li class="portfolio-item apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php base_url();?>assets/images/portfolio/thumb/item1.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php base_url();?>assets/images/portfolio/full/item1.jpg"><i class="icon-eye-open"></i></a>             
                                </div>
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item mobile">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php base_url();?>assets/images/portfolio/thumb/item2.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php base_url();?>assets/images/portfolio/full/item2.jpg"><i class="icon-eye-open"></i></a>  
                                </div>
                            </div> 
                            <h5>Lorem ipsum dolor sit amet</h5>         
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item mobile">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php base_url();?>assets/images/portfolio/thumb/item3.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php base_url();?>assets/images/portfolio/full/item3.jpg"><i class="icon-eye-open"></i></a>        
                                </div> 
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>          
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item webapps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php base_url();?>assets/images/portfolio/thumb/item4.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php base_url();?>assets/images/portfolio/full/item4.jpg"><i class="icon-eye-open"></i></a>          
                                </div>   
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>        
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item desktop">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php base_url();?>assets/images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php base_url();?>assets/images/portfolio/full/item5.jpg"><i class="icon-eye-open"></i></a>          
                                </div>  
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>  
                        </div>       
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item game">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php base_url();?>assets/images/portfolio/thumb/item6.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php base_url();?>assets/images/portfolio/full/item6.jpg"><i class="icon-eye-open"></i></a>           
                                </div>  
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>         
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item game">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php base_url();?>assets/images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php base_url();?>assets/images/portfolio/full/item5.jpg"><i class="icon-eye-open"></i></a>          
                                </div>  
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>  
                        </div>       
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item game">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?php base_url();?>assets/images/portfolio/thumb/item6.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php base_url();?>assets/images/portfolio/full/item6.jpg"><i class="icon-eye-open"></i></a>           
                                </div>   
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>        
                        </div>         
                    </li><!--/.portfolio-item-->
                </ul>   
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->


    <section id="comment">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Comment Event</h1>
                        <p>Kirimkan Kritik dan Saran untuk event Software Fair, komentar anda akan masuk di comment live saat acara berlangsung.</p>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="form1"  method="post" role="form"  >
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="nama1" id="nama1" type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="email1" id="email1" type="email" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="pekerjaan1" id="pekerjaan1" class="form-control" onchange="ganti()">
                                            <option value="Dosen atau Karyawan">Dosen atau Karyawan</option>
                                            <option value="Mahasiswa">Mahasiswa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select name="keterangan1" id="keterangan1" class="form-control"  required>
                                            <option value="Pemerintah">Instansi Pemerintah</option>
                                            <option value="Perusahaan Swasta">Perusahaan Swasta</option>
                                            <option value="Akademik">Akademik</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                        <select name="keterangan1" id="keterangan2" class="form-control"  style="display:none;">
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="komentar1" id="komentar1" required="required" class="form-control" rows="8" placeholder="Komentar"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" id="submit1" class="btn btn-danger btn-lg" value="Kirim Komentar">
                                       </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Our Address</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <h1>Connect with us</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                    <li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                    <li><a href="#"><i class="icon-pinterest icon-social"></i> Pinterest</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                    <li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="http://hmti.dinus.ac.id" title="Free Twitter Bootstrap WordPress Themes and HTML templates">HMTI-UDINUS</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <img class="pull-right" src="<?php base_url();?>assets/images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?=base_url();?>assets/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.isotope.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?=base_url();?>assets/js/main.js"></script>
    <script>   //no need to specify the language
    
    function ganti(){
        if($("#pekerjaan1").val()=="Mahasiswa"){
            $('#keterangan1').hide();
            $('#keterangan2').show();
        }else if($("#pekerjaan1").val()=="Dosen atau Karyawan"){
            $('#keterangan2').hide();
            $('#keterangan1').show();
        }
    }
 $(function(){
  $("#submit1").click(function(e){  // passing down the event 
        $.ajax({
           url:'<?=base_url();?>dashboard/insertcomment',
           type: 'POST',
           data: $("#form1").serialize(),   
           success: function(){
               alert("Terima kasih atas partisi anda dalam memeriahkan acara Software Fair 2016");
               $('#email1').val('');
               $('#nama1').val('');
               $('#komentar1').val('');
           },
           error: function(){
               alert("Fail")
           }
       });
       e.preventDefault(); // could also use: return false;
     });
    });
    </script>
</body>
</html>


