@extends('theme.layout.master')

@section('headertitle')
<a href="{{clink('customer-add')}}" class="btn btn-danger btn-md pull-right"><i class="fa fa-user-plus"></i> Müşteri Ekle</a>
<b> {!! $letter<>'' ? '('.$letter.')' : null !!} </b> Müşteri Listesi
@endsection

@section('breadcrumb')
<li><a href="{{url('customers')}}"><i class="fa fa-users"></i> Müşteriler</a></li>  
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
				<a href="{!! clink('work-add',$record->id) !!}" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> İş Ekle</a>
				<a href="{!! clink('customer-view',$record->id) !!}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i> İncele</a>
				<a href="{!! clink('customer-edit',$record->id) !!}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> Düzelt</a>
				<a href="javascript:void(0);" data-title="Uyarı!" data-text="'{!! $record->fullname !!}' müşterisini silmek istediğinizden emin misiniz?" data-type="warning" data-id="{!! $record->id !!}" data-url="{!! clink('customer-delete',$record->id) !!}" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Sil</a>
				</div>
			</td>
		</tr> 
		@if(count($record->childeren)>0)
		<tr>
			<td colspan="5">
				<div class="text-center">
					<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#showCustomerList-{!! $record->id !!}" aria-expanded="false" aria-controls="showCustomerList-{!! $record->id !!}"><i class="fa fa-list-ul"></i> Müşteriye Ait İşleri Göster</button>
					<a href="{!! clink('customer-view',$record->id) !!}" class="btn btn-default"><i class="fa fa-eye"></i> Müşteriye Ait İşleri İncele</a>
				</div>
				<div class="collapse" id="showCustomerList-{!! $record->id !!}">
				<div class="mt10"> 
					@include('theme.customer.works')
				</div><!-- .mt10 -->
				</div> 
			</td>
		</tr>
		@endif
		@endforeach
	</tbody> 
	</table> 
	</div>
</div>
	@else 
	<div class="alert alert-info"><b>Bilgilendirme!</b> Sistemde kayıtlı müşteri kaydı bulunmamaktadır.</div>
	@endif
@endsection

@section('css')
@endsection

@section('js')
@endsection