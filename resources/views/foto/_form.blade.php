

<div class="form-group{{ $errors->has('depan') ? ' has-error' : '' }}">
	{!! Form::label('depan', 'Foto depan :', ['class'=>'col-md-2 control-label']) !!}
	
		{!! Form::file('depan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('depan', '<p class="help-block">:message</p>') !!}
	</div>


<div class="form-group{{ $errors->has('belakang') ? ' has-error' : '' }}">
	{!! Form::label('belakang', 'Foto belakang :', ['class'=>'col-md-2 control-label']) !!}
	
		{!! Form::file('belakang', null, ['class'=>'form-control']) !!}
		{!! $errors->first('belakang', '<p class="help-block">:message</p>') !!}
	</div>
	<div class="form-group{{ $errors->has('kiri') ? ' has-error' : '' }}">
	{!! Form::label('kiri', 'Foto kiri :', ['class'=>'col-md-2 control-label']) !!}
	
		{!! Form::file('kiri', null, ['class'=>'form-control']) !!}
		{!! $errors->first('kiri', '<p class="help-block">:message</p>') !!}
	</div>
	<div class="form-group{{ $errors->has('kanan') ? ' has-error' : '' }}">
	{!! Form::label('kanan', 'Foto kanan :', ['class'=>'col-md-2 control-label']) !!}
	
		{!! Form::file('kanan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('kanan', '<p class="help-block">:message</p>') !!}
	</div>
<td>
		<div class="form-group{{ $errors->has('lainnya1') ? ' has-error' : '' }}">
	{!! Form::label('lainnya1', 'Foto lainnya1 :', ['class'=>'col-md-2 control-label']) !!}
	
		{!! Form::file('lainnya1', null, ['class'=>'form-control']) !!}
		{!! $errors->first('lainnya1', '<p class="help-block">:message</p>') !!}
	</div>
<td>
		<div class="form-group{{ $errors->has('lainnya2') ? ' has-error' : '' }}">
	{!! Form::label('lainnya2', 'Foto lainnya2 :', ['class'=>'col-md-2 control-label']) !!}
	
		{!! Form::file('lainnya2', null, ['class'=>'form-control']) !!}
		{!! $errors->first('lainnya2', '<p class="help-block">:message</p>') !!}
	</div>
<td>
		<div class="form-group{{ $errors->has('lainnya3') ? ' has-error' : '' }}">
	{!! Form::label('lainnya3', 'Foto lainnya3 :', ['class'=>'col-md-2 control-label']) !!}
	
		{!! Form::file('lainnya3', null, ['class'=>'form-control']) !!}
		{!! $errors->first('lainnya3', '<p class="help-block">:message</p>') !!}
	</div>
<td>
		<div class="form-group{{ $errors->has('lainnya4') ? ' has-error' : '' }}">
	{!! Form::label('lainnya4', 'Foto lainnya4 :', ['class'=>'col-md-2 control-label']) !!}
	
		{!! Form::file('lainnya4', null, ['class'=>'form-control']) !!}
		{!! $errors->first('lainnya4', '<p class="help-block">:message</p>') !!}
	</div>
<td>
		<div class="form-group{{ $errors->has('lainnya5') ? ' has-error' : '' }}">
	{!! Form::label('lainnya5', 'Foto lainnya5 :', ['class'=>'col-md-2 control-label']) !!}
	
		{!! Form::file('lainnya5', null, ['class'=>'form-control']) !!}
		{!! $errors->first('lainnya5', '<p class="help-block">:message</p>') !!}
	</div>
<td>
	

	<div class="col-md-2" >
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
