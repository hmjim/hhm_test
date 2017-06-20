	(function($){
        $(document).ready(function () {
            $("#post").click(function (e) {
                e.preventDefault();
					if($('[name="name_txt"]').val() != '') {
						var pattern = /^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/u; 
						if(pattern.test($('[name="name_txt"]').val())){
							$('[name="name_txt"]').css({'border' : '1px solid #569b44'});
						} else {
							$('[name="name_txt"]').css({'border' : '1px solid #ff0000'});
							alert('Введите правильное имя');
							return false;
						}
					} else {
						$('[name="name_txt"]').css({'border' : '1px solid #ff0000'});
						alert('Введите имя');
						return false;
					}
					
					if($('[name="email_txt"]').val() != '') {
						var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
						if(pattern.test($('[name="email_txt"]').val())){
							$('[name="email_txt"]').css({'border' : '1px solid #569b44'});
						} else {
							$('[name="email_txt"]').css({'border' : '1px solid #ff0000'});
							alert('Введите правильный Email');
							return false;
						}
					} else {
						$('[name="email_txt"]').css({'border' : '1px solid #ff0000'});
						alert('Введите Email');
						return false;
					}

					if ($('[name="message_txt"]').val() === '') 
					{
						alert('Введите текст сообщения');
						return false;
					}
                var myData = 'name_txt=' + $('[name="name_txt"]').val() + '&email_txt=' + $('[name="email_txt"]').val() + '&message_txt=' + $('[name="message_txt"]').val();
                
                jQuery.ajax({
                    type: "POST",
                    url: "../action.php",
                    dataType: "text",
                    data: myData,
                    success: function (response) {
                        $(".comments .items").append(response);
                        $('[name*=""').val('');
                        $('html, body').animate({ scrollTop: $('.comments .item:last').offset().top }, 500);
                    }
                    , error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError);
                    }
                });
            });
        });
	})(jQuery);