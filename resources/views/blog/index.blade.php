<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/uikit.css')}}" rel="stylesheet">
  <link href="{{asset('css/uikit.min.css')}}" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="uk-container">
  <div class="uk-card uk-card-default ">
    <div class="uk-card-body">
      <div class="uk-card-badge uk-label">Primary</div>
      <h3 class="uk-card-title">Biodata</h3>
     
    </div>
    <div class="uk-card-footer">
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
                  <a href="/blog/detail/{{ $b->id }}">Detail</a>               
                </td>
            </tr>
            @endforeach 
            </tbody>
            
        </table>
    </div>
  </div>
  </div>
  <script src="{{asset('js/uikit.min.js')}}"></script>
</body>
</html>