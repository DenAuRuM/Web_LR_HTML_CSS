<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My project</title>
    <link rel="stylesheet" href="LR2css.css">
</head>


<html>
	<body>
		<h1>Котельное оборудование</h1>
		<table width="100%">
 			<tr align = "center">
  				<label for="koteltxt">
 
					<div class="product-item">
						<?php
  								//echo "test";
  								require_once ("db.php");

								  $stmt = $pdo->query("SELECT * FROM product");

								  while ($row = $stmt->fetch()) {

									  echo "<td align=\"left\" >
									<img id=\"shift\" src=\"k1.webp\" class=\"product-item\"> <br>
									<label for=\"shift\">".$row['name']."<br>Р 99 990</label>
									<span class=\"btn\">Подробнее</span>
									<div class=\"window\">
        								<div class=\"window__text\">
            						<h2>Полная информация о котельном оборудовании</h2>

									<p>
									<img src=\"k1.webp\" style=\" float: left; object-fit: cover; margin-bottom: 40px\">
									<b>Модульные котельные установки</b> (транспортабельные и блочные котельные установки) представляют собой один или несколько блок-модулей <i>(в зависимости от необходимой тепловой мощности) </i>с установленным внутренним технологическим оборудованием и оборудованием для подключения к инженерным сетям. <b><i>Такие котельные поставляются Заказчику в полной заводской готовности.</b></i><br><br>

									Основные требования к проектированию и строительству котельных с давлением пара не более 3,9 МПа (40 кгс/см<sup>2</sup>) и с температурой воды не более 200°С собраны в своде правил СП 89.13330.2012 Котельные установки. Актуализированная редакция <u>СНиП II-35-76</u>.</p><br>

									<pre>Ждем Вас у нас!</pre>
        						</div>
        							<div class=\"window__close\">
            						Закрыть
        							</div>
   								</div>
									</td>";
								  }

						?>
  						<!--<img src="k1.webp" style="object-fit: cover; margin-bottom: 40px">
  						<div class="product-list">
  							
    						<h3>Котел классичес-<br>кий</h3>
      						<span class="price">₽ 99 000</span>
      						<span class="btn">Подробнее</span>
      						<div class="window">
        						<div class="window__text">
            						<h2>Полная информация о котельном оборудовании</h2>

									<p><b>Модульные котельные установки</b> (транспортабельные и блочные котельные установки) представляют собой один или несколько блок-модулей <i>(в зависимости от необходимой тепловой мощности) </i>с установленным внутренним технологическим оборудованием и оборудованием для подключения к инженерным сетям. <b><i>Такие котельные поставляются Заказчику в полной заводской готовности.</b></i><br><br>

									Основные требования к проектированию и строительству котельных с давлением пара не более 3,9 МПа (40 кгс/см<sup>2</sup>) и с температурой воды не более 200°С собраны в своде правил СП 89.13330.2012 "Котельные установки. Актуализированная редакция <u>СНиП II-35-76</u>".</p><br>

									<pre>Ждем Вас у нас!</pre>
        						</div>
        							<div class="window__close">
            						Закрыть
        							</div>
   								</div>
  						</div>
					</div>
  					</td>
  				</label>-->

				<!--<td align = "center">
				<div class="product-item" >
  					<img src="k2.webp" align = "center" style="object-fit: cover;  align-content: center; margin-bottom: 20px">
  					<div class="product-list">
    					<h3>Котел средний</h3>
      					<span class="price">₽ 61 322</span>
      					<a href="kotelcon.html" class="button">Подробнее</a>
  					</div>
				</div>
  				</td>-->
  				<?php
  								//echo "test";
  								require_once ("db.php");

								  $stmt = $pdo->query("SELECT * FROM product");

								  while ($row = $stmt->fetch()) {

									  echo "<td align=\"left\" >
									<img id=\"shift\" src=\"k2.webp\" class=\"product-item\"> <br>
									<label for=\"shift\">".$row['name']."<br>Р 99 990</label>
									<span class=\"btn\">Подробнее</span>
									<div class=\"window\">
        								<div class=\"window__text\">
            						<h2>Полная информация о котельном оборудовании</h2>

									<p><b>Модульные котельные установки</b> (транспортабельные и блочные котельные установки) представляют собой один или несколько блок-модулей <i>(в зависимости от необходимой тепловой мощности) </i>с установленным внутренним технологическим оборудованием и оборудованием для подключения к инженерным сетям. <b><i>Такие котельные поставляются Заказчику в полной заводской готовности.</b></i><br><br>

									Основные требования к проектированию и строительству котельных с давлением пара не более 3,9 МПа (40 кгс/см<sup>2</sup>) и с температурой воды не более 200°С собраны в своде правил СП 89.13330.2012 Котельные установки. Актуализированная редакция <u>СНиП II-35-76</u>.</p><br>

									<pre>Ждем Вас у нас!</pre>
        						</div>
        							<div class=\"window__close\">
            						Закрыть
        							</div>
   								</div>
									</td>";
								  }

						?>

  				<td lign = "center">
				<div class="product-item">
  					<img src="k3.webp"  style="object-fit: cover;  margin-bottom: 40px">
  					<div class="product-list">
    					<h3>Датчик наружней <br>температуры</h3>
      					<span class="price">₽ 21 660</span>
      					<a href="kotelcon.html" class="button">Подробнее</a>
  					</div>
				</div>
  				</td>
 			</tr>
 			<tr>
 				<td align = "center"><br><br><br><br>
					<div class="product-item" style="object-fit: cover;  margin-bottom: 10px">
  						<img src="k4.webp">
  						<div class="product-list">
    						<h3>Датчик средний</h3>
      						<span class="price">₽ 17 693</span>
      						<a href="kotelcon.html" class="button">Подробнее</a>
  						</div>
					</div>
  				</td>

  				<td align = "center"><br><br><br><br>
				<div class="product-item" style="object-fit: cover;  margin-top: 10px">
  					<img src="k5.webp">
  					<div class="product-list">
    					<h3>Датчик компакт-<br>ный</h3>
      					<span class="price">₽ 19 690</span>
      					<a href="kotelcon.html" class="button">Подробнее</a>
  					</div>
				</div>
  				</td>

  				<td align = "center"><br><br><br><br>
				<div class="product-item" style="object-fit: cover;  margin-top: 10px">
  					<img src="k6.webp">
  					<div class="product-list">
    					<h3>Интерактивный <br>датчик</h3>
      					<span class="price">₽ 20 245</span>
      					<a href="kotelcon.html" class="button">Подробнее</a>
  					</div>
				</div>
  				</td>
  			</tr>

  			<tr>
 				
  			</tr>

  			
		</table>		
	</body>

<script src="LR2script.js"></script>
<html>
