<?php
// Your code here!
$name = "Константин";
$prof = "Программист";
$town = "Москва";
$mail = "11221р@mil.ru";
$phone = "+79122389112";
$skills = [
    [
        'name' => 'Фотошоп',
        'percent' => 30,
    ],
    [
        'name' => 'Иллюстратор',
        'percent' => 70,
    ],
    [
        'name' => 'Медиа',
        'percent' => 40,
    ],
];
$works = [
    [
        'profession' => 'Тестировщик',
        'dataStart' => 'Сентябрь 2020',
        'dataFinish' => 'Январь 2021',
        'functional' => 'Описание работы тестировщик',
    ],
    [
        'profession' => 'BI-аналитик',
        'dataStart' => 'Январь 2021',
        'dataFinish' => 'Декабрь 2021',
        'functional' => 'Описание работы BI-аналитик',
    ],
     [
        'profession' => 'Разработчик',
        'dataStart' => 'Январь 2022',
        'dataFinish' => 'По настоящее время',
        'functional' => 'Описание работы Разработчик',
    ],
];
$education = [
    [
        'school' => 'Школа информационных технологий',
        'dataStar' => 'Сентябрь 2015',
        'dataEnd' => 'Май 2017',
        'degree' => 'Техник ЭВМ',
    ],
    [
        'school' => 'МГУ',
        'dataStar' => 'Сентябрь 2017',
        'dataEnd' => 'Май 2021',
        'degree' => 'Бакалавр',
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?=$name;?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $prof;?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $town;?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $mail;?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone;?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
             <?php for ($i = 0; $i < count($skills); $i++):  
            $percent = $skills[$i]['percent'];
            ?>
                <p><?php echo $skills[$i]['name']; ?></p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                  <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $percent?>%"><?= $percent?> % </div>
                </div>
            <?php endfor;?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          
          <?php for ($i = 0; $i < count($works); $i++): ?>  
              <div class="w3-container">
                <h5 class="w3-opacity"><b><?php echo $works[$i]['profession']; ?></b></h5>
                <h6 class="w3-text-teal">
                    <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                    <?=$works[$i]['dataStart'];?> - 
                    <?php if ($i == 2): ?>
                      <span class="w3-tag w3-teal w3-round">
                        <?=$works[$i]['dataFinish'];?>
                      </span>
                    <?php else: ?>
                      <?=$works[$i]['dataFinish'];?>
                    <?php endif; ?>
                </h6>
                <p><?=$works[$i]['functional'];?></p>
                <hr>
              </div>
          <?php endfor; ?>
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <?php for ($i = 0; $i < count($education); $i++): ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $education[$i]['school']; ?></b></h5>
            <h6 class="w3-text-teal">
                <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                <?=$education[$i]['dataStar'];?> -
                <?php if ($i == 0): ?>
                    <?=$education[$i]['dataEnd'];?>
                <?php else: ?>
                    <?=$education[$i]['dataEnd'];?>
                <?php endif; ?>
            </h6>
            <hr>
            </div>
          <?php endfor; ?>
        </div>
            <p><strong>Быстро обучаюсь, внимателен к мелочам, я - именно тот работник, которого вы ищите!</strong></p>
            <hr>
          </div>
        
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>