			{!! Form::hidden('status','publish') !!}
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="form-group">
					{!! Form::label('fullname','Müşteri Adı (*)') !!}
					{!! Form::text('fullname', null, array('class'=>'form-control')) !!}
					</div>	
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="form-group">
					{!! Form::label('surname','Müşteri Soyadı') !!}
					{!! Form::text('surname', null, array('class'=>'form-control')) !!}
					</div>	 
				</div> 
				<div class="col-xs-12 col-sm-6 col-md-3">
 					<div class="form-group">
						{!! Form::label('phone','Telefon') !!}
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-phone"></i></div>
							{!! Form::text('phone', null, ['class'=>'form-control']) !!}
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="form-group">
						{!! Form::label('email','Email') !!}
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
							{!! Form::text('email', null, ['class'=>'form-control']) !!}
						</div>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
 					<div class="form-group">
						{!! Form::label('near_fullname','Yakının Adı Soyadı') !!}
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-user"></i></div>
							{!! Form::text('near_fullname', null, ['class'=>'form-control']) !!}
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						{!! Form::label('near_phone','Yakının Telefon Numarası') !!}
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-phone"></i></div>
							{!! Form::text('near_phone', null, ['class'=>'form-control']) !!}
						</div>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6"> 
					<div class="form-group">
					{!! Form::label('address','Adres') !!}
					{!! Form::textarea('address', null, array('rows'=>2,'class'=>'form-control')) !!}
					</div>	 
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6"> 
					<div class="form-group">
					{!! Form::label('content','Müşteri ile ilgili açıklama') !!}
					{!! Form::textarea('content', null, array('rows'=>2,'class'=>'form-control')) !!}
					</div>	 
				</div>
			</div>	 
			{!! Form::button('<i class="glyphicon glyphicon-ok"></i> Müşteri Kaydet', array('type'=>'submit','class'=>'btn btn-danger')) !!}
			<a href="javascript:history.back();" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Vazgeç</a>