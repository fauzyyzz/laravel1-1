<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halaman tambah data barang</h1>
    <br>
    <form action="/barang/{{$barang->id}}/update" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">gambar</label>
            <input
                type="text"
                class="form-control"
                name="gambar"
                id=""
                value="{{ $barang->gambar}}"
                aria-describedby="helpId"
                placeholder=""
            />

        </div>
        <div class="mb-3">
            <label for="" class="form-label">nama barang</label>
            <input
                type="text"
                class="form-control"
                name="nama_barang"
                id=""
                 value="{{ $barang->nama_barang}}"
                aria-describedby="helpId"
                placeholder=""
            />

        </div>
        <div class="mb-3">
            <label for="" class="form-label">ID jenis</label>
            <input
                type="integer"
                class="form-control"
                name="id_jenis"
                id=""
                 value="{{ $barang->id_jens}}"
                aria-describedby="helpId"
                placeholder=""
            />

        </div>
        <div class="mb-3">
            <label for="" class="form-label">harga beli</label>
            <input
                type="integer"
                class="form-control"
                name="harga_beli"
                id=""
                 value="{{ $barang->harga_beli}}"
                aria-describedby="helpId"
                placeholder=""
            />

        </div>
        <div class="mb-3">
            <label for="" class="form-label">harga jual</label>
            <input
                type="integer"
                class="form-control"
                name="harga_jual"
                id=""
                 value="{{ $barang->harga_beli}}"
                aria-describedby="helpId"
                placeholder=""
            />
>
        </div>
       <div class="mb-3">
        <label for="" class="form-label">stok</label>
        <input
            type="number"
            class="form-control"
            name="stok"
            id=""
             value="{{ $barang->stok}}"
            aria-describedby="helpId"
            placeholder=""
        />

       </div>
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>