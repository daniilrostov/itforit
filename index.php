<?php
session_start();
if ($_GET["send"] == 1) {
	$note_sent = "Отправленна заявка от имени ".$_SESSION["name"];
}
?>
<?php
session_start();
if(isset($_POST["send"])) {
        $name = $_POST["name"];
        $comments = $_POST["comments"];
        $email = $_POST["email"];
        $_SESSION["comments"] = $comments;
        $_SESSION["name"] = $name;
	$note_sent = "";
        $error_comments = "";
	$error_name = "";
        $error_email = "";
        $error = false;
	if($name == "" || mb_strlen($name)>10) {
                $error_name="Не более 10 знаков";
                $error = true;
                }
	if($email == "" || mb_strlen($email)>22) {
                $error_email="Не более 15 знаков";
                $error = true;
                }
        if ($comments == "" || mb_strlen($comments)>100) {
                $error_comments = "Введите сообщение не более 100 знаков!";
                $error = true;
        }
        if(!$error) {
                $subject = "=?utf-8?B?".base64_encode($subject)."?=";
                $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
                mail('daniil-rostov@list.ru', "$name создал(а) заявку на ИТ помощь", "$comments. Мой контакт $email");
                header("Location: index.php?send=1");
                exit;
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Обслуживание компьютеров, локальных вычислительных и телефонных сетей</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Google Code for &#1079;&#1072;&#1082;&#1072;&#1079; &#1091;&#1089;&#1083;&#1091;&#1075;&#1080; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 853574067;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "bE8aCNeY93AQs4OClwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/853574067/?label=bE8aCNeY93AQs4OClwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">ITFORIT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#services">УСЛУГИ</a></li>
        <li><a href="#pricing">ЦЕНЫ</a></li>
        <li><a href="#about">О КОМПАНИИ</a></li>
        <li><a href="#contact">КОНТАКТЫ</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center">
  <h1 class="text-left">IT услуги</h1>
  <p class="text-justify">Аутсорсинговые услуги<br /> Обслуживание компьютерных систем и сетей<br /> Обслуживание офисов <br /> Обслуживание телефонии</p>
</div>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="services" class="container-fluid text-center">
  <h2>УСЛУГИ</h2>
  <h4>Что мы предлагаем</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
	<img class="logo-small" src="./foto/phone.png"></img>
      <h4>Телефония</h4>
      <p>Настройка телефонии. Техническая поддержка, настройка VoIP и классической телефонии.</p>
    </div>
    <div class="col-sm-4">
	<img class="logo-small" src="./foto/asterisk.png"></img>
      <h4>Интернет телефония</h4>
      <p>Аутсорсинговые услуги, установка Asterisk, настройка Asterisk. Настройка абонентского VoIP оборудования, настройка шлюза</p>
    </div>
    <div class="col-sm-4">
      <img class="logo-small" src="./foto/My-Workgroup-icon.png"></img>
      <h4>Сеть</h4>
      <p>Обслуживание локальных сетей. Обслуживание сетевого оборудования. Нстройка клиент-серверного взаимодействия, межсетевых экранов.</p>
    </div>
<div class="col-sm-4">
      <img class="logo-small" src="./foto/Apps-config-icon.png"></img>
      <h4>ПК</h4>
      <p>Компьютерное обслуживание офисов. Выявление неисправности ПК, мелкий ремонт</p>
    </div>
<div class="col-sm-4">
      <img class="logo-small" src="./foto/Printers-Faxes-icon.png"></img>
      <h4>Принтеры и факсы</h4>
      <p>ИТ обслуживание офисов. Диагностика неисправности сетевых принтеров, факсов.</p>
    </div>
<div class="col-sm-4">
      <img class="logo-small" src="./foto/Apps-tux-icon.png"></img>
      <h4>Unix подобные ОС</h4>
      <p>Абонентское обслуживание серверов</p>
    </div>
  </div>
  <br><br>
<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid bg-grey">
  <div class="text-center">
    <h2>Компьютерные услуги прайс</h2>
    <h4>Возможно формирование индивидуального плана</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Однократные работы</h1>
        </div>
        <div class="panel-body">
          <p><strong>1500p</strong> Выезд специалиста</p>
          <p><strong>0p</strong> Работы выполняемые </br>менее чем за <strong>30</strong> минут: </br>Настройка принтера, </br>факса, VoIP шлюза и т.д.</p>
          <p><strong>Цена договорная:</strong> Более <strong>30</strong> </br>минут, зависит от объёма </br>и сложности выполняемых работ</p>
        </div>
        <div class="panel-footer">
          <h3>1500 Р</h3>
          <h4>Минимально</h4>
          <a href="#contact" class="btn btn-lg">Заказать</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Абонентское обслуживание</h1>
        </div>
        <div class="panel-body">
          <p><strong>3000 р</strong> До 5 компьютеров</p>
          <p><strong>10000 р</strong> 10 компьютеров и сервер</p>
          <p><strong>25000 р</strong> 25 компьютеров и сервер</p>
          <p><strong>Удалённое обслуживаие, плановые и экстренные выезды</strong></p>
        </div>
 <div class="panel-footer">
          <h3>3000 р</h3>
          <h4>Минимально</h4>
	<a href="#contact" class="btn btn-lg">Заказать</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Однократно удалённо</h1>
        </div>
        <div class="panel-body">
          <p><strong>До 1000р</strong> Удалённое решение проблеммы по телефону, без выезда специалиста.</p>
        </div>
        <div class="panel-footer">
          <h3>1000 р</h3>
          <h4>Максимально</h4>
	<a href="#contact" class="btn btn-lg">Заказать</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>О компании</h2><br>
      <h4>Команда специалистов, работающая на результат. Мы занимаемся обслуживанием и пусконаладкой компьютеров, локальных сетей и оборудования телефонии</h4><br>
      <p>Не редко бывает что на скорость работы ПК влияет качество работы ЛВС (Локальная сеть). Наши специалисты проведут комплексную проверку вашей инфраструктуры.</p>
    </div>
    <div class="col-sm-4">
  <!--    <span class="glyphicon glyphicon-signal logo"></span> -->
	<img class="logo" glyphicon src="./foto/buk.png" width="324" height="236"></img>
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
<!-- arm.png  buk.png  jump.jpg  macbuk.png  patch.jpg  sw.jpg -->
      <img class="logo" src="./foto/arm.png" slideanim" width="324" height="296"></img>
    </div>
    <div class="col-sm-8">
      <h2>Наша цель</h2><br>
      <h4><strong>Миссия:</strong> Дать возможность клиенту предоставить обслуживание своей IT инфраструктуры специалистам,
				и снизить расходы на техническую поддержку.</h4><br>
      <p><strong>Видение:</strong> Вы оформляете заказ по <a href="#contact">форме</a> или по  <a href="#contact">телефону</a>. На стадии заказа согласовывается предварительно расчёт работ.
				Вашим услугам предоставляются различные виды обслуживания, выезд специалиста или удалёная техническая поддержка.
			 Услуги системного администратора.</p><br>
    </div>
  </div>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">Контакты</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Отправьте нам сообщение для заказа услуги</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Санкт-Петербург, RU</p>
      <p><span class="glyphicon glyphicon-phone"></span> 89046453154</p>
      <p><span class="glyphicon glyphicon-envelope"></span><a href="mailto:mail@itforit.ru"> mail@itforit.ru</a></p>
    </div>
    <div class="col-sm-7 slideanim">
<form action="" method="post">
      <div class="row">
	<span style="color:green"><?=$note_sent?></span><br />
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Имя" type="text" required>
	<span style="color:red"><?=$error_name?></span><br />
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email или телефон" type="text" required>
	<span style="color:red"><?=$error_email?></span><br />
        </div>
      </div>
	<div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Сообщение" rows="5"></textarea><br />
	<span style="color:red"><?=$error_comments?></span><br />
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="btn btn-default pull-right" type="submit" name="send" value="Отправить"></input>
        </div>
      </div>
  </div>
</form>
</div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy 2014-<?php echo date("Y");?></p>
</footer>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
