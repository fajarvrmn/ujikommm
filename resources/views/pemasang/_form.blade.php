 
<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
	{!! Form::label('name','Nama lengkap',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('nama',null,['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
	{!! Form::label('name','Email',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('email',null,['class'=>'form-control']) !!}
		{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('telepon') ? 'has-error' : '' }}">
	{!! Form::label('name','No telepon',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('telepon',null,['class'=>'form-control']) !!}
		{!! $errors->first('telepon', '<p class="help-block">:message</p>') !!}
	</div>
</div>



<div class="form-group{{ $errors->has('alamat') ? 'has-error' : '' }}">
	{!! Form::label('name','Alamat lengkap',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::textarea('alamat',null,['class'=>'ckeditor']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>




 



<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>