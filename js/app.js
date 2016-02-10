$(function(){
	var app = {
		init: function() {
			app.init_effect();
			app.init_event();

		},

		init_effect: function() {
			$(".error").hide();

		},

		init_event: function() {

			$("#head_tagline>a:first").on("click",function(){
				$("#head_tagline").height(320);
				$("#head_tagline>p:last").fadeIn(700);
			});

			$("#head_tagline>a:last").on("click",function(){
				$("#head_tagline>p:last").hide();
				$("#head_tagline").height(200);
			});

			$("#form-submit").on("click",function(){
				var phone = $("#form-number").val();
				if (!$.isNumeric(phone)) {
					$(".error:first").show();
				}
				else{
					$(".error:first").hide();
				};
			});
		}

	};
	app.init();
});
