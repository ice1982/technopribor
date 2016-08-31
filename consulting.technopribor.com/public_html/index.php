<?php

require_once('_params.php');

$default_city = 'Москва';
if ( (isset($_COOKIE['you_city'])) && (!empty($_COOKIE['you_city'])) ) {
    $city = $_COOKIE['you_city'];
} else {
    require_once("ipgeobase.php");
    $gb = new IPGeoBase();
    $ip = $_SERVER["REMOTE_ADDR"];
    $data = $gb->getRecord($ip);
    $city = (isset($data['city'])) ? mb_convert_encoding($data['city'], 'UTF-8', 'Windows-1251') : $default_city;
}

?>
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

        <meta name="keywords" content="" >
        <!-- <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1, user-scalable=no" > -->
        <meta name="description" content="" >

        <!-- <meta http-equiv="Cache-Control" content="public" > -->

        <link id="favicon" rel="icon" href="/favicon.ico" type="image/x-icon" >

        <title>Интралогистический консалтинг — ОАО «Техноприбор»</title>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?=$metrika_code;?>

        <link rel="stylesheet" type="text/css" href="css/main.css" media="screen" >
        <script type="text/javascript" src="js/main.js"></script>
    </head>

    <body data-spy="scroll" data-target="#mainNavbar">
        <div class="infoblock">
            <span></span>
            <div class="close-info">&times;</div>
        </div>
        <!--.infoblock-->

        <!-- Шапка -->
        <div id="block-1" class="block block-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="logo">
                            <img src="img/logo.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="description">
                            Работаем более 30 лет
                            <br>
                            на рынке интралогистических решений
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="adress">
                            пн. – пт. 8.00 – 17.00
                            <br>Есть вопросы? Звоните.
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="geo-phone">
                            <a href="tel:+78352377766">+7 (8352) 377 766</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Меню -->
        <div id="block-2" class="block block-2">

            <nav class="navbar navbar-default navbar-transparent" id="mainNavbar">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#block-5">Основные услуги</a>
                            </li>
                            <li>
                                <a href="#block-6">Наши клиенты</a>
                            </li>
                            <li>
                                <a href="#block-9">Отзывы</a>
                            </li>
                            <li>
                                <a href="#block-10">О компании</a>
                            </li>
                            <li>
                                <a href="#block-11">Сертификаты</a>
                            </li>
                            <li>
                                <a href="#block-12">Написать нам</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right dop-menu">
                            <li class="city on-top-only">
                                <span>Ваш город: </span><a id="your-city" class="fnbx actual-city" href="#fnbx-2"><?=$city?></a>
                                <div class="is-your-city">
                                    <p class="show-on-mobile">Ваш город <?=$city?></p>
                                    <p>Все верно?</p>
                                    <span onClick="changeCity('<?=$city?>');$('.is-your-city').hide();">Да</span>
                                    <span class="fnbx" href="#fnbx-2">Нет</span>
                                </div>
                            </li>
                            <li class="recall">
                                <a href="#fnbx-1" class="oreder-recall" onClick="$('.small-recall').show()">Заказать звонок</a>
                                <div class="small-recall">
                                    <form action="mail.php" method="post">
                                        <input type="text" name="phone" placeholder="Введите ваш телефон" >
                                        <input type="hidden" name="info" value="Заявка обр. звонок" >
                                        <input type="hidden" name="target" value="zakaz2" >
                                        <br>
                                        <button class="submit btn btn-red btn-nl w-100">Перезвоните мне</button>
                                    </form>
                                </div>
                            </li>
                            <li class="phone after-scroll-only">
                                <a href="tel:+78352377766" class="geo-phone">+7 (8352) 377 766</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </div>

        <!-- Баннер с главной услугой -->
        <div id="block-3" class="block block-3">
            <div class="container">

                <div class="main-offer">
                    <h1 class="text-light-color text-center">Оптимизация внутрипроизводственных логистических систем</h1>
                    <h2 class="text-brand-color text-center">Полный комплекс интралогистических услуг<br>От аудита до внедрения систем</h2>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="ordering-description">
                            <h3 class="text-light-color text-right order-title">Получите бесплатную<br>консультацию от наших специалистов<br>по интралогистическим решениям</h3>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="ordering">
                            <form action="mail.php" method="post">
                                <input type="text" name="phone" placeholder="Введите ваш телефон" >
                                <input type="hidden" name="info" value="Получить бесплатную консультацию (Форма в шапке)" >
                                <input type="hidden" name="target" value="zakaz3" >
                                <br>
                                <button class="submit btn btn-lg btn-red">Получить бесплатную консультацию</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- З бенефита -->
        <div id="block-4" class="block block-4">
            <div class="container">
                <div class="row">
                    <div class="yaiki">
                        <div class="col-xs-4">
                            <p class="yaika-1">Выезд специалиста в<br>г.&nbsp;<span class="actual-city"><?=$city?></span></p>
                        </div>
                        <div class="col-xs-4">
                            <p class="yaika-2">Более 30&nbsp;лет работы<br>в&nbsp;сфере интралогистики</p>
                        </div>
                        <div class="col-xs-4">
                            <p class="yaika-3">Подготовка проектов любой степени сложности</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Перечень услуг -->
        <div id="block-5" class="block block-5">
            <div class="container">
                <h3 class="text-center">Мы&nbsp;предлагаем вам полное или частичное участие</h3>
                <h2 class="text-center text-uppercase">в&nbsp;проекте по&nbsp;улучшению вашей интралогистической системы</h2>

                <div class="kak-rab">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="kr-item kr-1">
                                <div class="num">1</div>
                                <div class="ktooltip tl-tip">Проводим аудит вашей системы</div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="kr-item kr-2">
                                <div class="num">2</div>
                                <div class="ktooltip br-tip">Выявляем ключевые показатели</div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="kr-item kr-3">
                                <div class="num">3</div>
                                <div class="ktooltip tr-tip">Находим узкие места</div>
                            </div>
                        </div>

                        <div class="col-xs-4">
                            <div class="kr-item kr-4">
                                <div class="num">4</div>
                                <div class="ktooltip tl-tip">Предоставляем пакет рекомендаций</div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="kr-item kr-5">
                                <div class="num">5</div>
                                <div class="ktooltip tr-tip">Разрабатываем проект</div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="kr-item kr-6">
                                <div class="num">6</div>
                                <div class="ktooltip tr-tip">Подбираем оборудование<br>и внедряем</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Довольные клиенты -->
        <div id="block-6" class="block block-6">
            <div class="container">

                <h2 class="text-center">Эти организации улучшили с&nbsp;нами свои показатели</h2>
                <h3 class="text-center text-brand-color">Присоединяйтесь!</h3>

                <div class="logos">
                    <table>
                        <tr>
                            <td>
                                <img src="img/logo_01.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_02.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_03.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_04.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_05.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_06.png" alt="" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="img/logo_07.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_08.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_09.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_10.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_11.png" alt="" >
                            </td>
                            <td>
                                <img src="img/logo_12.png" alt="" >
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="ordering-description">
                            <h3 class="text-dark-color text-right order-title">Получите бесплатную<br>консультацию от наших специалистов<br>по инстралогистическим решениям</h3>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="ordering">
                            <form action="mail.php" method="post">
                                <input type="text" name="phone" placeholder="Введите ваш телефон" >
                                <input type="hidden" name="info" value="Получить бесплатную консультацию" >
                                <input type="hidden" name="target" value="zakaz6" >
                                <br>
                                <button class="submit btn btn-lg btn-red">Получить бесплатную консультацию</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="block-7" class="block block-7">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-left col-xs-6">
                        <div class="mosaic">
                            <div>
                                <div class="row">
                                    <div class="col col-xs-2">
                                        <a href="img/old_001.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_001.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_013.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_013.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_016.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_016.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_018.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_018.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_021.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_021.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_022.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_022.jpg" alt="" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col col-xs-2">
                                        <a href="img/old_001.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_024.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_013.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_030.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_016.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_031.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_018.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_032.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_002.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_002.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_003.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_003.jpg" alt="" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col col-xs-2">
                                        <a href="img/old_004.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_004.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_005.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_005.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_006.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_006.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_007.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_007.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_008.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_008.jpg" alt="" >
                                        </a>
                                    </div>
                                    <div class="col col-xs-2">
                                        <a href="img/old_009.jpg" class="thumbnail fnbx" rel="random-gallery">
                                            <img src="img/old_009.jpg" alt="" >
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-right col-xs-6">
                        <h1 class="text-light-color">Наша <span class="text-brand-color">компания занимается</span> <br>интралогистическими решениями<br>уже <span class="text-brand-color">более 30&nbsp;лет</span></h1>
                    </div>
                </div>
            </div>
        </div>

       <div id="block-7_1" class="block block-7_1">
           <div class="container">
               <h2 class="text-center">Лучшие&nbsp;практики&nbsp;(бенчмаркинг)</h2>
               <p class="text-center">Наши интралогистические решения изо дня в день улучшают качественные и количественные показатели работы на многих производствах и складах по всему миру. Мы гордимся своим делом, повышающим благосостояние наших клиентов на более 300 объектах. Именно поэтому мы открыты к диалогу в вопросах организации референц-визитов исходя из вашей специфики. Обратитесь к нашим менеджерам — согласование и прочие подготовительные процедуры экскурсии мы берем на себя.</p>
               <div class="zalref">
                  <div class="img">
                       <a href="/img/taraVRbuilder.gif" class="thumbnail fnbx" rel="gallery1"><img class="pictures" src="/img/taraVRbuilder.gif" alt="" style="position: relative;bottom: -6px;"></a>
                   </div>
                   <div class="img">
                       <a href="/img/taraVRbuilder2.gif" class="thumbnail fnbx" rel="gallery1"><img class="pictures" src="/img/taraVRbuilder2.gif" alt="" style="position: relative;bottom: -6px;"></a>
                   </div>
                   <div class="img">
                       <a href="/img/model_upravleniya_zavoda.jpg" class="thumbnail fnbx" rel="gallery1"><img class="pictures" src="/img/model_upravleniya_zavoda.jpg" alt="" style="position: relative;top: 6px;"></a>
                   </div>
                   <div class="img">
                       <a href="/img/Packer3D.gif" class="thumbnail fnbx" rel="gallery1"><img class="pictures" src="/img/Packer3D.gif" alt="" style="position: relative;bottom: 55px;"></a>
                   </div>
                   
                   <div class="img">
                       <a href="/img/maket_logistiks.JPG" class="thumbnail fnbx" rel="gallery1"><img class="pictures" src="/img/maket_logistiks.JPG" alt=""></a>
                   </div>
               </div>
           </div>
       </div>
       <div id="block-7_2" class="block block-7_1">
           <div class="container">
               <h2 class="text-center">Все инновации логистики в одном месте</h2>
               <p class="">Созданный с нашим участием Научно-образовательный центр информационных технологий в логистике на базе факультета логистики и общетранспортных проблем МАДИ является уникальной площадкой, объединившей все высокоэффективные технологии организации интралогистических процессов на складе или&nbsp;производстве.Разобраться в современных технологиях и их специфике вам поможет наша лаборатория, в которой представлены инновационные  логистические системы.</p>
               <ul>
                   <li>
                       <p>автоматизированный склад с краном-штабелером</p>
                   </li>
                   <li>
                       <p>конвейерная система</p>
                   </li>
                   <li>
                       <p>WMS</p>
                   </li>
                   <li>
                       <p>вертикальная лифтовая система</p>
                   </li>
                   <li>
                       <p>программный комплекс для имитационного моделирования складских процессов </p>
                   </li>
                   <li>
                       <p>системы идентификации - штрих коды, RFID </p>
                   </li>
               </ul>
               <div class="labimg">
                   <div class="img">
                       <a href="/img/Autosat.JPG" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="/img/Autosat.JPG" alt=""></a>
                   </div>
                   <div class="img">
                       <a href="/img/lab_ident.JPG" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="/img/lab_ident.JPG" alt=""></a>
                   </div>
                   <div class="img">
                       <a href="/img/lab_logistiks.JPG" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="/img/lab_logistiks.JPG" alt=""></a>
                   </div>
                   
                   <div class="img">
                       <a href="/img/Mini load.JPG" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="/img/Mini load.JPG" alt="" style="position: relative;bottom: 185px;"></a>
                   </div>
                   <div class="img">
                       <a href="/img/model_upravleniya_logistikoy.JPG" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="/img/model_upravleniya_logistikoy.JPG" alt="" style="position: relative;bottom: 23px;"></a>
                   </div>
                   <div class="img">
                       <a href="/img/model_upravleniya_logistikoy2.JPG" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="/img/model_upravleniya_logistikoy2.JPG" alt="" style="position: relative;bottom: 10px;"></a>
                   </div>
                   <div class="img">
                       <a href="/img/Magic Store.gif" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="/img/Magic Store.gif" alt=""></a>
                   </div>
                   <div class="img">
                       <a href="img/noc-tl2.jpg" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="img/noc-tl2.jpg" alt=""></a>
                   </div>
                   <div class="img">
                       <a href="/img/RFID-Gate.JPG" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="/img/RFID-Gate.JPG" alt="" style="position: relative;bottom: 125px;"></a>
                   </div>
                   <div class="img">
                       <a href="/img/SILO.JPG" class="thumbnail fnbx" rel="gallery2"><img class="pictures" src="/img/SILO.JPG" alt="" style="position: relative;bottom: 30px;"></a>
                   </div>
                   
               </div>
           </div>
       </div>

        <div id="block-8" class="block block-8">
            <div class="container">
                <h2 class="text-center">Не&nbsp;знаете какой пакет услуг необходим вам?</h2>
                <h3 class="text-center">Оставьте заявку на&nbsp;консультацию&nbsp;&mdash; мы&nbsp;перезвоним и&nbsp;расскажем обо всех<br>возможностях работы с&nbsp;нами.<br><span class="text-brand-color">Это бесплатно.</span></h3>
                <div class="ordering">
                    <form action="mail.php" method="post">
                        <input type="text" name="phone" placeholder="Введите ваш телефон" >
                        <input type="hidden" name="info" value="Не знаю какую услугу выбрать" >
                        <input type="hidden" name="target" value="zakaz8" >
                        <br>
                        <button class="submit btn btn-lg btn-red">Получить бесплатную консультацию</button>
                    </form>
                </div>
            </div>
        </div>

        <div id="block-9" class="block block-9">
            <div class="container">
                <h2 class="text-center">Отзывы наших клиентов</h2>
                <div class="owl-carousel owl-theme" id="slider-1">
                    <div class="item">
                        <div class="otz-text">
                            <h3 class="text-center text-brand-color">Яровой Петр</h3>
                            <p class="date">директор по&nbsp;производству ОАО &laquo;Мельник&raquo;</p>
                            <p>Еще на&nbsp;начальной стадии проекта по&nbsp;созданию новой макаронной фабрики мы&nbsp;предполагали использовать автоматическую технику на&nbsp;складе. Были определенные затруднения, связанные с&nbsp;возможными размерами пятна застройки. А&nbsp;именно, для сохранения удобного расположения относительно железнодорожных путей здание склада должно было быть вписано в&nbsp;существующие условия. Это накладывало ограничения на&nbsp;габаритные размеры склада. На&nbsp;тот момент мы&nbsp;еще не&nbsp;были уверены, что сможем найти производителя автоматической складской техники, который предоставит нам соответствующее нашему бюджету техническое решение. Поэтому мы&nbsp;решили строить здание, высота которого будет подходить для работы ричтраков, и&nbsp;одновременно вести поиск поставщика автоматизированного оборудования. На&nbsp;одной из&nbsp;промышленных выставок мы&nbsp;познакомились с&nbsp;компанией &laquo;Техноприбор&raquo;, которая предложила нам создать проект комплексной автоматизации склада, включая разработку технологической части, проектирование и&nbsp;изготовление оборудования, программного обеспечения.</p>

                            <p>В&nbsp;результате было утверждено технологическое решение, которое удовлетворяло нас как с&nbsp;точки зрения объема хранимого товара, так и&nbsp;по&nbsp;параметрам грузооборота. Процессы приемки и&nbsp;отгрузки товара были автоматизированы. Существенно сократилась численность персонала, обслуживающего склад. Например, ввод заявок теперь осуществляется всего одним оператором-кладовщиком. Все данные учитываются и&nbsp;хранятся в&nbsp;базе данных, тем самым гарантирована их&nbsp;сохранность и&nbsp;доступность в&nbsp;любое время.</p>

                            <p>Воплощение предложенной Техноприбором идеи оказалось даже несколько лучше, чем мы&nbsp;предполагали, так как установленная система управления автоматическим складом TechnoWMS дает возможность вводить дополнительные контрольно-учетные функции в&nbsp;действующую систему в&nbsp;зависимости от&nbsp;возникающих производственных задач.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="otz-text">
                            <h3 class="text-center text-brand-color">Леваков Юрий</h3>
                            <p class="date">директор ООО &laquo;Тиара&raquo;</p>
                            <p>Наша компания занимается производством замков и&nbsp;другой фурнитуры для стальных дверей.</p>

                            <p>До&nbsp;внедрения автоматизированной складской системы зона хранения комплектующих представляла собой большое помещение, в&nbsp;котором располагались ящики с&nbsp;деталями замков прямо на&nbsp;полу. Персонал участка проводил комплектацию с&nbsp;большими трудовыми и&nbsp;временными затратами, допуская ошибки в&nbsp;учете остатков. В&nbsp;связи с&nbsp;расширением клиентской базы для своевременных поставок готовой продукции нам требовалось увеличить число сотрудников, что повлекло&nbsp;бы за&nbsp;собой дополнительные расходы, но&nbsp;не&nbsp;решило&nbsp;бы других проблем, неизбежных при таком расположении комплектующих.</p>

                            <p>Внедрение автоматизированной складской системы позволило нам сократить зону хранения в&nbsp;3&nbsp;раза, а&nbsp;на&nbsp;освободившейся площади организовать участки для других операций производства. Кроме того, выделенная зона для комплектации позволила значительно увеличить количество собранных накладных в&nbsp;течение смены. Система позволяет организовать передачу нужных паллет из&nbsp;зоны хранения на&nbsp;приемные столы до&nbsp;начала рабочего дня комплектовщиков, учитывает остатки на&nbsp;складе и&nbsp;способна самостоятельно сообщать о&nbsp;необходимости изготовления новой партии недостающих деталей, исходя из&nbsp;производственного плана.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="block-10" class="block block-10">
            <div class="container">

                

                <div class="row">
                    <div class="col-xs-4" style="padding-top: 13px">
                        <div class="about-us">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <a href="img/1.jpg" class="thumbnail fnbx" rel="about">
                                        <img src="img/1.jpg" alt="" >
                                    </a>
                                </div>
                            
                                <div class="col col-xs-6">
                                    <a href="img/2.jpg" class="thumbnail fnbx" rel="about">
                                        <img src="img/2.jpg" alt="" >
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-xs-6">
                                    <a href="img/3.jpg" class="thumbnail fnbx" rel="about"  style="height: 115px;overflow: hidden;">
                                        <img src="img/3.jpg" alt="" >
                                    </a>
                                </div>
                                <div class="col col-xs-6">
                                    <a href="img/4.jpg" class="thumbnail fnbx" rel="about">
                                        <img src="img/4.jpg" alt="" >
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-xs-6">
                                    <a href="img/5.jpg" class="thumbnail fnbx" rel="about">
                                        <img src="img/5.jpg" alt="" >
                                    </a>
                                </div>
                                <div class="col col-xs-6">
                                    <a href="img/6.jpg" class="thumbnail fnbx" rel="about">
                                        <img src="img/6.jpg" alt="" >
                                    </a>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col col-xs-6">
                                    <a href="img/7.jpg" class="thumbnail fnbx" rel="about">
                                        <img src="img/7.jpg" alt="" >
                                    </a>
                                </div>
                                <div class="col col-xs-6">
                                    <a href="img/8.jpg" class="thumbnail fnbx" rel="about">
                                        <img src="img/8.jpg" alt="" >
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="text">
                            <div style="width:50%">
                                <h2 class="text-light-color text-center">О компании</h2>
                                <h3 class="text-light-color text-center">ОАО &laquo;Техноприбор&raquo;</h3>
                            </div>
                            <br><br><br>
                            <p>Мы&nbsp;создаем складские и&nbsp;транспортные системы для организации внутренних и&nbsp;материальных потоков и&nbsp;хранения более 30&nbsp;лет, и&nbsp;являемся единственным российским производителем автоматизированного складского и&nbsp;транспортного оборудования, поставщиком современных интралогистических решений &laquo;под ключ&raquo;.</p>

                            <p>Сегодня мы&nbsp;определяем основные направления нашей деятельности как совокупность решений задач по&nbsp;оптимизации распределения материальных потоков:</p>

                            <ul>
                                <li>Создание и&nbsp;модернизация интралогистических объектов для промышленности и&nbsp;торговли</li>
                                <li>Организация управления складом</li>
                                <li>Транспортировка сыпучих материалов</li>
                                <li>Создание нестандартного оборудования под индивидуальные условия заказчика.</li>
                            </ul>

                            <p>Обладаем собственным производством и&nbsp;штатом высококвалифицированных специалистов. За&nbsp;годы работы в&nbsp;сфере интралогистики были созданы проекты десятков заказчиков из&nbsp;разных направлений бизнеса&nbsp;&mdash; строительство, металлургия, оборонная промышленность, ритейл.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="block-11" class="block block-11">
            <div class="container">
                <h2 class="text-center">Мы работаем более 30 лет</h2>

                <div class="serts">
                    <div class="row">
                        <div class="col col-xs-4">
                            <a href="img/sert_1.jpg" class="thumbnail fnbx" rel="serts">
                                <img src="img/sert_1.jpg" alt="" >
                            </a>
                        </div>
                        <div class="col col-xs-4">
                            <a href="img/sert_2.jpg" class="thumbnail fnbx" rel="serts">
                                <img src="img/sert_2.jpg" alt="" >
                            </a>
                        </div>
                        <div class="col col-xs-4">
                            <a href="img/sert_3.jpg" class="thumbnail fnbx" rel="serts">
                                <img src="img/sert_3.jpg" alt="" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="block-12" class="block block-12">
            <div class="container">
                <h2 class="text-center text-brand-color">У Вас остались вопросы?</h2>
                <h3 class="text-center text-dark-color">Наш специалист свяжется с&nbsp;вами в&nbsp;течение 12&nbsp;минут в&nbsp;рабочее время.<br>Это бесплатно.</h3>
                <div class="ordering">
                    <form action="mail.php" method="post">
                        <input type="text" name="name" placeholder="Введите ваше имя" >
                        <br>
                        <input type="text" name="phone" placeholder="Введите ваш телефон" >
                        <br>
                        <textarea placeholder="Задайте ваш вопрос здесь" name="message"></textarea>
                        <br>
                        <input type="hidden" name="info" value="Остались вопросы" >
                        <input type="hidden" name="target" value="zakaz12" >
                        <button class="submit btn btn-lg btn-red">Задать вопрос</button>
                    </form>
                </div>
            </div>
        </div>

        <div id="block-13" class="block block-13 footer">
            <div class="container">
                <div class="row">
                    <div class="col-left col-xs-6">
                        <p>© 1971-<?=date('Y')?>&nbsp;&nbsp;&nbsp;Использование материалов, копирование, а&nbsp;так&nbsp;же частичное копирование разрешено только с&nbsp;письменного согласия правообладателя.<br><a href="#fnbx-4" class="fnbx">Политика конфиденциальности</a></p>
                        <p>ОАО &laquo;ПКБ &laquo;ТЕХНОПРИБОР&raquo;<br>428032, г. Чебоксары, ул. Композиторов Воробьевых, д. 16</p>
                    </div>
                    <div class="col-right col-xs-6">
                        <div class="text-right">
                            <a class="tel" href="tel:+78352377766">+7 (8352) 377 766</a>
                            <br>
                            <span class="phone-descr">
                                E-mail:
                                <a href="mailto:info@technopribor.com">info@technopribor.com</a>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="darker" style="display:none">

            <div id="fnbx-2" class="fancybox-in-block-2">
                <div class="city-chooser-block">
                    <p class="h2">Выберите ваш город</p>
                    <p class="city-title">
                        Начните вводить название города
                        <br>или выберите из предложенных</p>
                    <div class="choose_your_city">
                        <input type="text" name="chhose-your-city" class="city_input" placeholder="Начните вводить ваш город" >
                        <ul style="display:none">
                            <li>Москва</li>
                            <li>Минск</li>
                            <li>Мадрид</li>
                            <li>Мичиган</li>
                            <li>Минисота</li>
                        </ul>
                    </div>
                    <table class="city-table">
                        <tr>
                            <td>
                                <a>Москва</a>
                            </td>
                            <td>
                                <a>Челябинск</a>
                            </td>
                            <td>
                                <a>Пермь</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Санкт-Петербург</a>
                            </td>
                            <td>
                                <a>Омск</a>
                            </td>
                            <td>
                                <a>Воронеж</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Новосибирск</a>
                            </td>
                            <td>
                                <a>Самара</a>
                            </td>
                            <td>
                                <a>Волгоград</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Екатеринбург</a>
                            </td>
                            <td>
                                <a>Ростов-на-Дону</a>
                            </td>
                            <td>
                                <a>Саратов</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Нижний Новгород</a>
                            </td>
                            <td>
                                <a>Уфа</a>
                            </td>
                            <td>
                                <a>Краснодар</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Казань</a>
                            </td>
                            <td>
                                <a>Красноярск</a>
                            </td>
                            <td>
                                <a>Тольятти</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="fnbx-4" class="fancybox-in-block-13 politicy">
                <h3 class="text-center">Политика конфиденциальности</h3>
                <p>Настоящая политика конфиденциальности распространяется на&nbsp;всех посетителей и&nbsp;пользователей сайта. Пользователю сайта необходимо внимательно ознакомиться с&nbsp;настоящими Условиями.</p>
                <p>Пользователь дает ОАО &laquo;Техноприбор&raquo; разрешение на&nbsp;обработку своих персональных данных, указываемых им&nbsp;в&nbsp;анкете, на&nbsp;сайтах компании. ОАО &laquo;Техноприбор&raquo; использует всю добровольно предоставленную пользователем информацию для обработки и&nbsp;предоставления услуг.</p>
                <p>Никакая информация личного характера об&nbsp;отдельном пользователе не&nbsp;разглашается, кроме случаев, предусмотренных законом.</p>
            </div>
        </div>
        <!--.darker-->

    </body>

</html>