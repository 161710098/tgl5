@extends('layouts.admin')
@section('content')
<div class="container-fluid">

	<div class="row">
	<div class="col-md-10">
			<div class="panel panel-primary">
				<h1>Absensi</h1>
			  <div class="pull-right"> 
			  	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>
			  	</div>
			  </div>

			  <link rel = "stylesheet" type="text/css" href="/css/search.min.css"/>
               <script type="text/javascript" src="/css/searchh.min.js"></script>
             </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
			  		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

				  <table class="table" id="myTable">
				  	 <thead>
                            <tr>
                                <th>No</th>
								<th>Nama</th>
								<th>Kelas</th>
								<th>Keterangan</th>
								<th>Tanggal</th>
								
				            </tr>
                        </thead>
                      	<tbody>
	                      		@php $no=1; @endphp
								@foreach($absensi as $data)
								<tr>
								<td>{{$no++}}</td>
								<td>{{$data->siswa->nama_siswa}}</td>
								<td>{{$data->kelas->nama_kelas}}</td>
								<td>{{$data->keterangan}}</td>
								<td>{{$data->tgl}}</td>
								
						
			  			
                
            		
								
							
<td>
	<a class="btn btn-warning" href="{{ route('absensi.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('absensi.show',$data->id) }}" class="btn btn-success">Show</a>
</td>

<td>
	<form method="post" action="{{ route('absensi.destroy',$data->id) }}">
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

	  <script>
	function myFunction(){
       var input, filter, table, tr, td, i;
       input = document.getElementById("myInput");
       filter = input.value.toupperCase();
      table = document.getElementById("myTable");
      tr = document.getElementById("tr");
       for(i = 0; i < tr.length; i++){
       	td = tr[i].getElementByIdTagName("td")[2];

       	if (td){
       		if (td.innerHTML.toupperCase().indexOf(filter)> -1)
       			tr[i].style.display = "";
       	}else {
       		tr[i].style.display ="none";
          }
       	}
       }
	





				  </script>
</div>
 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <form action="{{ route('absensi.store') }}" method="post">
			{{csrf_field()}}
	        	<div class="form-group">
	        	<label class="control-label">Kelas</label>
	        	<select class="form-control-select2 kelas" name="b" required="" id="kelas">
	        		@foreach($kelas as $aa)
	        		<option value="{{$aa->id}}">{{$aa->nama_kelas}}
	        		</option>
	        		@endforeach
	        	</select>
	        	</div>

	        	<div class="form-group">
	        	<label class="control-label">Nama :</label>
	        	<select class="form-control-select2" name="a" required="" id="ngaran">
	        	 @foreach($siswa as $dd)
	        		<option value="{{$dd->id}}">{{$dd->nama_siswa}}
	        		</option>
	        		@endforeach -->
	        	</select>
	        	</div>

				<div class="form-group">
					<label class="control-label"> Keterangan </label><br>
					<input type="radio" name="c" required="" value="Sakit"> Sakit
					<input type="radio" name="c" required="" value="Ijin"> Ijin
					<input type="radio" name="c" required="" value="Alpa"> Alpa
				</div>

	        	<div class="form-group">
					<label class="control-label"> Tanggal</label>
					<input type="date" name="d" class="form-control" required="">
				</div>
				
			<div class="form-group">
				<button type="submit" class="btn btn-danger">Submit</button>

				<button type="reset" class="btn btn-warning">Reset</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
    </div>

		</div>
	</div>
</div> 
@endsection