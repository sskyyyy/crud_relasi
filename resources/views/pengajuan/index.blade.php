
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row" style="margin:20px">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Laravel 10 Crud (Create, Read, Update, and Delete)</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('pengajuan/create')  }}" class="btn btn-success btn-sm" title="Add New Pengajuan">
                    Tambah Siswa Baru
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Alamat Perusahaan</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengajuan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->alamat_perusahaan }}</td>
                                <td>{{ $item->tanggal_pengajuan }}</td>
                                <td>
                                    <a href="{{url('/pengajuan/' .$item->id)}}" title="View"><button class="btn btn-info btn-sm "><i aria-hidden="true"></i><i>Lihat</i></button></a>
                                    <a href="{{url('/pengajuan/' .$item->id . '/edit')}}" title="Edit"><button class="btn btn-primary btn-sm"><i aria-hidden="true"></i><i>Edit</i></button></a>
                                    <form method="post" action="{{ url('/pengajuan/'  . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn-danger btn-sm" onclick="return confirm("Confirm Delete?")"><i aria-hidden="true"></i>Hapus</button></a>
                                    </form>
                                    </td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>
</div>
</div>
</body>
</html>

