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

      <main class="px-3">
        <h1>Абитуриенты России</h1>
        <p class="lead">Лучшая платформа для поступления в топовые ВУЗы Росии. <br>Начни подготовку уже сейчас!</p>
        <p class="lead">
          <a href="#1" class="btn btn-lg btn-light fw-bold border-black bg-white">Узнать подробнее</a>
        </p>
      </main>
  <div class="about_site">
    <p class="text-about" id="1">
      Россия — страна потрясающих возможностей для получения высшего образования. По состоянию на 2023 год в России насчитывалось 1 208 вузов. Это 896 государственных учебных заведений. Из них 510 филиалов, 10 федеральных университетов, 29 национальных исследовательских университетов, 21 участник проекта 5-100. А также 312 частных образовательных организаций. В вузах РФ обучается 4,1 млн. студентов. В 2023 году в вузах России предусмотрено 1 969 000 бюджетных мест. Сайт предоставляет абитуриенту 2023 возможность сравнить и выбрать вузы, программы образования, пройти профориентацию и оценить свои шансы поступить. Полный справочник абитуриента для поступающих в вузы.
    </p>

    
  </div>
       <footer class="pt-4 my-md-5 pt-md-5 border-top">
          <div class="col-12 col-md">

            <small class="d-block mb-3 text-body-secondary" align="center">© Все права защищены 2023</small>
        
          </div>
      </footer>
    

</body>
</html>