<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halaman data jenis</h1>
    <br>
    <a href="/jenis/tambah">tambah jenis</a>
    <div class="table-responsive"
    >
        <table class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nama_jenis</th>
                </tr>
            </thead>
            <tbody>
             @foreach($jenis as $jenis)
              <tr>
                <td>{{$jenis->id}}</td>
                <td>{{$jenis->nama_jenis}}</td>

                <td>
                    <a href="/jenis/{{ $jenis->id}}/show">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>