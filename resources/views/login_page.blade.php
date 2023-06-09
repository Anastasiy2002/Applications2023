<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Абитуриенты России</title>
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"></script>
        
</head>
<body>

  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Абитуриенты России</span>
    </a>

    <ul class="nav nav-pills" style="margin-right: 30px;">
      <li class="nav-item"><a href="/registration" class="nav-link">Регистрация</a></li>
      <li class="nav-item"><a href="/login" class="nav-link active"  aria-current="page">Войти</a></li>
    </ul>
</header>




    <form class="needs-validation" id="login-form">
        @csrf
        <div class="row g-3" style="margin-left: 100px; margin-right: 100px;">
        
            <div class="col-12">
                <label class="form-label">Email<span class="text-body-secondary"></span></label>
                <input type="email" class="form-control" id="email-id" name="email"  placeholder="you@example.com" required>
                
            </div>
        
            <div class="col-12">
                <label class="form-label">Пароль<span class="text-body-secondary"></span></label>
                <input type="password" class="form-control" id="password-id"  name="password" required>
                
            </div>
        
        <button class="w-100 btn btn-primary btn-lg" type="submit" style="margin-bottom: 187px;" id="btnSubmit">Войти</button>
        </div>
    </form>

    <footer class="container pt-4 my-md-5 pt-md-5 border-top">
      <div class="col-12 col-md">

        <small class="d-block mb-3 text-body-secondary" style='text-align: center;'>© Все права защищены 2023</small>
      </div>
  </footer>

  <script>
        $(document).on("submit", "form#login-form", function(event){
        event.preventDefault();
        var form = $('#login-form')[0];
        var data_form = new FormData(form);

        //$('#btnSubmit').prop('disabled', true);

        $.ajax({
        //headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "/login",
        data: data_form,
        processData: false,
        contentType:false,
        success:function(data){
            if (data.res == "true"){
               
               alert("Успешно")
               window.location.href = '/profile';
            }
            if (data.res == 'none'){
                alert("Неверный логин или пароль!")
                
            }
            },
        error:function(e){
            alert("Ошибка данных. Попробуйте еще раз!")
                $('#btnSubmit').prop('disabled', false);
            }
        })
    })


</script>
</body>
</html>