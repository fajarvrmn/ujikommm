@extends('layouts.zontal')

@section('content')

<div class="content">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator</a></li>
				<li class="active">merek mobil	</li>
			</ul>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah merek mobil</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('Merekk.store'), 'method'=>'post', 'class'=>'form-horizontal']) !!}
					@include('merekk._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection 