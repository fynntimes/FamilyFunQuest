$(document).ready(function(){

  $("#submit").click(function(){

    var username = $("#newuser").val();
    var password = $("#password1").val();
    var password2 = $("#password2").val();
    var email = $("#email").val();
    var full_name = $("#full_name").val();
    var card_number = $("#card_number").val();
    var expire_month = $("#expiration-month").val();
    var expire_year = $("#expiration-year").val();
    var cvv = $("#cvv").val();

    if((username == "") || (password == "") || (email == "")) {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please fill out the entire form</div>");
    }
    else {
      $.ajax({
        type: "POST",
        url: "createuser.php",
        data: "newuser="+username+"&password1="+password+"&password2="+password2+"&email="+email+"&full_name="+full_name+"&card_number="+card_number+"&expiration_month="+expire_month+"&expiration_year="+expire_year+"&cvv="+cvv,
        success: function(html){

			var text = $(html).text();
			//Pulls hidden div that includes "true" in the success response
			var response = text.substr(text.length - 4);

          if(response == "true"){

			$("#message").html(html);

					$('#submit').hide();
			}
		else {
			$("#message").html(html);
			$('#submit').show();
			}
        },
        beforeSend: function()
        {
          $("#message").html("<p class='text-center'><img src='images/ajax-loader.gif'></p>")
        }
      });
    }
    return false;
  });
});
