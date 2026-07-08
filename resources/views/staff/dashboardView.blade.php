<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Staff Dashboard</h1>
    <aside>
      <nav>
        <ul>
          <li><a href="{{ route('staff.dashboard') }}">Dashboard</a></li>
          <li><a href="{{ route('staff.pengajuan') }}">Pengajuan</a></li>
          <li><a href="{{ route('staff.riwayat') }}">Riwayat</a></li>
        </ul>
      </nav>
    </aside>
  </body>
</html>