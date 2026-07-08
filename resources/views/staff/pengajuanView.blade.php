<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Pengajuan</h1>
    <div class="container">
        <form action="{{ route('staff.pengajuan.submit') }}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="no" class="form-label">No. Pengajuan</label>
                <input type="auto-generate" class="form-control" id="no" name="no" required>
            </div>
            <div class="mb-2">
                <label for="tanggal" class="form-label">Tanggal Pengajuan</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="mb-2">
                <label for="nama_pengaju" class="form-label">Nama Pengaju</label>
                <input type="text" class="form-control" id="nama_pengaju" name="nama_pengaju" required>
            </div>
            <div class="mb-2">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <option value="PO Produk">PO Produk</option>
                    <option value="Perbaikan Kendaraan">Perbaikan Kendaraan</option>
                    <option value="Perbaikan Gedung">Perbaikan Gedung</option>
                    <option value="Perbaikan Komputer">Perbaikan Komputer</option>
                    <option value="Maintenance Website">Maintenance Website</option>
                    <option value="Maintenance Server">Maintenance Server</option>
                    <option value="Maintenance Jaringan">Maintenance Jaringan</option>
                    <option value="Biaya Kendaraan">Biaya Kendaraan</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="nilai_pengajuan" class="form-label">Nilai Pengajuan</label>
                <input type="decimal" class="form-control" id="nilai_pengajuan" name="nilai_pengajuan" required>
            </div>
            <div class="mb-2">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-2">
                <label for="lampiran" class="form-label">Lampiran Dokumen</label>
                <input type="file" class="form-control" id="lampiran" name="lampiran" required>
            </div>
            <div class="mb-2">
                <label for="status" class="form-label">Status</label>
                <input type="workflow" class="form-control" id="status" name="status" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </body>
</html>