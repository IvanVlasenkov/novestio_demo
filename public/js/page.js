var page = {};
page.start = false;
page.error_class = 'error--row';
page.popup_errors = 'popup-errors';
page.popup_messages = 'popup-messages';
page.popup_answer = 'popup-check-answer';
page.popup_answer_datail_id = 'btn--check_validate_detail';
page.popup_answer_detail_tab = 'popup-check-answer-detail_tab';

page.urls = {};
page.urls.check_validate_detail = 'guest_check_validate_detail';

// проверили наличие ошибок
function checkErrors() {
    let errors = $('#' + page.popup_errors).find('.' + page.error_class).length;
    if (errors > 0) { return true; } else { return false; }
}

// проверили наличие сообщений
function checkMessages() {
    let errors = $('#' + page.popup_messages).find('.' + page.error_class).length;
    if (errors > 0) { return true; } else { return false; }
}

// проверили наличие ответа валидации
function checkAnswer() {
    let errors = $('#' + page.popup_answer).find('.' + page.error_class).length;
    if (errors > 0) { return true; } else { return false; }
}

// показали заданную popup - форму
function showPopup(popup_name = null) {
    if (popup_name && $('#' + popup_name).hasClass('hide')) {
        $('#' + popup_name).removeClass('hide');
        $('#message').removeClass('hide');
        if (!($('#message').hasClass('popup-flex'))) { $('#message').addClass('popup-flex'); }
    }
}

// проверили наличие всплывающих окон
function checkPopups() {
    let popups = $('#message').find('.popup').length;
    if (popups > 0) { return true; } else { return false; }
}

// построили структуру для показа детализации по запросу
function buildDetailStructure(data) {
    let result = $('<div/>', { 'id': page.popup_answer_detail_tab, 'class': 'popup_tab corp-style-5' });
    $.each(data, function(i, k) {
        let row = $('<div />', { 'class': 'popup-row' });
        $.each(k, function(param, val) {
            if (param === 'created_at' || param === 'visitor_ip') {
                let row_cell = $('<div />', { 'class': 'popup-cell', 'text': val }).appendTo(row);
            }
        });
        $(row).appendTo(result);
    });
    return result;
}

// стартуем страницу
$(document).ready(function() {
    page.start = true;
    // при необходимости, показываем popup ошибок
    if (checkErrors()) { showPopup(page.popup_errors); }
    // при необходимости показываем сообщения
    if (checkMessages()) { showPopup(page.popup_messages); }
    // при необходимости, показали результат проверки
    if (checkAnswer()) { showPopup(page.popup_answer); }

    // закрыть popup
    $("#message").on("click", ".popup-close", function(e) {
        let current_popup = $(this).attr('data-parentpopup');
        if (current_popup) {
            $('#' + current_popup).remove();
            if (!checkPopups()) { $('#message').removeClass('popup-flex').addClass('hide'); }
        }
    });


    $('#message').on('click', '#' + page.popup_answer_datail_id, function(e) {

        let app_data = $(this).attr('data-qrcode');

        let detail_result = ajaxRequest(app_data, page.urls.check_validate_detail);
        detail_result.done(function(data) {
            if (data) {
                let data_structure = buildDetailStructure(data);
                $('#' + page.popup_answer).append(data_structure);
                $('#' + page.popup_answer_datail_id).addClass('hide');
            }
        });
        return false;
    });

});

$('body').on('click', '#navbarDropdownMenuLink', function(e) {
    alert();
});

// посылка запроса на сайт
function ajaxRequest(app_data = null, url_path = null) {
    if (app_data && url_path) {

        JSON.stringify(app_data);

        return $.ajax({
            type: 'POST',
            url: url_path,
            data: { app_data },
            headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').val() }
        });
    }
}