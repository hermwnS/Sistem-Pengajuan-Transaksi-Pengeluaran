<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Pengajuan Masuk</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Pengaju</th>
            <th scope="col">Kategori</th>
            <th scope="col">Nilai Pengajuan</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Lampiran</th>
            <th scope="col">Status</th>
            <th scope="col">Catatan</th>
            </tr>
        </thead>
        <tbody>
            foreach($pengajuan as $p){
                <tr>
                    <td>$p->no_pengajuan++</td>
                    <td>$p->tanggal</td>
                    <td>$p->nama_pengaju</td>
                    <td>$p->kategori</td>
                    <td>$p->nilai_pengajuan</td>
                    <td>$p->deskripsi</td>
                    <td>$p->lampiran</td>
                    <td>$p->status</td>
                </tr>
            }
        </tbody>
    </table>
  </body>
</html>