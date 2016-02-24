<!Doctype html>
<html lang="tr">
<head>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <base href="{!! url('/') !!}">
    <title>Müşteri Takip Programı</title> 
    <meta name="author" content="www.astald.com">
    <!-- Vendor CSS -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300italic,100italic,100,300&subset=latin,latin-ext,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{!! asset('static/plugin/font-awesome/4.4.0/css/font-awesome.min.css') !!}"/> 
    <link rel="stylesheet" href="{!! asset('static/plugin/bootstrap/3.3.5/css/bootstrap.min.css') !!}"/>  
    <link rel="stylesheet" href="{!! asset('static/plugin/datepicker/datepicker3.css') !!}"/>   
    <link rel="stylesheet" href="{!! asset('static/plugin/daterangepicker/daterangepicker-bs3.css') !!}"/>  
    <link rel="stylesheet" href="{!! asset('static/plugin/sweetalert/dist/sweetalert.css') !!}"/>      
    <link rel="stylesheet" href="{!! asset('static/plugin/datepicker/datepicker3.css') !!}"/>  
    <link rel="stylesheet" href="{!! asset('static/css/theme.css') !!}"/>
    @yield('css')
</head>
<body>
@include ("theme.layout.header") 
<div class="container"> 

<section class="content">
<h2 class="heading">@yield('headertitle')</h2>
@yield('main')
</section>

</div>
<footer> 
<div class="container">
<div class="footer-top">
  <div class="footer-box">
    <div class="footer-box-text">
    <div class="pull-right">Web Developer <i class="fa fa-star"></i> <a href="http://www.astald.com" target="_blank">Astald.com</a></div>
      <p>&copy; Copyright 2015 - All Rights Reserved.</p>
    </div>
  </div> 
</div>
</div>
</footer> 
<!-- Vendor -->
<script src="{!! asset('static/plugin/jQuery/jQuery-2.1.4.min.js') !!}"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="{!! asset('static/plugin/bootstrap/3.3.5/js/bootstrap.min.js') !!}"></script>  
<script src="{!! asset('static/plugin/datepicker/bootstrap-datepicker.js') !!}"></script>  
<script src="{!! asset('static/plugin/datepicker/locales/bootstrap-datepicker.tr.js') !!}"></script>  
<script src="{!! asset('static/plugin/sweetalert/dist/sweetalert.min.js') !!}"></script> 
<script type="text/javascript">
@if(Session::has('message'))   
swal({title: "{!! Session::get('message')['title'] !!}", text: "{!! Session::get('message')['text'] !!}", type: "{!! Session::get('message')['type'] !!}",html:true});
@endif 
$('.delete').click(function(e){
  e.preventDefault;
  var title = $(this).data('title'), text = $(this).data('text'), urlhref = $(this).data('url'), type = $(this).data('type');
  swal({ title: title, text: text, type: type,confirmButtonText: "Kaydı sil!", cancelButtonText: "Vazgeç!",  showCancelButton: true, confirmButtonColor: "#DD6B55", closeOnConfirm: false,   closeOnCancel: true }, function(isConfirm){ if (isConfirm) {  window.location.href= urlhref;  }else{ return false; } });
});
$('.datepicker').datepicker({format: 'yyyy-mm-dd',language: 'tr',todayBtn:'linked'});
</script>
@yield('js')
</body>
</html>