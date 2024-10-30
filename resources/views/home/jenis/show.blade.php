<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halaman tambah data jenis</h1>
    <br>
    <form action="/jenis/{{$jenis->id}}/update" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">id</label>
            <input
                type="number"
                class="form-control"
                name="id"
                id=""
                value="{{ $jenis->id}}"
                aria-describedby="helpId"
                placeholder=""
            />

        </div>
        <div class="mb-3">
            <label for="" class="form-label">nama jenis</label>
            <input
                type="text"
                class="form-control"
                name="nama_jenis"
                id=""
                 value="{{ $jenis->nama_jenis}}"
                aria-describedby="helpId"
                placeholder=""
            />

       </div>
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>