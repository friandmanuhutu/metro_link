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
                <h1>Ajukan Event</h1>
                <span><a href="/metrolink/agenda_kota" style="padding: 10px 22px 10px 22px;text-decoration: none;color: aliceblue;background-color: #1e1e1e;border-radius: 7px;">Back</a></span>
                <hr>

                {{-- Tampilkan pesan sukses jika ada --}}
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('agenda_kota.storeAgenda') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nama_penyelenggara">Nama Penyelenggara</label>
                        <input type="text" id="nama_penyelenggara" name="nama_penyelenggara" placeholder="Masukkan Nama Penyelenggara" value="{{ old('nama_penyelenggara') }}"
                            class="form-control @error('nama_penyelenggara') is-invalid @enderror">
                        @error('nama_penyelenggara')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="nama_event">Nama Event</label>
                        <input type="text" id="nama_event" name="nama_event" placeholder="Masukkan Nama Event" value="{{ old('nama_event') }}"
                            class="form-control @error('nama_event') is-invalid @enderror">
                        @error('nama_event')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="kategori">Kategori</label>
                        <input type="text" id="kategori" name="kategori" placeholder="Masukkan Kategori" value="{{ old('kategori') }}"
                            class="form-control @error('kategori') is-invalid @enderror">
                        @error('kategori')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="deskripsi_event">Deskripsi Event</label>
                        <textarea class="form-control" id="deskripsi_event" rows="3" placeholder="Masukkan Deskripsi Event" name="deskripsi_event">{{ old('deskripsi_event') }}</textarea>
                        @error('deskripsi_event')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="tanggal_pelaksanaan">Tanggal Pelaksanaan</label>
                        <input type="date" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan" value="{{ old('tanggal_pelaksanaan') }}"
                            class="form-control @error('tanggal_pelaksanaan') is-invalid @enderror">
                        @error('tanggal_pelaksanaan')
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
