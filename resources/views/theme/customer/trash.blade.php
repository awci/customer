@extends('theme.layout.master')

@section('headertitle')
<a href="{{clink('customer')}}" class="btn btn-danger btn-md pull-right"><i class="fa fa-users"></i> Müşteriler</a>
Silinmiş müşteri kayıtları
@endsection

@section('breadcrumb')
<li><a href="{{url('customer')}}"><i class="fa fa-users"></i> Müşteriler</a></li>  
@endsection

@section('main') 
@if($recordsCount>0)

<div class="panel panel-default">
	<div class="panel-table">
	<table class="table table-hover">
	<thead class="thead">
		<tr> 
			<th>Adı Soyadı</th> 
			<th>Telefon</th> 
			<th>Kayıt <small>Tarihi</small></th>
			<th class="w370">İşlemler</th>
		</tr>
	</thead>
	<tbody> 
		@foreach($records as $record)
		<tr>
			<th scope="row">{!! $record->fullname !!} {!! $record->surname !!} <span class="label label-danger">#{!! $record->id !!}</span></th>  
			<td>{!! $record->phone !!}</td> 
			<td>{!! datetimes('j F Y l', $record->created_at) !!}</td> 
			<td>
				<div class="button-group">
				<a href="{!! clink('customer-delete',$record->id.'/recovery') !!}" class="btn btn-error btn-sm"><i class="fa fa-refresh"></i> Müşteriyi geri kaydet</a>
				</div>
			</td>
		</tr>  
		@endforeach
	</tbody> 
	</table> 
	</div>
</div>

@else 
<div class="alert alert-success"><b>Tebrikler!</b> Silinmiş kaydınız bulunmamaktadır.</div>
@endif
@endsection

@section('css')
@endsection

@section('js')
@endsection