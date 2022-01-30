@extends('layout.template')

@section('judul', 'Biodata Saya')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Biodata</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        
        <div class="card-body">
        

       <a href="biodata/tambah" class="btn btn-success">  Tambah Biodata</a>
        
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody >
            
            @foreach($biodata as $bio => $b)
            <tr>
                <td>{{$bio+1}}</td>
                <td>{{$b->nama}}</td>
                <td>{{$b->nomer}}</td>
                <td>{{$b->alamat}}</td>
                <td>{{$b->tempat_lahir}}</td>
                <td>{{$b->tanggal_lahir}}</td>  
                <td>
                  <a href="/biodata/edit/{{ $b->id }}">Edit</a>
                  |
                  <a href="/biodata/hapus/{{ $b->id }}">Hapus</a>
                </td>
                &nbsp
            </tr>
            @endforeach 
            </tbody>
            
        </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
@endsection