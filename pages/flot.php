<!DOCTYPE html>
<html lang="ru">
<?php
require_once('../header.php');
?>

<!-- Слайдер верхний -->
    <div class="inner-page">
    <div class="slider-item" style="background-image: url('/omskteplohod.ru/img/flotmain.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Флот омского теплохода</span></h1>
              <p class="mb-5 w-75">3 пассажирских судна</p>
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

      <div class="container">
        <div class="row justify-content-center mb-4 element-animate">
          <div class="col-md-8 text-center">
            <h2 class="heading mb-4">Выберите корабль ↓</h2>
          </div>
        </div>
      </div>

  <div class="rasp">
<label for="rasp1m" class="radiorasp"><input type="radio" name="rasp1" id="rasp1m" value="1" checked><span>Москва-112, прогулочный маршрут</span></label>
<label for="rasp2m" class="radiorasp"><input type="radio" name="rasp1" id="rasp2m" value="2"><span>Москва-126, дачный маршрут</span></label>
<label for="rasp3m" class="radiorasp"><input type="radio" name="rasp1" id="rasp3m" value="3"><span>Заря-353, туристический маршрут</span></label>
  </div>

<div class="raspchild" id="rimg1" style="display: none;">
  <div class="contain100">

    <div class="contain50">
        <div class="image__wrapper">

            <div class="slider" id="slider1">
                <div class="slider__wrapper">
                <div class="slider__items">
                    <div class="slider__item">
                      <img class="img-fluid" src="/omskteplohod.ru/img/dach2.jpg" alt="">
                    </div>
                    <div class="slider__item">
                      <img class="img-fluid" src="/omskteplohod.ru/img/dach2.jpg" alt="">
                    </div>
                    <div class="slider__item">
                      <img class="img-fluid" src="/omskteplohod.ru/img/dach2.jpg" alt="">
                    </div>
                </div>
                </div>
                      <a class="slider__control slider__control_prev" href="#" role="button" data-slide="prev"></a>
                      <a class="slider__control slider__control_next" href="#" role="button" data-slide="next"></a>
            </div>
        </div>
    </div>

    <div class="contain50">
        <div class="image__wrapper">
            
            <div class="slider" id="slider2">
                <div class="slider__wrapper">
                <div class="slider__items">
                    <div class="slider__item">
                      <img class="img-fluid" src="/omskteplohod.ru/img/dach2.jpg" alt="">
                    </div>
                    <div class="slider__item">
                      <img class="img-fluid" src="/omskteplohod.ru/img/dach2.jpg" alt="">
                    </div>
                    <div class="slider__item">
                      <img class="img-fluid" src="/omskteplohod.ru/img/dach2.jpg" alt="">
                    </div>
                </div>
                </div>
                      <a class="slider__control slider__control_prev" href="#" role="button" data-slide="prev"></a>
                      <a class="slider__control slider__control_next" href="#" role="button" data-slide="next"></a>
            </div>
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

  </div>

</section>

    <!-- Футер -->

<?php
require_once('../footer.php');
?>
</html>