+ function($) {
  $('.palceholder').click(function() {
    $(this).siblings('input').focus();
  });

  $('.form-control').focus(function() {
    $(this).parent().addClass("focused");
  });

  $('.form-control').blur(function() {
    var $this = $(this);
    if ($this.val().length == 0)
      $(this).parent().removeClass("focused");
  });
  $('.form-control').blur();

  // validetion
  $.validator.setDefaults({
    errorElement: 'span',
    errorClass: 'validate-tooltip'
  });

  $("#formvalidate").validate({
    rules: {
      userName: {
        required: true,
        minlength: 6
      },
      userPassword: {
        required: true,
        minlength: 6
      }
    },
    messages: {
      userName: {
        required: "Please enter your username.",
        minlength: "Please provide valid username."
      },
      userPassword: {
        required: "Enter your password to Login.",
        minlength: "Incorrect login or password."
      }
    }
  });

}(jQuery);

///////
document.getElementById("Register_Button").onclick = function () {
  location.href = "html/register.php";
};
document.getElementById("Login_Button").onclick = function () {
  location.href = "index.php";
};
document.getElementById("Login").onclick = function () {
  location.href = "home.php";
};
document.getElementById("AskQ").onclick = function () {
  location.href = "AskQ.php";
};

document.getElementById("cancle1").onclick = function () {
  location.href = "home.php";
};