@extends('layouts.admin')
@section('content')
	<div class="row">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-2">
	<!--nav-->
				
			<!--end nav-->
	</div>
	<div class="col-md-10">
			<div class="panel panel-danger">
			  <div class="panel-heading">Data Siswa
			  	<div class="panel-title pull-right"><a href="{{ route('siswa.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>NIS</th>
					  <th>nama</th>
					  <th>Jenis Kelamin</th>
                      <th>Kelas</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($siswa as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nis }}</td>
				    	<td>{{ $data->nama }}</td>
						<td>{{ $data->jenis_kelamin }}</td>
				    	<td>{{ $data->id_kelas }}</td>
				    	
<td>
	<a class="btn btn-warning" href="{{ route('siswa.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('siswa.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('siswa.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection