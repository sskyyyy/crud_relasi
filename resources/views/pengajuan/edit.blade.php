<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="margin:20px">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

    <form action="{{ url('pengajuan/' .$pengajuan->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{ $pengajuan->id }}" id="id">
    <label>Nama</label><br>
    <input type="text" name="nama" id="nama" value="{{ $pengajuan->nama}}" class="form-control"><br>
    <label>Kelas</label><br>
    <input type="text" name="kelas" id="kelas" value="{{ $pengajuan->kelas }}" class="form-control"><br>
    <label>Alamat Perusahaan</label><br>
    <input type="text" name="alamat_perusahaan" id="alamat_perusahaan" value="{{ $pengajuan->alamat_perusahaan }}" class="form-control"><br>
    <label>Tanggal Pengajuan</label><br>
    <input type="text" name="tanggal_pengajuan" id="tanggal_pengajuan" value="{{ $pengajuan->tanggal_pengajuan }}" class="form-control"><br>
 
    <input type="submit" value="Update" class="btn btn-success">   
</form> 
</div>
</div>
</body>
</html>