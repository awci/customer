@extends('theme.layout.master') 

@section('headertitle')
<a href="{{clink('customer')}}" class="btn btn-danger btn-md pull-right"><i class="fa fa-chevron-left"></i> Müşteriler</a>
Yeni Müşteri Ekle
@endsection

@section('breadcrumb')
<li><a href="{{clink('customer')}}"><i class="fa fa-users"></i> Müşteriler</a></li> 
<li><a href="{{clink('customer-add')}}"><i class="fa fa-user-plus"></i> Müşteri Ekle</a></li> 
@endsection

@section('main') 
<div class="panel panel-default">
<div class="panel-body">
	
	@include('errors.errors')
	{!! Form::open(['url'=>clink('customer-add'),'class'=>'pure-form','files'=>true,'method'=>'POST']) !!}
	<!-- form --> 
	@include('theme.customer.form')  
	<!-- form -->
	{!!  Form::close() !!} 
</div>
</div>
@endsection

@section('css')
@endsection

@section('js')
@endsection