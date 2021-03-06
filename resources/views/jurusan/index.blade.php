@extends('layouts.admin')
@section('content')
<div class="container-fluid">

  <div class="row">
  <div class="col-md-10">
      <div class="panel panel-primary">
        <h1>Jurusan</h1>
        <div class="pull-right">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
          <table class="table">
            <thead>
            <tr>
              <th>No</th>
            <th>Jurusan</th>
            <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
              <?php $nomor = 1; ?>
              @php $no = 1; @endphp
              @foreach($jurusan as $data)
              <tr>
              <td>{{$no++}}</td>
                <td>{{$data->nama_jur}}</td>
                
              
<td>
  <a class="btn btn-warning" href="{{ route('jurusan.edit',$data->id) }}">Edit</a>
</td>
<td>
  <form method="post" action="{{ route('jurusan.destroy',$data->id) }}">
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
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <form action="{{ route('jurusan.store') }}" method="post">
      {{csrf_field()}}
       <div class="form-group">
        <label class="control-label">Nama Jurusan</label>
        <input type="text" name="nama_jur" class="form-control" required="">
        </div>
        
      <div class="form-group">
        <button type="submit" class="btn btn-danger">Submit</button>

        <button type="submit" class="btn btn-warning">Reset</button>
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