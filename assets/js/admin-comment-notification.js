(function($) {
	"use strict";
	$(document).ready(function() {

		$("#submit").on('click', function() {
			var comment = $("#comment").val();
			var author = $("#author").val();
			var email = $("#email").val();

			if (comment.length < 1) {
				$("#commentform").submit(function(e) {
					e.preventDefault();
				});
				$(".comment-validation-message").html("Please enter your comment");
			} else if (comment.length >= 1) {
				$("#commentform").unbind('submit').submit();
			} else if (author.length < 1) {
				$("#commentform").submit(function(e) {
					e.preventDefault();
					$(".comment-validation-message").html("Please enter your name");
				});
			} else if (author.length >= 1) {
				$("#commentform").unbind('submit').submit();
			} else if (email.length < 1) {
				$("#commentform").submit(function(e) {
					e.preventDefault();
					$(".comment-validation-message").html("Please enter your email");
				});
			} else if (email.length >= 1) {
				$("#commentform").unbind('submit').submit();
			}

		})
	})
})(jQuery);