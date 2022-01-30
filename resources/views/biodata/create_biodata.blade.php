@extends('layout.template')

@section('judul', 'Input Biodata')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Input Biodata</h3>
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
        
            <form action="/biodata/tambah_action" method="post">
            {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Handphone</label>
                    <input type="text" class="form-control" name="nomer" placeholder="Nomer Handphone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                  <button type="submit" class="btn btn-primary" value="simpan data">Submit</button>
                
              </form>
              
        </div>
        
      </div>
      <!-- /.card -->
@endsection