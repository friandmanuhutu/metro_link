<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="/css/createAgenda.css">
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
          <div class="col-md-8 col-xl-6">
            <h1>Ratting</h1>
            <hr>

            <form action="/metrolink/agenda_kota/store" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="nama_peneyelenggara">Nama Penyelenggara</label>
                    <input type="text" id="nama_peneyelenggara" name="nama_penyelenggara" placeholder="Masukkan Nama Penyelenggara Event" value="{{ old('nama_penyelenggara') }}"
                        class="form-control @error('nama_penyelenggara') is-invalid @enderror">
                    @error('nama_penyelenggara')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="deskripsi">Deskripsi Agenda</label>
                    <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukan Deskripsi Event" name="deskripsi">{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="tanggal_pelaksanaan">Tanggal Pelaksanaan</label>
                    <input type="date" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan"
                        class="form-control @error('tanggal_pelaksanaan') is-invalid @enderror">
                    @error('tanggal_pelaksanaan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="submit" id="submit-agenda" name="submit-agenda">
                </div>

            </form>

          </div>
        </div>
      </div>
</body>

</html>
