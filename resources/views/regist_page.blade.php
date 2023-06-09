<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Абитуриенты России</title>
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"></script>
      <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Абитуриенты России</span>
    </a>

    <ul class="nav nav-pills" style="margin-right: 30px;">
      <li class="nav-item"><a href="/registration" class="nav-link active" aria-current="page">Регистрация</a></li>
      <li class="nav-item"><a href="/login" class="nav-link">Войти</a></li>
    </ul>
</header>

    <form class="needs-validation"  id='login-form1'>
    @csrf
      <div class="row g-3" style="margin-left: 100px; margin-right: 100px;">
        <div class="col-sm-4">
          <label for="firstName" class="form-label">Имя</label>
          <input type="text" name="firstname" class="form-control" id="firstName" placeholder="" value="" required="">
        </div>

        <div class="col-sm-4">
          <label for="lastName" class="form-label">Фамилия</label>
          <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="" required="">
        </div>

        <div class="col-sm-4">
          <label for="surName" class="form-label">Отчество</label>
          <input type="text" class="form-control" id="surName" placeholder="" value="" name="surname">
        </div>

        <div class="col-12">
          <label for="email" class="form-label">Email<span class="text-body-secondary"></span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
          
        </div>
        <label for="firstName" class="form-label">Паспорт</label>
        <div class="col-sm-4">

          <input type="text" name="passport_series" class="form-control" id="seria" placeholder="Серия" value="" required="">
        </div>

        <div class="col-sm-4">

          <input type="text" name="passport_number" class="form-control" id="number" placeholder="Номер" value="" required="">
        </div>

        <div class="col-sm-4">

          <input type="text" name="passport_issued" class="form-control" id="issued" placeholder="Выдан" value="" required="">
        </div>

        <div class="col-12">
          <label for="password" class="form-label">Пароль<span class="text-body-secondary"></span></label>
          <input type="password" class="form-control" id="password" name="password">
          
        </div>


      <button id="btn1Submit" class="w-100 btn btn-primary btn-lg" type="submit">Зарегистрироваться</button>
    </form>

    <footer class="container pt-4 my-md-5 pt-md-5 border-top">
      <div class="col-12 col-md">

        <small class="d-block mb-3 text-body-secondary" align="center">© Все права защищены 2023</small>
      </div>
  </footer>
  <script>
        $(document).on("submit", "form#login-form1", function(event){
          event.preventDefault()
        var form = $('#login-form1')[0];
        var data_form = new FormData(form);

        $('#btn1Submit').prop('disabled', true);

        $.ajax({
        type: "POST",
        url: "/registration",
        data: data_form,
        processData: false,
        contentType:false,
        success:function(data){
          
          if (data.res == 'true'){
            alert("Пользователь успешно создан")
            window.location.href = '/profile';
          }else{            
            alert(data.res)
            $('#btn1Submit').prop('disabled', false);}

        },error:function(e){
            alert(e.responseText)
            $('#btn1Submit').prop('disabled', false);

        }
        })
        })

</script>
</body>
</html>