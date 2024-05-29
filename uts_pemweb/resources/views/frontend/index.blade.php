<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Jurusan, Dosen, dan Mata Kuliah</title>
    <link rel="stylesheet" href="frontend/style.css">
</head>

<body>
    <h1>Daftar Jurusan, Dosen, dan Mata Kuliah</h1>
   
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nidn</th>
            <th scope="col">Nama dosen</th>
            <th scope="col">Kode MataKuliah</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">SKS</th>
            <th scope="col">Jurusan</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($fkilkomss as $f)
          <tr>
            <th scope="row">{{$f->id}}</th>
            <td>{{$f->id}}</td>
            <td>{{$f->nidn}}</td>
            <td>{{$f->nama_dosen}}</td>
            <td>{{$f->kode_matakuliah}}</td>
            <td>{{$f->sks}}</td>
            <td>{{$f->jurusan}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
