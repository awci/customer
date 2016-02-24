@extends('theme.layout.master')

@section('headertitle')
<a href="{{clink('customer-view',$record->customer_id)}}" class="btn btn-danger btn-md pull-right">
	<i class="fa fa-users"></i> Müşteri Detay</a>
	@if($record->customer)
		(<b>{!! $record->customer->fullname !!} {!! $record->customer->surname !!}</b>) İş Detaylı Bilgi
	@endif
@endsection

@section('breadcrumb')
<li><a href="{{url('customer')}}"><i class="fa fa-users"></i> Müşteriler</a></li>  
<li><a href="{{clink('customer-view',$record->customer_id)}}" class="btn btn-danger btn-md pull-right"><i class="fa fa-users"></i> Müşteri Detay</a></li>
@endsection

@section('main') 
<div class="panel panel-default">
	<div class="panel-body">
		<h3 class="heading"> 
				<div class="btn-group pull-right" role="group">
					<a href="{!! clink('work-edit',$record->id) !!}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> İş Kaydını Düzelt</a>
					<a href="javascript:void(0);" data-title="Uyarı!" data-text="'{!! $record->title !!}' iş kaydını silmek istediğinizden emin misiniz?" data-type="warning" data-id="{!! $record->id !!}" data-url="{!! clink('customer-delete',$record->id) !!}" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> İş Kaydını Sil</a>
				</div>  
			İş Detaylı Bilgi
		</h3>
	<ul class="list-group">
		<li class="list-group-item"><strong>İş Adı:</strong> {!! $record->title !!} </li>
		<li class="list-group-item"><strong>Ücret:</strong> {!! $record->price !!} TL</li>
		<li class="list-group-item"><strong>Adet:</strong> {!! $record->amount !!}</li>
		<li class="list-group-item"><strong>Açıklama:</strong> {!! $record->content !!}</li>
		<li class="list-group-item"><strong>Başlangıç Tarihi: </strong> {!! datetimes('j F Y l', $record->date_start) !!}</li> 
		<li class="list-group-item"><strong>Bitiş Tarihi: </strong> {!! datetimes('j F Y l', $record->date_end) !!}</li> 
	</ul>
 
	</div>
</div> 
@endsection

@section('css')
@endsection

@section('js')
@endsection