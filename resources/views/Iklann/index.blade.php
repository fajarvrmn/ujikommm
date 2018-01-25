@extends('layouts.zontal')
@section('content')
<div class="content">
	<div class="row">
		<div class="content">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator SM</a></li>
				<li class="active"> iklan	</li>
			</ul>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h2 class="panel-title">Data Iklan</h2>
				</div>
				<div class="panel-body">
		
					<p><a class="btn btn-danger" href="{{ route('Iklan.create') }}">Tambah</a></p>
					{!! $html->table(['class'=>'table-striped']) !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection