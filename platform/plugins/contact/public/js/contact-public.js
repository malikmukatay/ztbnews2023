$(document).ready((function(){var e=function(e){$(".contact-error-message").html(e).show()},s=function(s){var t="";$.each(s,(function(e,s){""!==t&&(t+="<br />"),t+=s})),e(t)};$(document).on("click",".contact-form button[type=submit]",(function(t){var o=this;t.preventDefault(),t.stopPropagation(),$(this).addClass("button-loading"),$(".contact-success-message").html("").hide(),$(".contact-error-message").html("").hide(),$.ajax({type:"POST",cache:!1,url:$(this).closest("form").prop("action"),data:new FormData($(this).closest("form")[0]),contentType:!1,processData:!1,success:function(s){var t;s.error?e(s.message):($(o).closest("form").find("input[type=text]").val(""),$(o).closest("form").find("input[type=email]").val(""),$(o).closest("form").find("textarea").val(""),t=s.message,$(".contact-success-message").html(t).show()),$(o).removeClass("button-loading"),"undefined"!=typeof refreshRecaptcha&&refreshRecaptcha()},error:function(t){var r;"undefined"!=typeof refreshRecaptcha&&refreshRecaptcha(),$(o).removeClass("button-loading"),void 0!==(r=t).errors&&r.errors.length?s(r.errors):void 0!==r.responseJSON?void 0!==r.responseJSON.errors?422===r.status&&s(r.responseJSON.errors):void 0!==r.responseJSON.message?e(r.responseJSON.message):$.each(r.responseJSON,(function(s,t){$.each(t,(function(s,t){e(t)}))})):e(r.statusText)}})}))}));