//Нажатие кнопки добавить. Статью
document.querySelector('#article-submit').onclick = function (event) {
    event.preventDefault();
    let data = $('#article-add').serialize();

    $.post("core/add_article.php", data, function(result) {
        articleAdd(result)
    });

    function articleAdd(result) {
        if (result != '1') {
            $('#errorBlock').show();
            $('#errorBlock').text(result);
        } else {
            $('#errorBlock').hide();
            document.querySelector('#article-submit').style.visibility = 'hidden';
            $('#successBlock').show();
        }
    }
}
