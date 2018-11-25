<?php defined('ISHOP') or die('Access denied'); ?>
<div class="kroshka">
    <a href="#">Мобильные телефоны</a> / <a href="#">LG</a> / <span>Слайдеры</span>
</div> <!-- .kroshka -->
<div class="catalog-detail">
<h1>Товар</h1>
<ul id="slideshow">
    <li>
        <h3></h3>
        <span><?=TEMPLATE?>photos/1.jpg</span>
        <p></p>
        <a href="#"><img src="<?=TEMPLATE?>thumbnails/1.jpg" alt="Small Fish" /></a>
    </li>
    <li>
        <h3></h3>
        <span><?=TEMPLATE?>photos/2.jpg</span>
        <p></p>
        <a href="#"><img src="<?=TEMPLATE?>thumbnails/2.jpg" alt="Small Fish" /></a>
    </li>
    <li>
        <h3></h3>
        <span><?=TEMPLATE?>photos/3.jpg</span>
        <p></p>
        <a href="#"><img src="<?=TEMPLATE?>thumbnails/3.jpg" alt="Small Fish" /></a>
    </li>
    <li>
        <h3></h3>
        <span><?=TEMPLATE?>photos/4.jpg</span>
        <p></p>
        <a href="#"><img src="<?=TEMPLATE?>thumbnails/4.jpg" alt="Small Fish" /></a>
    </li>
    <li>
        <h3></h3>
        <span><?=TEMPLATE?>photos/5.jpg</span>
        <p></p>
        <a href="#"><img src="<?=TEMPLATE?>thumbnails/5.jpg" alt="Small Fish" /></a>
    </li>
    <li>
        <h3></h3>
        <span><?=TEMPLATE?>photos/6.jpg</span>
        <p></p>
        <a href="#"><img src="<?=TEMPLATE?>thumbnails/6.jpg" alt="Small Fish" /></a>
    </li>
    <li>
        <h3></h3>
        <span><?=TEMPLATE?>photos/7.jpg</span>
        <p></p>
        <a href="#"><img src="<?=TEMPLATE?>thumbnails/7.jpg" alt="Small Fish" /></a>
    </li>
    <li>
        <h3></h3>
        <span><?=TEMPLATE?>photos/8.jpg</span>
        <p></p>
        <a href="#"><img src="<?=TEMPLATE?>thumbnails/8.jpg" alt="Small Fish" /></a>
    </li>
</ul>
<div id="wrapper">
    <div id="fullsize">
        <div id="imgprev" class="imgnav" title="Previous Image"></div>
        <div id="imglink"></div>
        <div id="imgnext" class="imgnav" title="Next Image"></div>
        <div id="image"></div>
        <div id="information">
            <h3></h3>
            <p></p>
        </div>
    </div>
    <div id="thumbnails">
        <div id="slideleft" title="Slide Left"></div>
        <div id="slidearea">
            <div id="slider"></div>
        </div>
        <div id="slideright" title="Slide Right"></div>
    </div>
</div>	
<div class="icon-detali">
  <img src="<?=TEMPLATE?>images/ico-det-new.jpg"  alt="новинка"/>
  <img src="<?=TEMPLATE?>images/ico-det-lider.jpg" alt="лидер продаж"/>
  <img src="<?=TEMPLATE?>images/ico-det-sale.jpg" alt="распродажа"/>
</div> 
<div class="short-opais">
  <h3>Краткое описание:</h3>
    <p>Футуристичный смартфон Sony Xperia S под управлением ОС Android 2.3 Gingerbread с возможностью обновления до версии 4.0 Ice Cream Sandwich – первый из серии Xperia NXT, линейки смартфонов нового поколения. </p>
    <br />
    <p>В нем объединились новейшие технологии и лучшие разработки Sony, достойный функционал и минималистичный дизайн.</p>
    <p class="price-detail">Цена :  <span>24 990.</span></p>
<a href="#"><img src="images/addcard-detail.jpg" class="addtocard-index" alt="Добавить в корзину"/></a>
</div>
<div class="clr"></div>
<script type="text/javascript" src="<?=TEMPLATE?>js/script.js"></script>
<script type="text/javascript">
	$('slideshow').style.display='none';
	$('wrapper').style.display='block';
	var slideshow=new TINY.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=5;
		slideshow.link="linkhover";
		slideshow.info="information";
		slideshow.thumbs="slider";
		slideshow.left="slideleft";
		slideshow.right="slideright";
		slideshow.scrollSpeed=4;
		slideshow.spacing=5;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink");
	}
</script>
</div> <!--catalog-detail  -->