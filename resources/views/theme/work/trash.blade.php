@extends('theme.layout.master')

@section('headertitle')
<a href="{{clink('customer')}}" class="btn btn-danger btn-md pull-right"><i class="fa fa-users"></i> Müşteriler</a>
Silinmiş iş kayıtları
@endsection

@section('breadcrumb')
<li><a href="{{url('customer')}}"><i class="fa fa-users"></i> Müşteriler</a></li>  
@endsection

@section('main') 
@if($recordsCount>0)
<div class="panel panel-default">
	<div class="panel-body">
		<h3 class="heading">Silinmiş iş kayıtları (Toplam silinmiş kayıt sayısı: {{$recordsCount}})</h3>
		
		<table class="table table-hover table-bordered">
		<thead class="thead">
			<tr> 
				<th>Müşteri</th> 
				<th>İşin Adı</th> 
				<th>Ücret</th> 
				<th>Adet</th> 
				<th>Başlangıç <small>Tarihi</small></th>
				<th>Bitiş <small>Tarihi</small></th>
				<th class="w300">İşlemler</th>
			</tr>
		</thead>
		<tbody> 
			@foreach($records as $item)
			<tr> 
				<td>@if(count($item->customer)) {!! $item->customer->fullname !!} {!! $item->customer->surname !!} @else <i class="fa fa-minus"></i> @endif </td> 
				<td>{!! $item->title !!}</td> 
				<td>{!! $item->price !!} TL</td> 
				<td>{!! $item->amount !!}</td>  
				<td>{!! datetimes('j F Y l', $item->date_start) !!}</td> 
				<td>{!! datetimes('j F Y l', $item->date_end) !!}</td> 
				<td>
					<div class="button-group">
					<a href="{!! clink('work-delete',$item->id.'/recovery') !!}" class="btn btn-error btn-sm"><i class="fa fa-refresh"></i> İşi geri kaydet</a>
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