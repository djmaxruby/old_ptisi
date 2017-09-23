	function preloaderOn() {
		var offX = ($(window).width() / 2) - 50;
		var offY = ($(window).height() / 2) - 50;
		$('#preloader').css('left',offX);
		$('#preloader').css('top',offY);
		$('#preloader').fadeIn();
	}

	function preloaderOff() {
		$('#preloader').fadeOut();
	}

	function foo() {
		
	}