<?
if ($global_lang == 'el') $taxi_lang = 'en';
else $taxi_lang = $global_lang;
?>

<section class="jumbotron main-block" style="background: url('<? echo $background[$page_name]; ?>') 50% fixed no-repeat;">

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2 style="color: white"><? echo $search_form_header[$global_lang][$page_name]; ?><br><br></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">

		<div style="background-color: rgba(255, 255, 255, 0.5); border-radius: 4px; padding-top: 40px;">
<div id="kiwitaxi_widget_wrapper" class="kiwitaxi_widget_wrapper"></div> <!-- контейнер, в который будет вставлен виджет -->
<script type="text/javascript">
               var kiwitaxiWidgetOptions = {
 				   language: '<? echo $taxi_lang; ?>',    /* Язык отображения виджета, может быть "en" или "ru" */
				   display_currency: '<? echo $currency[$global_lang]; ?>',    /* Валюта, в которых отображается стоимость трансфера, есть возможность выбрать из трех валют: "USD", "EUR", "RUB" */
				    payment_currency: '<? echo $currency[$global_lang]; ?>',    /* Валюта, в которой производится предоплата (если отличается от display_currency), на данный момент возможны три значения: "RUB", "EUR", "USD" */
				    country: '',    /* Страна, в переделах которой будет ограничен поиск трансферов (можно указать как наименование на англ. или рус., так и двухсимвольный код IATA) */
 				   place_from: '',    /* Значение поля "Откуда" по умолчанию (можно указать как наименование маршрутной точки на англ. или рус., так и ее код IATA) */
    				place_to: '',    /* Значение поля "Куда" по умолчанию (можно указать как наименование маршрутной точки на англ. или рус., так и ее код IATA) */
    				hide_form_extras: false,    /* Скрыть дополнительные элементы оформления с первой страницы виджета, true или false */
    				hide_external_links: true,    /* Скрыть внешние ссылки на сайт Кивитакси (справочные материалы и условия перевозки) , true или false */
    				default_form_title: '', /* Заголовок формы когда точки отправления и назначения не выбраны; указав пустую строку "" можно скрыть этот заголовок */
    /*max_height: 1000,*/     /* Максимальная высота виджета в пикселях: вертикальная полоса прокрутки будет появлятся в случае, когда содержимое виджета не уместиться в это ограничение */
   					partner_id: '57fbf848f1020',    /* Партнерский идентификатор */
    				banner_id: '22995c4e',    /* Идентификатор баннера */
    				target: 'kiwitaxi_widget_wrapper'    /* Идентификатор HTML-контейнера, внутрь которого будет вставлен виджет */
               };

               (function () {
                    var kw = document.createElement('script');
                    kw.type = 'text/javascript';
                    kw.async = true;
                    kw.src = 'http://widget.kiwitaxi.com/widget.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(kw, s);
               })();
</script>
		</div>

		</div>
	</div>
</div>
<div class="left-block">&nbsp;</div><div class="right-block">&nbsp;</div>
</section>
