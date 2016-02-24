@extends('theme.layout.master')

@section('headertitle')
<a href="{{clink('customer-add')}}" class="btn btn-danger btn-md pull-right"><i class="fa fa-user-plus"></i> Müşteri Ekle</a>
Müşteri Takip Programı <small>Toplam müşteri sayısı: {!! customerCount() !!}</small>
@endsection

@section('breadcrumb')
<li><a href="{{url('customers')}}"><i class="fa fa-users"></i> Müşteriler</a></li>  
@endsection

@section('main')
<div class="row letters">
	@foreach(letters() as $key=>$item)
	<div class="col-xs-4 col-sm-2 col-md-1">
		<a href="{!! clink('customer-search',$key) !!}" class="letter item"><div class="panel panel-default"><div class="panel-body"><h1 class="text-center">{!! $item; !!}</h1></div></div></a>
	</div><!-- item --> 
	@endforeach
</div>
@endsection

@section('css')
@endsection

@section('js')
@endsection