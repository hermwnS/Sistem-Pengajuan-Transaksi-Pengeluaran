<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supervisor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Supervisor Dashboard</h1>
    <aside>
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="supervisor/pengajuanSupervisorView">Pengajuan</a>
        </li>
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link btn btn-link">Logout</button>
            </form>
        </li>
    </aside>
  </body>
</html>