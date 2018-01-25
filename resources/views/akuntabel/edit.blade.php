@extends('layouts.zontal')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator SM</a></li>
				<li><a href="{{ url('/admin/Akun') }}">Akun admin</a></li>
				<li class="active">Ubah admin</li>
			</ul>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah admin</h2>
				</div>
				<div class="panel-body">
					{!! Form::model($data, ['url'=>route('Akun.update', $data->id), 'method'=>'put', 'class'=>'form-horizontal']) !!}
					@include('akuntabel._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection