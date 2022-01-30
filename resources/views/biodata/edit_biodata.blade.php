@extends('layout.template')

@section('judul', 'Input Biodata')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Edit Biodata</h3>
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
            
            <form action="/biodata/update/ {{  $biodata->id }}" method="post">
            {{ csrf_field() }}
                <div class="card-body">
                <input type="hidden" name="id" value="{{ $biodata->id }}"> <br/>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="{{ $biodata->nama}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Handphone</label>
                    <input type="text" class="form-control" name="nomer" value="{{ $biodata->nomer}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $biodata->alamat}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $biodata->tempat_lahir}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ $biodata->tangaal_lahir}}">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                  <button type="submit" class="btn btn-primary" value="simpan data">Submit</button>
                
              </form>
             
              
        </div>
        
      </div>
      <!-- /.card -->
@endsection