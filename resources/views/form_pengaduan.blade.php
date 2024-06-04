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
                <span><a href="/metrolink/service" style="padding: 10px 22px 10px 22px;text-decoration: none;color: aliceblue;background-color: #1e1e1e;border-radius: 7px;">Back</a></span>
                <hr>

                <form action="/metrolink/agenda_kota/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="telepon">Nomor Telepon Penanggung Jawab</label>
                        <input type="text" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" value="{{ old('telepon') }}"
                            class="form-control @error('telepon') is-invalid @enderror">
                        @error('telepon')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="judul_pengaduan">Judul Pengaduan</label>
                        <input type="text" id="judul_pengaduan" name="judul_pengaduan" placeholder="Masukkan Judul Pengaduan" value="{{ old('judul_pengaduan') }}"
                            class="form-control @error('judul_pengaduan') is-invalid @enderror">
                        @error('judul_pengaduan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="foto">Upload Gambar</label>
                        <input type="file" id="foto" name="foto" class="form-control @error('foto') is-invalid @enderror">
                        @error('foto')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="deskripsi_pengaduan">Deskripsi Pengaduan</label>
                        <textarea class="form-control" id="deskripsi_pengaduan" rows="3" placeholder="Masukkan Deskripsi Pengaduan" name="deskripsi_pengaduan">{{ old('deskripsi_pengaduan') }}</textarea>
                        @error('deskripsi_pengaduan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan Alamat" name="alamat">{{ old('alamat') }}</textarea>
                        @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
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
