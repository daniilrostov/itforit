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
<html lang="ru">
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
<script type="text/javascript">
var google_conversion_id = 853574067;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "bE8aCNeY93AQs4OClwM";
var google_remarketing_only = false;
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
  <p class="text-justify">Быстро и качественно</p>
	<ul class="text-justify" style="font-size: 20px;">
		<li>Аутсорсинговые услуги</li>
		<li>Обслуживание компьютерных систем и сетей</li>
		<li>Обслуживание офисов </li>
		<li>Обслуживание телефонии</li>
	</ul>
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
	<img class="logo-small" alt="" src="./foto/phone.png" />
      <h4>Телефония</h4>
      <p>Настройка и техническая поддержка классической и voip телефонии.</p>
    </div>
    <div class="col-sm-4">
	<img class="logo-small" alt="" src="./foto/asterisk.png" />
      <h4>Интернет телефония</h4>
      <p>Аутсорсинговые услуги, установка и настройка Asterisk, настройка абонентского voip оборудования и шлюза. </p>
    </div>
    <div class="col-sm-4">
      <img class="logo-small" alt="" src="./foto/My-Workgroup-icon.png" />
      <h4>Сеть</h4>
      <p>Обслуживание локальных сетей, сетевого оборудования, настройка клиент-серверного взаимодействия межсетевых экранов. </p>
    </div>
		<div class="col-sm-4">
      <img class="logo-small" alt="" src="./foto/Apps-config-icon.png" />
      <h4>ПК</h4>
      <p>Компьютерное обслуживание офисов, выявление неисправностей, мелкий ремонт.</p>
    </div>
		<div class="col-sm-4">
      <img class="logo-small" alt="" src="./foto/Printers-Faxes-icon.png" />
      <h4>Принтеры и факсы</h4>
      <p>It обслуживание офисов, диагностика и устранение неисправности сетевых принтеров и факсов.</p>
    </div>
		<div class="col-sm-4">
      <img class="logo-small" alt="" src="./foto/Apps-tux-icon.png" />
      <h4>Unix подобные ОС</h4>
      <p>Абонентское обслуживание серверов</p>
    </div>
	</div>
</div>
  <br><br>
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
          <p><strong>0p</strong> Работы выполняемые <br />менее чем за <strong>30</strong> минут: <br />Настройка принтера, <br />факса, VoIP шлюза и т.д.</p>
          <p><strong>Цена договорная:</strong> Более <strong>30</strong> <br />минут, зависит от объёма <br />и сложности выполняемых работ</p>
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
<div id="about" class="container-fluid">
  <div class="row">
		<h2 style="text-align: center;">О компании</h2><br>
    <div class="col-sm-8">
      <h4>Наша команда специалистов работает на результат. Мы занимаемся обслуживанием и пусконаладкой компьютеров, локальных сетей и телефонией. Наши ценности, при выполнении поставленных задач-это гибкость, индивидуальный подход и совершенствование качества своих работ и услуг.
Клиентами нашей компании являются: бизнес-центры, коммерческие фирмы и физические лица.</h4><br>
      <p>Выбирая нашу компанию, вы получаете:</p>
				<ul>
<li>Индивидуальный подход.</li>
<li>Высококачественное обслуживание и гарантию на все выполненные работы.</li>
<li>Оперативное решение поставленных вами задач.</li>
</ul>
    </div>
    <div class="col-sm-4">
	<img style="margin: auto;" class="logo slideanim" alt="" src="./foto/compan.jpg" width="270" height="256"/>
    </div>
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <img class="logo slideanim" alt="" src="./foto/arm.png" width="256" height="256" />
    </div>
    <div class="col-sm-8">
      <h2>Наша цель</h2><br>
      <h4><strong>Миссия:</strong> Дать возможность клиенту предоставить обслуживание своей IT инфраструктуры профессиональным специалистам и тем самым снизить свои расходы на техническую поддержку.</h4><br>
      <p><strong>Как к нам обратиться:</strong> Вы можете связаться с нами, заполнив <a href="#contact">форму</a> на сайте или по  <a href="#contact">телефону</a>. На стадии заказа будет предварительно согласован расчёт оказываемых услуг и производимых работ.
				Мы предоставляем различные виды обслуживания: выезд специалиста, удаленная техническая поддержка и услуги системного администратора.</p><br>
    </div>
  </div>
</div>
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
<form method="post">
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
          <input class="btn btn-default pull-right" type="submit" name="send" value="Отправить">
        </div>
      </div>
  </div>
</form>
</div>
</div>
</div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; 2014-<?php echo date("Y");?></p>
</footer>
<script>
$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        window.location.hash = hash;
      });
    }
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
</body>
</html>
