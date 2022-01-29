@extends('template')

@section('judul', 'Biodata Saya')
@section('konten')
<h4>Biodata</h4>
<ul>
@foreach($biodata as $b)
    <li>Nama Lengkap : {{$b->nama}}</li>
    <li>Nomer : {{$b->nomer}}</li>
    <li>Alamat : {{$b->alamat}}</li>
    <li>Tempat Lahir :{{$b->tempat_lahir}}</li>
    <li>Tanggal Lahir : {{$b->tanggal_lahir}}</li>  
    &nbsp
@endforeach 
</ul>
@endsection