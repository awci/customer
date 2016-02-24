@extends('theme.layout.master')

@section('headertitle')
<a href="{{clink('customer')}}" class="btn btn-danger btn-md pull-right"><i class="fa fa-users"></i> Müşteriler</a>
Müşteri Detay
@endsection

@section('breadcrumb')
<li><a href="{{url('customer')}}"><i class="fa fa-users"></i> Müşteriler</a></li>  
@endsection

@section('main') 
<div class="panel panel-default">
	<div class="panel-body">
		<h3 class="heading">
			<div class="pull-right">
				<div class="btn-group" role="group">
				<a href="{!! clink('customer-edit',$record->id) !!}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> Müşteri Kaydını Düzelt</a>
					<a href="javascript:void(0);" data-title="Uyarı!" data-text="'{!! $record->fullname !!}' müşterisini silmek istediğinizden emin misiniz?" data-type="warning" data-id="{!! $record->id !!}" data-url="{!! clink('customer-delete',$record->id) !!}" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Müşteri Kaydını Sil</a>
				</div> 
			</div>
			Müşteri Bilgileri
		</h3>
	<ul class="list-group">
		<li class="list-group-item"><strong>Adı Soyadı:</strong> {!! $record->fullname !!}   {!! $record->surnamename !!}</li>
		<li class="list-group-item"><strong>Telefon:</strong> {!! $record->phone !!}  &nbsp;&nbsp; <small>{!! $record->email ? '  <i class="fa fa-envelope"></i> '.$record->email : null !!}</small></li>
		<li class="list-group-item"><strong>Yakını Adı Soyadı - Yakını Telefonu:</strong> {!! $record->near_fullname !!} - {!! $record->near_phone !!}</li>
		<li class="list-group-item"><strong>Adres:</strong> {!! $record->address !!}</li>
		<li class="list-group-item"><strong>Açıklama:</strong> {!! $record->content !!}</li>
	</ul>

	@if(count($record->childeren)>0)  
	<div class="clearfix"></div> <hr>
		<a href="{!! clink('work-add',$record->id) !!}" class="btn btn-default btn-sm pull-right"><i class="fa fa-plus"></i> Yeni İş Ekle</a>
		<h3 class="heading">
			Müşteriye Ait İşler <small>Toplam müşteri iş sayısı: {!! count($record->childeren) !!}</small> </h3>
			@include('theme.customer.works')
	@else 
		<div class="clearfix"></div>
		<hr>
		<div class="alert alert-warning"><b>Bilgilendirme!</b> Müşteriye ait iş kaydı bulunmamaktadır. Hemen iş planı ekleyebilirsiniz. <a href="{!! clink('work-add',$record->id) !!}" class="btn btn-default btn-sm">İş eklemek için tıklayınız...</a></div>
	@endif
	</div>
</div> 
@endsection

@section('css')
@endsection

@section('js')
@endsection