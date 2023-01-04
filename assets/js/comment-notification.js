(function($) {
	"use strict";
	$(document).ready(function() {

		$("#submit").on('click', function() {
			var comment = $("#comment").val();
			var author = $("#author").val();
			var email = $("#email").val();
			const validateEmail = (email) => {
				return email.match(
					/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
				);
			};
			if (comment.length < 1 && !validateEmail(email) && author.length < 1) {
				$("#commentform").submit(function(e) {
					e.preventDefault();
				});
				$("p.comment-validation-message").html("Please fill Comment field");
				$("p.comment-validation-author").html("Please fill author name");
			    $("p.comment-validation-email").html("Please enter Email Address");
			  }else {
			    $("#commentform").unbind('submit').submit();
		      }
		})
	})
})(jQuery);