//Нажатие кнопки регистрация
document.querySelector('#registration-submit').onclick = function (event) {
    event.preventDefault();
    let data = $('#reg-add').serialize();

    $.post("core/reg.php", data, function(result) {
        registration(result)
    });

    function registration(result) {
        if (result != '1') {
            $('#errorBlock').show();
            $('#errorBlock').text(result);
        } else {
            $('#errorBlock').hide();
            $('#registration-submit').hide();
            $('#successBlock').show();
        }
    }
}
