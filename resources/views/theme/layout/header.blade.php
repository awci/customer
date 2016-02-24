<nav class="navbar main-menu navbar-default navbar-fixed-top">
  <div class="container"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-header" aria-expanded="false"> <span class="sr-only">MENÜ</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="{{url('/')}}">Müşteri Programı</a> 
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-header">
      <ul class="nav navbar-nav">
        <li {!! (segment(1) == '') ? ' class="active"' : null !!}><a href="{{url('/')}}"><i class="fa fa-home"></i> Ana Sayfa</a></li>
        <li {!! (segment(1) == 'customer' OR segment(2) == 'search' AND segment(2) == '')  ? ' class="active"' : null !!}><a href="{{clink('customer')}}"><i class="fa fa-users"></i> Müşteriler</a></li>
        <li {!! (segment(1) == 'customer' and segment(2) == 'add') ? ' class="active"' : null !!}><a href="{{clink('customer-add')}}"><i class="fa fa-user-plus"></i> Yeni Müşteri Ekle</a></li> 
      </ul>  
       <ul class="nav navbar-nav navbar-right"> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-refresh"></i></a>
          <ul class="dropdown-menu">
            <li><a href="{!! clink('customer-trash') !!}">Silinmiş Müşterlier</a></li>
            <li><a href="{!! clink('work-trash') !!}">Silinmiş İşler</a></li> 
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>