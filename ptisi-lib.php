<?php
$global_lang = "el";

define("DB_HOST", "localhost");
define("DB_NAME", "test_db");
define("DB_USER", "cy2rus01");
define("DB_PASS", "cy2rus01");


$global_pages = array('tickets' => "/", 'hotels' => "/hotels/", 'rental' => "/rental/", 'taxi' => "/taxi/");

$menu_items = array(
	'el' => array('tickets' => "ΕΙΣΙΤΗΡΙΑ", 'hotels' => "ΞΕΝΟΔΟΧΕΙΑ", 'rental' => "ΕΝΟΙΚΙΑΣΗ ΑΥΤΟΚΙΝΗΤΩΝ", 'taxi' => "ΤΑΞΙ"),
	'ru' => array('tickets' => "Авиабилеты", 'hotels' => "Отели", 'rental' => "Аренда авто", 'taxi' => "Такси"),
	'en' => array('tickets' => "Airtickets", 'hotels' => "Hotels", 'rental' => "Rent-a-car", 'taxi' => "Taxi")
);

$search_form = array(
	'el' => array(
		'tickets' => '<script charset="utf-8" src="//www.travelpayouts.com/widgets/f22a0405070a9b04b30d7f9042359b40.js?v=944" async>',
		'hotels' => '<script charset="utf-8" src="//www.travelpayouts.com/widgets/23a08eed2c21c2d7a4f504570da13e1e.js?v=944" async></script>',
		'rental' => '<div id="rc-connect-container"></div><script id="rc-connect" src="http://www.rentalcars.com/partners/integrations/connect/connect.js" data-container="rc-connect-container" data-preflang="gr" data-template="universal" data-enable-return-checkbox="true" data-affiliate-code="cy2rusru" data-adcamp="searchengine" data-adplat="homepage" data-hero-image="17" data-hide-modules="cars,hero" data-box-shadow="false"></script></div>',
		'taxi' => '<script charset="utf-8" src="//www.travelpayouts.com/widgets/f22a0405070a9b04b30d7f9042359b40.js?v=944" async>',
		),
	'ru' => array(
		'tickets' => '<script charset="utf-8" src="//www.travelpayouts.com/widgets/1364c4afe1a353a88aab8d3aa46e0e57.js?v=968" async></script>',
		'hotels' => '<script charset="utf-8" src="//www.travelpayouts.com/widgets/2c027c01105af0da7658ea86e8304e32.js?v=968" async></script>',
		'rental' => '<div id="rc-connect-container"></div><script id="rc-connect" src="http://www.rentalcars.com/partners/integrations/connect/connect.js" data-container="rc-connect-container" data-preflang="ru" data-template="universal" data-enable-return-checkbox="true" data-affiliate-code="cy2rusru" data-adcamp="searchengine" data-adplat="homepage" data-hero-image="17" data-hide-modules="cars,hero" data-box-shadow="false"></script></div>',
		'taxi' => '<script charset="utf-8" src="//www.travelpayouts.com/widgets/f22a0405070a9b04b30d7f9042359b40.js?v=944" async>',
		),
	'en' => array(
		'tickets' => '<script charset="utf-8" src="//www.travelpayouts.com/widgets/4037f06cfd0a350c53b74c379afdb14f.js?v=968" async></script>',
		'hotels' => '<script charset="utf-8" src="//www.travelpayouts.com/widgets/118383870fb338f293bf01ae4f6409c9.js?v=968" async></script>',
		'rental' => '<div id="rc-connect-container"></div><script id="rc-connect" src="http://www.rentalcars.com/partners/integrations/connect/connect.js" data-container="rc-connect-container" data-preflang="en" data-template="universal" data-enable-return-checkbox="true" data-affiliate-code="cy2rusru" data-adcamp="searchengine" data-adplat="homepage" data-hero-image="17" data-hide-modules="cars,hero" data-box-shadow="false"></script></div>',
		'taxi' => '<script charset="utf-8" src="//www.travelpayouts.com/widgets/f22a0405070a9b04b30d7f9042359b40.js?v=944" async>',
		),
	);

$search_form_header = array(
	'el' => array('tickets' => "Πού θέλετε να πετάξετε?", 
				  'hotels' => "Πού θέλετε να ζήσετε?", 
				  'rental' => "Πού θέλετε να οδηγήσετε?", 
				  'taxi' => "Φτηνές ταξί σε όλο τον κόσμο"),
	'ru' => array('tickets' => "Куда вы хотите полететь?", 
				  'hotels' => "Где вы планируете остановиться?", 
				  'rental' => "Где вы хотите взять в прокат машину?", 
				  'taxi' => "Дешевые такси и трансферы по всему миру"),
	'en' => array('tickets' => "Where you want to fly?", 
				  'hotels' => "Where you want to live?", 
				  'rental' => "Where you want to drive?", 
				  'taxi' => "Cheapest taxi worldwide")
);

$carousel = array(
	'el' => array('tickets' => "Προτάσεις από περισσότερες από 700 αεροπορικές εταιρίες και 100 πράκτορες στο εισιτήριο. ", 
				  'hotels' => "Ξενοδοχεία όλων των κατηγοριών, οπουδήποτε στον κόσμο στις καλύτερες τιμές.", 
				  'rental' => "Πιο ευνοϊκές ενοικίασης αυτοκινήτων από φορείς του κόσμου.", 
				  'taxi' => "Παραγγείλετε ένα ταξί από το αεροδρόμιο όπου κι αν πάτε."),
	'ru' => array('tickets' => "Предложения от более, чем 700 авиакомпаний и 100 агентств по бронированию билетов. ", 
				  'hotels' => "Отели всех категорий в любой точке мира по лучшим ценам.", 
				  'rental' => "Самые выгодные предложения по прокату машин от мировых операторов.", 
				  'taxi' => "Заказ такси и трансферов из аэропорта куда бы вы не отправились."),
	'en' => array('tickets' => "Offers from more than 700 airlines and 100 booking agencies. ", 
				  'hotels' => "Hotels of all categories in any place of the world for the best prices.", 
				  'rental' => "The most profitable offers for car hire from world operators.", 
				  'taxi' => "Order a taxi and transfer from the airport wherever you go.")
	);

$currency = array(
	'el' => 'EUR',
	'ru' => 'RUB',
	'en' => 'USD'
	);

$background = array(
	'tickets' => '/img/back_aviatickets.jpg',
	'hotels' => '/img/background_hotels.jpg',
	'rental' => '/img/cy2rus_rentacar_bg.jpg',
	'taxi' => '/img/taxi_bg.jpg',
	);

$subscribe_text = array(
	'el' => array('title' => "Εγγραφή νέα μας", 'button' => "Εγγραφείτε", 'saved' => 'Ευχαριστώ! Κάναμε!'),
	'ru' => array('title' => "Подпишитесь на новости", 'button' => "Подписаться", 'saved' => 'Спасибо! Мы записали!'),
	'en' => array('title' => "Subscribe our news", 'button' => "Subscribe", 'saved' => 'Thank you! We saved!')
);

$languages = array(
	'el' => 'Ελληνικά',
	'en' => 'English',
	'ru' => 'Русский'
	);

$download_text = array(
	'el' => "Κατεβάστε την εφαρμογή για κινητά",
	'ru' => "Скачайте наше мобильное приложение",
	'en' => "Download mobile App"
	);

$reason_block = array(
	'el' => array('title' => "Γιατί θα πρέπει να πετάξετε με εμάς?",
				  'reason1' => "Κάλυψη",
				  'reason1_text' => "Μαζί με το υπηρεσία αναζήτησης πτήσεων μας ψάχνουμαι για τις καλύτερες προσφορές σε πάνω από 700 αεροπορικές εταιρείες και πάνω από 100 γραφεία έκδοσης εισιτηρίων, δίνοντάς σας την καλύτερη στις επιλογές τιμών και διαδρομής.",
				  'reason2' => "Φτηνός",
				  'reason2_text' => "Δεν πρόσθετουμαι αμοιβές και προμήθειες. Η τιμή που βλέπετε - είναι η τελική τιμή για την οποία μπορείτε να αγοράσετε το εισιτήριό σας. Εμείς δεν κάνουμαι επιπλέον επιβαρύνσεις.",
				  'reason3' => "Ασφάλεια",
				  'reason3_text' => "Σας προσφέρονται ολες οι επιλογές αναζήτησης - είτε με απευθείας πτήσεις είτε προσφορές, και ως εκ τούτου διεξάγεται μια πλήρη πληρωμή της ασφάλειας, καθώς και την πρόσβαση στην κράτησή σας 24/7"),
	'ru' => array('title' => "Почему нужно покупать билеты у нас?",
				  'reason1' => "Охват",
				  'reason1_text' => "Наш авиасканнер ищет для вас самые лучшие предложения по более чем 700 авиакомпаниям и более 100 агентствам по продаже билетов, выдавая вам лучшие по цене и маршруту варианты.",
				  'reason2' => "Низкие цены",
				  'reason2_text' => "Никаких дополнительных сборов и комиссий. Цена, которую вы видите - это конечная цена продавца, за которую вы купите ваш билет. Мы не делаем никаких наценок и сборов сверх этого.",
				  'reason3' => "Безопасность",
				  'reason3_text' => "Все выданные поиском варианты - это или прямые предложения авиакомпаний или проверенные агентства, а потому осуществляется полная безопасность платежей, а также доступ к вашему бронированию в режиме 24/7"),
	'en' => array('title' => "Why you should fly with us?",
				  'reason1' => "Coverage",
				  'reason1_text' => "Our skyskanner looking for the best offers on over 700 airlines and more than 100 ticket offices, giving you the best in price and route options.",
				  'reason2' => "Cheapest prices",
				  'reason2_text' => "No additional fees and commissions. The price you see - it is the final price of the seller, for which you buy your ticket. We make no extra charges and fees in excess of this.",
				  'reason3' => "Safety",
				  'reason3_text' => "All search options issued - is either direct flights or offers proven agency, and therefore carried out a full security payments, as well as access to your booking 24/7.")
	);
$copyright_text = array(
	'el' => array('title' => "PTISI.EU &copy; ",
				  'text' => "Search, find and book cheap flights and hotels for free.<br>Fair prices and fast results.<br>Contact us at: "),
	'ru' => array('title' => "PTISI.EU &copy; ",
				  'text' => "Поиск, бронирование и покупка дешевых авиабилетов и отелей.<br>Трансферы и аренда машин по всему миру.<br>Связаться с нами: "),
	'en' => array('title' => "PTISI.EU &copy; ",
				  'text' => "Search, find and book cheap flights and hotels for free.<br>Fair prices and fast results.<br>Contact us at: ")
	);

$email_window = array(
	'el' => array('title' => 'Στείλτε μας ένα E-mail',
				  'name' => 'Ονομα:',
				  'subject' => 'Θέμα:',
				  'message' => 'Μήνυμα:',
				  'cancel' => 'Κλείσιμο',
				  'send' => 'Αποστολή'),
	'ru' => array('title' => 'Отправить нам письмо',
				  'name' => 'Ф.И.О.:',
				  'subject' => 'Тема:',
				  'message' => 'Сообщение:',
				  'cancel' => 'Закрыть',
				  'send' => 'Отправить'),
	'en' => array('title' => 'Send E-mail to us',
				  'name' => 'Name:',
				  'subject' => 'Subject:',
				  'message' => 'Message:',
				  'cancel' => 'Close',
				  'send' => 'Send')
	);


function check_language() {
	global $global_lang;

	if (isset($_COOKIE['lang'])) $global_lang = $_COOKIE['lang'];
	if ($_GET != null && isset($_GET['lang'])) {
		$global_lang = $_GET['lang'];
		setcookie('lang',$global_lang,0,"/");
	}
}

?>
