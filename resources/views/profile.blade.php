
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"></script>
      
    </head>


<body>


<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      
      <span class="fs-4" id='logo-site'>Абитуриенты России</span>
    </a>

    <ul class="nav nav-pills" style="margin-right: 100px;">
      <li class="nav-item"><a href="/logout" class="nav-link active" aria-current="page">Выйти</a></li>
     
    </ul>
</header>

<div class="main-head-profile">
<div class="lk-main">
<p class="welcome-text"><?php

$user = auth()->user();
echo 'Привет, ';
echo '<br>';
$res = $user->firstname;
echo $res;
?></p>
<p style="font-size: 30px;">Наша платформа позволит тебе составить траекторию поступления в лучшие вузы России</p>
<a id="edit-profile" class="btn btn-lg btn-light fw-bold border-black bg-white " style="margin-top: 60px;">Редактировать профиль</a>
</div>
<img src="{{ asset('public/img.png') }}" width="400" class="decore-img" >
</div>
<script>

document.getElementById('logo-site')
  .addEventListener('click', () => location = '/profile');


  document.getElementById('edit-profile')
  .addEventListener('click', () => location = '/profile_edit');
</script>

    </body>
</html>
