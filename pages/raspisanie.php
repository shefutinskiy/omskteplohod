<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Расписание омский теплоход</title>
    <meta name="description" content="Расписание на текущую навигацию на рейсах омского теплохода"> 
    <meta name="keywords" content="Омский,теплоход,расписание,речные,корабли,теплоходы">
    <meta name="robots" content="index, follow">
<?php
require_once('../header.php');
?>

<!-- Слайдер верхний -->
    <div class="inner-page">
    <div class="slider-item" style="background-image: url('/omskteplohod.ru/img/bronka.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Расписание рейсов омского теплохода</span></h1>
              <p class="mb-5 w-75">на навигацию 2022 года</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    </section>
    </div>
    <!-- END slider -->

    <!-- Наполнение -->

<section class="section border-t pb-0">
  <div class="rasp">
<label for="rasp1m" class="radiorasp"><input type="radio" name="rasp1" id="rasp1m" value="1" checked><span>Прогулочный маршрут</span></label>
<label for="rasp2m" class="radiorasp"><input type="radio" name="rasp1" id="rasp2m" value="2"><span>Дачный маршрут</span></label>
<label for="rasp3m" class="radiorasp"><input type="radio" name="rasp1" id="rasp3m" value="3"><span>Омск - Большеречье</span></label>
<label for="rasp4m" class="radiorasp"><input type="radio" name="rasp1" id="rasp4m" value="4"><span>Омск - Ачаирский монастырь</span></label>
<label for="rasp5m" class="radiorasp"><input type="radio" name="rasp1" id="rasp5m" value="5"><span>Переправы области</span></label>
  </div>

  <div class="raspchild" id="rimg1" style="display: none;">
  <div class="contain100">
    <div class="contain50">
      <div class="image__wrapper">
        <img class="photoraspisanie" src="../img/pr1.jpg">
      </div>
    </div>
    <div class="contain50">
      <div class="image__wrapper">
        <img class="photoraspisanie" src="../img/pr2022.jpg">
      </div>
    </div>
  </div>

  </div>

  <div class="raspchild" id="rimg2" style="display: none;">

  <div class="contain100">
    <div class="contain50">
      <div class="image__wrapper">
        <img class="photoraspisanie" src="../img/dach1.jpg">
      </div>
    </div>
    <div class="contain50">
        <img class="photoraspisanie" src="../img/dach2022.jpg">
    </div>
  </div>
  </div>

  </div>


  <div class="raspchild" id="rimg3" style="display: none;">

  <div class="contain100">
    <div class="contain50">
      <div class="image__wrapper">
        <img class="photoraspisanie" src="../img/tur1.jpg">
      </div>
    </div>
    <div class="contain50">
      <p class="zagdob"><span>Полезные материалы ↓</span></p>
      <a class="dopmat" href="https://vk.com/@omskteplohod-pamyatka">Гид по Большеречью</a>
      <a class="dopmat" href="http://bol-zoo.ru/map/map.html">Интерактивная карта зоопарка</a>
    </div>
  </div>
  </div>

  </div>


  <div class="raspchild" id="rimg4" style="display: none;">

      <div class="contain100">
    <div class="contain50">
      <div class="image__wrapper">
        <img class="photoraspisanie" src="../img/ach1.jpg">
      </div>
    </div>
    <div class="contain50">
      <img class="photoraspisanie" src="../img/ach2022.jpg">
    </div>
  </div>
  </div>

  </div>

  <div class="raspchild" id="rimg5" style="display: none;">

          <div class="contain100">
    <div class="contain50">
      <div class="image__wrapper">
        <img class="photoraspisanie" src="../img/par1.jpg">
      </div>
    </div>
    <div class="contain50">
      <p class="zagdob"><span>Интерактивная карта ↓</span></p>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3e705a008bbaf6dcc6bfc7ae24e357503e0eb623398b98c303ddc5e20127a046&amp;source=constructor" width="90%" height="90%" frameborder="0"></iframe>
    </div>
  </div>
  </div>

  </div>

</section>

 <section class="section border-t pb-0">

      <div class="container">
        <div class="row justify-content-center mb-4 element-animate">
          <div class="col-md-8 text-center">
            <h2 class="heading mb-4">Купить билет ↓</h2>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-md-4 element-animate">
            <a href="index.html" class="link-thumbnail">
              <h3 class="bron_dach">Туристический маршрут</h3>
              <img src="../img/tur2.jpg" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="bron.html" class="link-thumbnail">
              <h3 class="bron_prog">Прогулочный маршрут</h3>
              <img src="../img/prog.jpg" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="index.html" class="link-thumbnail">
              <h3 class="bron_tur">Дачный маршрут</h3>
              <img src="../img/dach2.jpg" class="img-fluid">
            </a>
          </div>
        </div>
        
      </div>
    </section>

    <!-- Футер -->

<?php
require_once('../footer.php');
?>
</html>