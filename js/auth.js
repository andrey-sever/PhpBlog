$(document).ready(function() {

//Нажатие кнопки авторизация
//     document.querySelector('#authorization-submit').onclick = function (event) {
//         event.preventDefault();
    $('#authorization-submit').click(function () {
        let data = $('#auth-form').serialize();

        $.post("core/auth.php", data, function (result) {
            authorization(result);
        });

        function authorization(result) {
            if (result != '1') {
                $('#errorBlock').show();
                $('#errorBlock').text(result);
            } else {
                $('#errorBlock').hide();
                document.location.reload(true);
            }
        }
    });

    //выход из кабинета
    $('#exit_authorization').click(function () {
        $.post("core/exit.php", {}, function (result) {
            exitAuthorization(result);
        });

        function exitAuthorization(result) {
            location.href = "/PhpBlog/";
        }
    });
});
