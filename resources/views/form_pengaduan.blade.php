<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="/css/formPengaduan.css">
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
          <div class="col-md-8 col-xl-6">
            <h1>Ajukan Kendala</h1>
            <hr>

            <form action="/metrolink/agenda_kota/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="nama_peneyelenggara">Username</label>
                    <input type="text" id="nama_peneyelenggara" name="nama_penyelenggara" placeholder="Masukkan Username" value="{{ old('nama_penyelenggara') }}"
                        class="form-control @error('nama_penyelenggara') is-invalid @enderror">
                    @error('nama_penyelenggara')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="nomor_telepon">Nomor Telepon</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" value="{{ old('nomor_telepon') }}"
                        class="form-control @error('nomor_telepon') is-invalid @enderror">
                    @error('nomor_telepon')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="gambar">Upload Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                    @error('gambar')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="deskripsi">Deskripsi Foto</label>
                    <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi Foto" name="deskripsi">{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-3">
                    <input type="submit" id="submit-agenda" name="submit-agenda" class="btn btn-primary">
                </div>
            </form>



          </div>
        </div>
      </div>
</body>

</html>
