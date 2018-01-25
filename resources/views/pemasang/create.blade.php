@extends('layouts.zontal')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator</a></li>
				<li class="active">pemasang iklan	</li>
			</ul>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah Pemasang Iklan</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('Pemasang.store'), 'method'=>'post', 'class'=>'form-horizontal']) !!}
					@include('pemasang._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection 