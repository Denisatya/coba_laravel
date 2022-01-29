<!DOCTYPE html>
<html>
<head>
  <title>Belajar Laravel</title>
</head>
<body>
  <header>
    <h2>Welcome</h2>
    <nav>
      <a href="/">Home</a>
      |
      <a href="/biodata">Biodata</a>
    </nav>
  </header>
  <hr/>
  <br/>
  <br/>
  <h3> @yield('judul') </h3>

  @yield('konten')

  <br/>
  <br/>
  <hr/>
</body>
</html>