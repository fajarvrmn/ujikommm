 
<div class="form-group{{ $errors->has('merek') ? 'has-error' : '' }}">
	{!! Form::label('name','Masukan merek',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('merek',null,['class'=>'form-control']) !!}
		{!! $errors->first('merek', '<p class="help-block">:message</p>') !!}
	</div>
</div>





<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>