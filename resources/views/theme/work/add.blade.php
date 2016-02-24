@extends('theme.layout.master') 

@section('headertitle')
<a href="{{clink('customer-view',$record->id)}}" class="btn btn-danger btn-md pull-right"><i class="fa fa-chevron-left"></i> Müşteri Bilgilerini Görüntüle</a>
Yeni İş Ekle
@endsection

@section('breadcrumb')
<li><a href="{{clink('customer')}}"><i class="fa fa-users"></i> Müşteriler</a></li> 
<li><a href="{{clink('customer-view',$record->id)}}"><i class="fa fa-eye"></i> Müşteri Detay</a></li> 
<li><a href="{{clink('work-add',$record->id)}}"><i class="fa fa-plus"></i> İş Ekle</a></li> 
@endsection

@section('main') 
<div class="panel panel-default">
<div class="panel-body"> 
	@include('errors.errors')
	{!! Form::open(['url'=>clink('work-add',$record->id),'class'=>'pure-form','files'=>true,'method'=>'POST']) !!}
	<!-- form --> 
	<h3 class="heading"><b>{!! $record->fullname !!} {!! $record->surname !!}</b> <i>Müşterisi için iş ekleme</i></h3>
	@include('theme.work.form')  
	<!-- form -->
	{!!  Form::close() !!} 
</div>
</div>
@endsection

@section('css')
@endsection

@section('js') 
@endsection