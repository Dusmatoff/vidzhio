//Bottom Form
jQuery(document).ready(function($) {
	$("#bottom_form").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://vidzhio.palladiumlab.site/wp-content/themes/vidzhio/bf-mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="alert alert-success">Сообщение отправлено</div>';
					$("#bottom_form").hide();
				}
				else {result = msg;}
				$('#bf-note').html(result);
			}
		});
		return false;
	});
});

//Form1
jQuery(document).ready(function($) {
	$("#form1").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://vidzhio.palladiumlab.site/wp-content/themes/vidzhio/form1-mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="alert alert-success">Ваш вопрос отправлен</div>';
					$("#form1").hide();
				}
				else {result = msg;}
				$('#form1-note').html(result);
			}
		});
		return false;
	});
});

//Form2
jQuery(document).ready(function($) {
	$("#form2").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://vidzhio.palladiumlab.site/wp-content/themes/vidzhio/form2-mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="alert alert-success">Ваш запрос отправлен. Менеджер скоро Вам позвонит.</div>';
					//$("#form2").hide();
				}
				else {result = msg;}
				$('#form2-note').html(result);
			}
		});
		return false;
	});
});

//Form2-2
jQuery(document).ready(function($) {
	$("#form2-2").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://vidzhio.palladiumlab.site/wp-content/themes/vidzhio/form2-2-mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="alert alert-success">Ваш запрос отправлен. Менеджер скоро Вам позвонит.</div>';
					//$("#form2").hide();
				}
				else {result = msg;}
				$('#form2-2-note').html(result);
			}
		});
		return false;
	});
});

//Form2-3
jQuery(document).ready(function($) {
	$("#form2-3").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://vidzhio.palladiumlab.site/wp-content/themes/vidzhio/form2-3-mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="alert alert-success">Ваш запрос отправлен. Менеджер скоро Вам позвонит.</div>';
					//$("#form2").hide();
				}
				else {result = msg;}
				$('#form2-3-note').html(result);
			}
		});
		return false;
	});
});

//Modal Form1
jQuery(document).ready(function($) {
	$("#modal-form1").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://vidzhio.palladiumlab.site/wp-content/themes/vidzhio/modal-form1-mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="alert alert-success">Ваш запрос отправлен. Менеджер скоро Вам позвонит.</div>';
					//$("#form2").hide();
				}
				else {result = msg;}
				$('#modal-form1-note').html(result);
			}
		});
		return false;
	});
});

//Modal Form2
jQuery(document).ready(function($) {
	$("#modal-form2").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://vidzhio.palladiumlab.site/wp-content/themes/vidzhio/modal-form2-mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="alert alert-success">Ваш запрос отправлен. Менеджер скоро Вам позвонит.</div>';
					//$("#form2").hide();
				}
				else {result = msg;}
				$('#modal-form2-note').html(result);
			}
		});
		return false;
	});
});

//Modal Form3
jQuery(document).ready(function($) {
	$("#modal-form3").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://vidzhio.palladiumlab.site/wp-content/themes/vidzhio/modal-form3-mail.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="alert alert-success">Ваш запрос отправлен. Менеджер скоро Вам позвонит.</div>';
					$("#modal-form3").hide();
				}
				else {result = msg;}
				$('#modal-form3-note').html(result);
			}
		});
		return false;
	});
});

