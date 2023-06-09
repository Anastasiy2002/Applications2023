
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
      
      <span class="fs-4" id='logo-site' >Абитуриенты России</span>
    </a>

    <ul class="nav nav-pills" style="margin-right: 100px;">
      <li class="nav-item"><a href="/logout" class="nav-link active" aria-current="page">Выйти</a></li>
     
    </ul>
</header>
<form class="needs-validation" id="edit-form" >
        @csrf
    
        <div class="row g-3" style="margin-left: 100px; margin-right: 100px;">
        
            <div class="col-12">
            <p class="my-profile">Мой профиль</p>
                <label class="form-label">Email<span class="text-body-secondary"></span></label>
                <input type="email" class="form-control"  id="email-id" name="email" value="<?php

                

                $user = auth()->user();
                $res = $user->email;
                echo $res;
                ?>" placeholder="you@example.com"  required>

            
                
            </div>
       
        <button class="w-100 btn btn-primary btn-lg" type="submit" style="margin-bottom: 50px;" id="btnSubmitSave">Изменить</button>
        </div>
    </form>
    <form class="form-validation" id="anketa-form" >
        @csrf
        <div class="row g-3" style="margin-left: 100px; margin-right: 100px;">
        
            <div class="col-12">
                <label class="form-label">Город проживания<span class="text-body-secondary"></span></label>
                <input type="text" class="form-control" id="city" name="city" value="<?php
               
                $user = auth()->user();
                $res = $user->city;
                echo $res;
                ?>">
                
            </div>
            <div class="col-12">
                <label class="form-label">Телефон<span class="text-body-secondary"></span></label>
                <input type="text"  class="form-control" id="telephone-id" name="telephone" placeholder="8-000-000-00-00"  value="<?php

                $user = auth()->user();
                $res = $user->telephone;
                echo $res;
                ?>">
                
            </div>
            <div class="col-12">
                <label class="form-label">Дата рождения<span class="text-body-secondary"></span></label>
                <input type="text" class="form-control" id="date-b-id" name="date" placeholder="dd.mm.yyyy"  value="<?php

                $user = auth()->user();
                $res = $user->date;
                echo $res;
                ?>">
                
            </div>
            <div class="col-12">
                <label class="form-label">Образование<span class="text-body-secondary"></span></label>
                <input type="text" class="form-control" id="edition-id" name="education"  value="<?php

                $user = auth()->user();
                $res = $user->education;
                echo $res;
                ?>">
                
            </div>
       
        <button class="w-100 btn btn-primary btn-lg" type="submit" style="margin-bottom: 50px;" id="btnSubmitSave">Сохранить</button>
        </div>
    </form>


<br>
<br>
<br>
<br>
<br>

<div id="myNav" class="overlay">

<!-- Кнопка для закрытия навигации наложения -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Верхний слой содержимого -->
<div class="overlay-content">
  <a href="/profile">Главная</a>
  <a href="/profile_edit">Изменить данные</a>
  <a href="/logout">Выход</a>
</div>

</div>



<!-- Используйте любой элемент для открытия / отображения меню навигации наложения -->
<script>

        $(document).on("submit", "form#edit-form", function(event){
        event.preventDefault();
        var form = $('#edit-form')[0];
        var data_form = new FormData(form);

        //$('#btnSubmit').prop('disabled', true);

        $.ajax({
        //headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "/change_login",
        data: data_form,
        processData: false,
        contentType:false,
        success:function(data){
            if (data.res == 'not'){
                alert("Такой Email уже используется!")
            }
            else if (data.res == 'true'){
                alert("Email успешно изменен!")
            }
            
            else{
                alert("Ошибка")
                
            }
            },
        error:function(e){
            alert(e.responseText)
               // $('#btnSubmit').prop('disabled', false);
            }
        })
    })
    $(document).on("submit", "form#anketa-form", function(event){
        event.preventDefault();
        var form = $('#anketa-form')[0];
        var data_form = new FormData(form);

        //$('#btnSubmit').prop('disabled', true);

        $.ajax({
        //headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "/save_data",
        data: data_form,
        processData: false,
        contentType:false,
        success:function(data){
          
            if (data.res == 'true'){
                alert("Данные успешно сохранены!")
            }
            
            },
        error:function(e){
            alert(e.responseText)
               // $('#btnSubmit').prop('disabled', false);
            }
        })
    })


function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Закрыть, когда кто-то нажимает на символ "x" внутри наложения */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


</script>
<script>

document.getElementById('logo-site')
  .addEventListener('click', () => location = '/profile');
</script>
    </body>
</html>
