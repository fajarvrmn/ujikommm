@extends('layouts.zontal')

@section('content')


<div class="content">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator</a></li>
				<li class="active">Data Merek	</li>
			</ul>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h2 class="panel-title"> Seeder merek mobil</h2>
				</div>
				<div class="panel-body">
		<table class="table">
						<thead>
							<tr>
								<th>No </th>
								<th>Nama Merek</th>
								
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($mmerek as $data)
							<tr>
							<td>{{$no++}}</td>
							<td>{{$data->merek}}</td>
					

							
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
