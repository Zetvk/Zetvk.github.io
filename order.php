
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
    <title>Корзина</title>
    <link type="Image/x-icon" href="./assets/images/favicon.ico" rel="icon">
</head>
<body>
    <header class="header">
        <div class="container-fluid">
            <nav class="navbar-expand-lg">
                <a class="nav-link" href="index.html">
                    <img src="assets/images/book-logo.jpg" style="width: 75px; height: 65px;" alt="logo">
                </a>
                <a class="nav-link" href="catalog.php"> Каталог </a>
                <a class="nav-link" href="order.php"> Корзина </a>
            </nav>
        </div>

    </header>
    <div class="container">
        <div class="row justify-content-center mt-4">
          <div class="col-sm-4">
            <div class="card m-4">
            <img src="assets/images/img.jpg" class="card-img-top"  alt="Ведьмак">
              <div class="card-body">
                <h5 class="card-title">Ведьмак</h5>
                <p class="card-text">В мире, где существуют магия и чудовища, Геральт из Ривии - один из последних ведьмаков, профессиональных убийц нечисти..</p>
                <p class="card-text">2400 ₽</p>
                <a href="#" class="btnc2">Удалить из корзины</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card m-4">
                <img src="assets/images/img (1).jpg" class="card-img-top" alt="Властелин колец">
              <div class="card-body">
                <h5 class="card-title">Властелин колец</h5>
                <p class="card-text">В древние времена эльфийский кузнец Саурон создал Кольцо Всевластия, в которое вложил свою силу и злобу. Также но давало  власть над другими ... </p>
                <p class="card-text">1500 ₽</p>
                <a href="#" class="btnc2">Удалить из корзины</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form action="script2.php" method="POST">
        <div class="form-row">
          <div class="col">
            <label for="inputMail">Электронная почта</label>
            <input type="text" name="mail" class="form-control" id="inputMail"  placeholder="name@example.com">
          </div>
          <div class="col">
            <label for="inputName">Ваше имя</label>
            <input type="text" name="name" class="form-control" id="inputName"  placeholder="Введите имя">
          </div>
        </div>
        <div class="form-row" style="margin-top: 20px;">
            <div class="col">
                <label for="inputPhone">Номер телефона</label>
              <input type="text" name="phone" class="form-control" id="inputPhone"  placeholder="8xxxxxxxx-xx">
            </div>
            <div class="col">
                <label for="inputAddress">Ваш адрес</label>
              <input type="text" name="address" class="form-control" id="inputAddress"  placeholder="Введите адрес">
            </div>
          </div>
          <div class="flex">
  <input type="submit" class="form-btn" name="submit" value="Оформить заказ">
</div>
      </form>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row" style="align-items: center;">
                <div class="col">
                    <p class="footer-info">2023 Демонстрационный сайт <br> студента УлГУ группы <br> ИС-О-20/1 Половникова Дмитрия</p>
                </div>
                <div class="col" style="text-align: end;">
                    <img src="assets/images/book-logo.jpg" style="width: 10%; height: 10%;" alt="logo">
                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>