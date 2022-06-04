<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>CRUD LARAVEL</title>
  </head>
  <body>
    <h1 class="text-center mt-5">Data pegawai</h1>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 ">
                <a href="/tambahpegawai" class="btn btn-success mb-2">tambah +</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                      {{ $message }}
                    </div>
                @endif
                <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelamin</th>
                        <th scope="col">No. telepon</th>
                        <th scope="col">dibuat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $i = 1;
                      @endphp
                        @foreach ($data as $row)   
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jeniskelamin }}</td>
                                <td>{{ $row->notelpon }}</td>
                                <td>{{ $row->created_at->diffForHumans() }}</td>
                                <td>
                                  <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">edit</a>
                                  <a href="/delete/{{ $row->id }}" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    
                    </tbody>
                  </table>
                        
            </div>
        </div>
    </div>
    

    
    
      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>