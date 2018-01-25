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


<!-- Sidebar end=============================================== -->
      

@include('formiklan')


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