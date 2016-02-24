					<table class="table table-hover table-bordered">
					<thead class="thead">
						<tr> 
							<th>İşin Adı</th> 
							<th>Ücret</th> 
							<th>Adet</th> 
							<th>Başlangıç <small>Tarihi</small></th>
							<th>Bitiş <small>Tarihi</small></th>
							<th class="w300">İşlemler</th>
						</tr>
					</thead>
					<tbody> 
						@foreach($record->childeren as $value)
						<tr> 
							<td>{!! $value->title !!}</td> 
							<td>{!! $value->price !!} TL</td> 
							<td>{!! $value->amount !!}</td>  
							<td>{!! datetimes('j F Y l', $value->date_start) !!}</td> 
							<td>{!! datetimes('j F Y l', $value->date_end) !!}</td> 
							<td>
								<div class="button-group">
								<a href="{!! clink('work-view',$value->id) !!}" class="btn btn-error btn-sm"><i class="fa fa-search"></i> İncele</a>
								<a href="{!! clink('work-edit',$value->id) !!}" class="btn btn-error btn-sm"><i class="fa fa-edit"></i> Düzelt</a>
								<a href="javascript:void(0);" data-title="Uyarı!" data-text="'{!! $value->title !!}' iş kaydını silmek istediğinizden emin misiniz?" data-type="warning" data-id="{!! $value->id !!}" data-url="{!! clink('work-delete',$value->id) !!}" class="btn btn-error btn-sm delete"><i class="fa fa-trash"></i> Sil</a>
								</div>
							</td>
						</tr> 
						@endforeach
					</tbody> 
					</table> 