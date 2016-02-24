			{!! Form::hidden('customer_id', $record->id) !!}
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6"> 
					<div class="form-group">
					{!! Form::label('title','İşin Adı') !!}
					{!! Form::text('title', null, array('class'=>'form-control')) !!}
					</div>
				</div>	 	 
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
							{!! Form::label('date_start','Başlangıç Tarihi') !!}
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
								{!! Form::text('date_start', null, array('class'=>'form-control datepicker')) !!}
							</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6"> 
							<div class="form-group">
							{!! Form::label('date_end','Bitiş Tarihi') !!}
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
								{!! Form::text('date_end', null, array('class'=>'form-control datepicker')) !!}
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
 					<div class="form-group">
						{!! Form::label('price','Ücret') !!}
						<div class="input-group">
							{!! Form::text('price', null, ['class'=>'form-control']) !!}
							<div class="input-group-addon">TL</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						{!! Form::label('amount','Adet') !!}
						<div class="input-group">
							{!! Form::text('amount', null, ['class'=>'form-control']) !!}
							<div class="input-group-addon">Adet</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="form-group">
			{!! Form::label('content','İş Açıklaması') !!}
			{!! Form::textarea('content', null, array('rows'=>2,'class'=>'form-control textarea-h100')) !!}
			</div>	 
			{!! Form::button('<i class="glyphicon glyphicon-ok"></i> Kaydet', array('type'=>'submit','class'=>'btn btn-danger')) !!}
			<a href="javascript:history.back();" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Vazgeç</a>