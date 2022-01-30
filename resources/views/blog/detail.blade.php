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
    <li>Nama Lengkap : {{$biodata->nama}}</li>
    <li>Nomer : {{$biodata->nomer}}</li>
    <li>Alamat : {{$biodata->alamat}}</li>
    <li>Tempat Lahir :{{$biodata->tempat_lahir}}</li>
    <li>Tanggal Lahir : {{$biodata->tanggal_lahir}}</li> 
    </div>
  </div>
  </div>
  <script src="{{asset('js/uikit.min.js')}}"></script>
</body>
</html>