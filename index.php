<!DOCTYPE html>
<html>
<head>
  <title>Ресторан PunctPitania | Минск </title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
 
  <style type="text/css">
   

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


  </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
     <link rel="shortcut icon" href="images/icons/cup.png" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" href = "style.css">
</head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Забронировать столик</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="mail.php" method="POST">
          

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Выберите желаемую дату</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Выберите время</label>
            <input type="text" class="form-control" id="recipient-name" name="phone" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Укажите количество человек</label>
            <input type="text" class="form-control" id="recipient-name" name="email">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Как вас зовут</label>
            <input class="form-control" id="message-text" name="question"></input>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Номер телефона</label>
            <input class="form-control" id="message-text" name="question" required></input>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
       <!-- <button type="button" class="btn btn-primary" style = "border: none; background-color: rgb(218, 84, 84);">Отправить запрос</button> -->
         <input type="submit" class="btn btn-primary" style="border: none; background-color: rgb(185,11,0);" value="Забронировать" onclick="alertWindow()">
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<script>
  function alertWindow()
  {
    alert('Заявка на бронь успешно отправлена. Ожидайте SMS-оповещение');
  }
 </script>
<?php
    include ("navbar.php");
    ?>

    <div id = "working-time-nav">
        <p>Время работы кафе:<br>
        Пн-Пт: 9.30 - 21.30<br>
        Сб-Вс: 11.00 - 21.30</p>
    </div>
<a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" id="order-table" href="#" >Заказать столик</a>
<a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" id="order-table-mobile" style = "position: absolute; top: 55px; right: 80px;" href="#" ><img src = "images/icons/order-table.png"  width = "40px" height = "40px"></a>
<a id="phone" style = "position: absolute; top: 57px; right: 130px;" href="tel:+375 (29) 315 53 53" ><img src = "images/icons/phone.png"  width = "36px" height = "36px"></a>

<article>
  <!--
  <h2>Акции</h2>

  <section class="variable slider slider-optimization" style = "margin-top: 0px; text-align: center; align-content: center;" >    
      <div class = "menu-card slider-optimization-card-discount">
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  <div class = "menu-card slider-optimization-card-discount" >
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg" width = "25%">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  <div class = "menu-card slider-optimization-card-discount" >
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg" width = "25%">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  <div class = "menu-card slider-optimization-card-discount">
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg" width = "25%">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>

  <div class = "menu-card slider-optimization-card-discount">
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg" width = "25%">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  <div class = "menu-card slider-optimization-card-discount">
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg" width = "25%">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  <div class = "menu-card slider-optimization-card-discount">
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg" width = "25%">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  </section>
-->
  <!--Сеты-->
<h2><a name = "sets"></a>Наши сеты</h2>

  <section class="variable slider slider-optimization " style = "margin-top: 0px; text-align: center; align-content: center;" >    
      <div class = "menu-card slider-optimization-card"  >
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  <div class = "menu-card slider-optimization-card" >
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg" width = "25%">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  <div class = "menu-card slider-optimization-card" >
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg" width = "25%">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  <div class = "menu-card slider-optimization-card">
    <img src = "images/food/salads/Svezhiy_salat_s_ovoshchami_i_fetoy.jpg" width = "25%">
    <h3>Свежий салат с овощами и фетой</h3>  
    <p class = "structure">
        <span><br>Состав<br></span>
        Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой Свежий салат с овощами и фетой
    </p>
    <span class = "lables">
        <span class = "lable">в ресторане</span>
        <span class = "lable">доставка</span>
        <span class = "lable">с собой</span>
    </span>
    <span class = "costs">
        <span class = "restaurant-cost cost">19.90</span>
        <span class = "deliver-cost cost">18.90</span>
        <span class = "width-myself-cost cost">15.90</span>
    </span>
    <a id = "menu-card-button" style = "color: white;" >В корзину</a>
</div>
  </section>



  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>

   <?php
    include ("food-menu.html");
?>
</article>
<?php

    include ("footer.html");
?>

 <!-- <script src="http://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
