<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   <title>{{ config('app.name', 'Mobile') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
    <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
    <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
    <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
    -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->
    
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="/frontend/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="/frontend/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive --> 
    <link href="/frontend/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="/frontend/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->   
    <link href="/frontend/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="/frontend/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/frontend/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/frontend/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/frontend/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/frontend/themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
   
    </div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="/"><img src="/frontend/themes/images/logoo.png" alt="Bootsshop"/></a>
        <form class="form-inline navbar-search" method="post" action="products.html" >
        <input id="srchFld" class="srchTxt" type="text" />
          
          <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
    @role('member')
  <li class=""><a href="{{ route('Iklan.create') }}">Kelola Iklan</a></li>
  @endrole
 @role('admin')
  <li class=""><a href="/home">Admin</a></li>
  @endrole


     <li class="">
   <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-medium btn-success">Login</span></a>



  <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3>Login Block</h3>
      </div>
      <div class="modal-body">

         {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
     
        <div class="control-group">     
 <label class="{{ $errors->has('email') ? 'has-error' : '' }}">Email : </label>
       {!! Form::email('email',null,['class'=>'form-control']) !!}
                      {!! $errors->first('email','<p class="help-block">:message</p>') !!}

        </div>
        <div class="control-group">
           <label class="{{ $errors->has('password') ? 'has-error' : '' }}">Password :  </label>
                       {!! Form::password('password',['class'=>'form-control']) !!}
                       {!! $errors->first('password','<p class="help-block">:message</p>') !!}
        </div>
        
 
      <button type="submit" class="btn btn-success">Sign in</button>
     {!! Form::close() !!}
      </div>
  </div>
  </li>

  <li class="">
   <a href="/register" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-medium btn-success">Register</span></a>
  
  </li>

      
     
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
          <div class="container">
             <img style="width:100%" src="/frontend/themes/images/carousel/8.png" alt="special offers"/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
          </div>
          </div>
          <div class="item">
          <div class="container">
             <img style="width:100%" src="/frontend/themes/images/carousel/4.png" alt=""/></a>
                <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
          </div>
          </div>
          <div class="item">
          <div class="container">
             <img src="/frontend/themes/images/carousel/8.png" alt=""/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            
          </div>
          </div>
           <div class="item">
           <div class="container">
             <img src="/frontend/themes/images/carousel/4.png" alt=""/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
           
          </div>
          </div>
           <div class="item">
           <div class="container">
             <img src="/frontend/themes/images/carousel/8.png" alt=""/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
          </div>
           <div class="item">
           <div class="container">
             <img src="/frontend/themes/images/carousel/4.png" alt=""/></a>
            <div class="carousel-caption">
                  <h4>Second Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
          </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div> 
</div>
<div id="mainBody">
    <div class="container">
    <div class="row">
<!-- Sidebar ================================================== -->
    <div id="sidebar" class="span3">
        
        <ul id="sideManu" class="nav nav-tabs nav-stacked">
            <li class="subMenu open"><a> KONDISIL</a>
                <ul>
                <li><a href="products.html"><i class="icon-chevron-right"></i>BARU</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>BEKAS</a></li>

                </ul>
            </li>
            <li class="subMenu"><a> MEREK MOBIL </a>
            <ul style="display:none">
                <li><a href="products.html"><i class="content"><img src="/frontend/logo/toyota.png"  style="width: 19px; height: 15px; "></i>&nbsp;<b>Toyota</b>    </a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Honda</a></li>                                                
                <li><a href="products.html"><i class="icon-chevron-right"></i>Daihatsu</a></li>    
                <li><a href="products.html"><i class="icon-chevron-right"></i>Suzuki</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Mitsubishi</a></li>                                              
                <li><a href="products.html"><i class="icon-chevron-right"></i>Nissan</a></li>                                                
                <li><a href="products.html"><i class="icon-chevron-right"></i>Mazda</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Mercedes-Benz</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>BMW</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Hyundai</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Chevrolet</a></li>

            </ul>
            </li>
            <li class="subMenu"><a>TIPE MOBIL</a>
                <ul style="display:none">
                                                             
                
                <li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Hatchback </a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sedan</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>LCGC</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>SUV</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>MPV</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Low MPV</a></li>
                 <li><a href="products.html"><i class="icon-chevron-right"></i>Lainnya</a></li>

            </ul>
            </li>
            <li class="subMenu"><a>TRANSMISI</a>
                <ul style="display:none">
                <li><a href="products.html"><i class="icon-chevron-right"></i>MATIC</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>MANUAL</a></li>                                             
                                                              
            </ul>
            </li>
            <li class="subMenu"><a>DAERAH PROVINSI</a>
                <ul style="display:none">
                <li><a href="products.html"><i class="icon-chevron-right"></i>NAD</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sumatera Utara</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sumatera Barat</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Riau</a></li>                                    
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sumatera Selatan</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Jambi</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Bengkulu</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Lampung</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Kepulauan Bangka Belitung</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Kepulauan Riau</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>DKI Jakarta</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Jawa Barat</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Jawa Tengah</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>DI Yogyakarta</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Jawa Timur</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Banten</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Bali</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>NTB</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>NTT</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Kalimantan Barat</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Kalimantan Timur</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sulawesi Utara</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sulawesi Tengah</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sulawesi Selatan</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sulawesi Tenggara</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Sulawesi Barat</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Gorontalo</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Maluku</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Maluku Utara</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Papua</a></li>
                <li><a href="products.html"><i class="icon-chevron-right"></i>Papua Barat</a></li>


                                                              
            </ul>
            </li>

            
        </ul>
        <br/>
          
    </div>
<!-- Sidebar end=============================================== -->
        <div class="span9">     
            <div class="well well-small">
            <h4>New Products <small class="pull-right"></small></h4>
            <div class="row-fluid">
            <div id="featured" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
              </ul>
              </div>
               <div class="item">
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                  <i class="tag"></i>
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
              </ul>
              </div>
               <div class="item">
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
              </ul>
              </div>
               <div class="item">
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png"" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png"" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png"" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""></a>
                    <div class="caption">
                      <h5>Product name</h5>
                       <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                  </div>
                </li>
              </ul>
              </div>
              </div>
              <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#featured" data-slide="next">›</a>
              </div>
              </div>
        </div>
        <h4>Latest Products </h4>
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                    <a  href="product_details.html"><img src="/frontend/themes/images/products/mob6.png"" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                     
                      <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a  href="product_details.html"><img src="/frontend/themes/images/products/mob6.png"" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                     <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a  href="product_details.html"><img src="/frontend/themes/images/products/mob6.png"" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a  href="product_details.html"><img src="/frontend/themes/images/products/mob6.png"" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                      <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a  href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                      <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a  href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>

                <li class="span3">
                  <div class="thumbnail">
                    <a  href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a  href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a  href="product_details.html"><img src="/frontend/themes/images/products/mob6.png" alt=""/></a>
                    <div class="caption">
                      <h5>Product name</h5>
                      <p> 
                        Lorem Ipsum is simply dummy text. 
                      </p>
                       <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                    </div>
                  </div>
                </li>
                

              </ul> 

        </div>
        </div>
    </div>
</div>
<!-- Footer ================================================================== -->
    <div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h5>ACCOUNT</h5>
                <a href="login.html">YOUR ACCOUNT</a>
                <a href="login.html">PERSONAL INFORMATION</a> 
                <a href="login.html">ADDRESSES</a> 
                <a href="login.html">DISCOUNT</a>  
                <a href="login.html">ORDER HISTORY</a>
             </div>
            <div class="span3">
                <h5>INFORMATION</h5>
                <a href="contact.html">CONTACT</a>  
                 REGISTRATION</a>  
                <a href="legal_notice.html">LEGAL NOTICE</a>  
                <a href="tac.html">TERMS AND CONDITIONS</a> 
                <a href="faq.html">FAQ</a>
             </div>
            <div class="span3">
                <h5>OUR OFFERS</h5>
                <a href="#">NEW PRODUCTS</a> 
                <a href="#">TOP SELLERS</a>  
                <a href="special_offer.html">SPECIAL OFFERS</a>  
                <a href="#">MANUFACTURERS</a> 
                <a href="#">SUPPLIERS</a> 
             </div>
            <div id="socialMedia" class="span3 pull-right">
                <h5>SOCIAL MEDIA </h5>
                <a href="#"><img width="60" height="60" src="/frontend/themes/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="/frontend/themes/images/twitter.png" title="twitter" alt="twitter"/></a>
                
             </div> 
         </div>
        <p class="pull-right">&copy; Ujikom | SmkAssalaamBandung</p>
    </div><!-- Container End -->
    </div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
    <script src="/frontend/themes/js/jquery.js" type="text/javascript"></script>
    <script src="/frontend/themes/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/frontend/themes/js/google-code-prettify/prettify.js"></script>
    
    <script src="/frontend/themes/js/bootshop.js"></script>
    <script src="/frontend/themes/js/jquery.lightbox-0.5.js"></script>
    
    <!-- Themes switcher section ============================================================================================= -->

</body>
</html>