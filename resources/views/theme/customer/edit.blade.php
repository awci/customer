@extends('theme.layout.master') 

@section('headertitle')
<a href="{{clink('customer')}}" class="btn btn-danger btn-md pull-right"><i class="fa fa-chevron-left"></i> Müşteriler</a>
Müşteri Düzelt
@endsection

@section('breadcrumb')
<li><a href="{{clink('customer')}}"><i class="fa fa-users"></i> Müşteriler</a></li> 
<li><a href="{{clink('customer-edit', $record->id)}}"><i class="fa fa-user-plus"></i> Müşteri Düzelt</a></li> 
@endsection

@section('main') 
<div class="panel panel-default">
<div class="panel-body">
	
	@include('errors.errors')
	{!! Form::model($record,['url'=>clink('customer-edit', $record->id),'class'=>'pure-form','files'=>true,'method'=>'POST']) !!}
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