function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
var form_register_full_submit = false;
// Форма регистрации
$(document).on('submit', '.registration', function() {
    var err = '',
        form = $(this);
    form.find('input[name=form_url]').val(window.location.href);
    if (!form.find('input[name="policy"]').prop( "checked")) {
        alert('Вы не отметили согласие на обработку персональных данных!');
    } else {
        form.find('input[name=login]').bind('keyup',function() {
            $(this).val($(this).val().replace(/[^A-z_0-9+]/i, ""));
        });
        form.find('input[name=password]').bind('keyup',function() {
            $(this).val($(this).val().replace(/[^A-z0-9-_@+]/i, ""));
        });
        var username, password, firstname, lastname;
        var dataArray = form.serializeArray(),
            formData = {};
        $(dataArray).each(function(i, field) {
            formData[field.name] = field.value;
        });
        //console.log(formData, dataArray);
        if (formData.phone != '' && formData.email != '') {
            if (validateEmail(formData.email)) {
                // ONLINE
                var phone = formData.phone;
                phone = phone.replace(/[- )(]/g, '');
                username = (formData.login != '') ? formData.login : formData.email.substring(0, formData.email.indexOf("@"));
                username = (username.length >= 5) ? username : username + Math.random().toString(36).slice(-(5-username.length));

                password = (formData.password != '') ? formData.password : Math.random().toString(36).slice(-8);

                firstname = (formData.first_name != '') ? formData.first_name : '';
                lastname = (formData.last_name != '') ? formData.last_name : '';

                var myData = {
                    "username" : username,
                    "data"     : {
                        "phone"     : phone,
                        "email"     : formData.email,
                        "firstName" : firstname,
                        "lastName"  : lastname,
                        "meta"      : {
                            "source" : "sigmasms.ru#regform",
                        }
                    }
                }
                //console.log(myData)
                if (!form_register_full_submit) {
                    form_register_full_submit = true;
                    $.ajax({
                        async : false,
                        cache: false,
                        type : 'POST',
                        url  : 'http://online.freesender.net/api/registration',
                        data : myData
                    }).done(function (res) {
                        //console.log(res);
                        if (res.id != undefined) {
                            $('#register_modal .send-block').html('<p>Вы успешно зарегистрированы на платформе <a href="https://online.sigmasms.ru" target="_blank">online.sigmasms.ru</a>!</p><p>Данные для входа отправлены вам на почту!</p>');
                            form.hide();
                        } else {
                            err = 'Ошибка регистрации!';
                        }
                        form_register_full_submit = false;
                    }).error(function (res) {
                        console.log(res.responseJSON);
                        if (res.responseJSON.data[0].message != undefined && res.responseJSON.data[0].message == "username must be unique") {
                            err = 'Пользователь с таким Логином уже есть. Выберите другой логин!';
                            form.find('input[name=login]').val(username);
                        } else if (res.responseJSON.data[0].message != undefined && res.responseJSON.data[0].message == "Field must be a valid phone number in any popular format.") {
                            err = 'Неверный формат номера телефона!';
                        } else {
                            err = 'Ошибка регистрации!';
                        }
                        form_register_full_submit = false;
                    });
                }
            } else {
                err = 'Неверный email!';
            }
        } else {
            err = 'Заполните все обязательные поля!';
        }
        if (err != '') {
            alert(err);
        }
    }
    return false;
});

// Обычная форма
$('.form-feedback').submit(function(e) {
    var err = '',
        form = $(this);
    form.find('input[name=form_url]').val(window.location.href);
    grecaptcha.execute('6Lc1hagUAAAAAJFJVXgAodIP9Eld7WTloEaQe3Cg', {action: 'homepage'});
    if (!form.find('input[name="policy"]').prop( "checked")) {
        alert('Вы не отметили согласие на обработку персональных данных!');
    } else {
        if (!form.hasClass('submitting')) {
            form.addClass('submitting');
            $.ajax({
                type: 'POST',
                url: 'https://sigmasms.ru/leadcrm/v2/add_lead/',
                data: form.serialize(), //  Если полей в форме нет то добавить + '&project_id=000&event_type_id=0000',
                success: function (data) {
                    //console.log(data)
                    if (data === 'success') {
                        form[0].reset();
                        $('#thankyou_modal').modal('show');
                        form.find('input').parent().removeClass('has-error');
                    } else {
                        form.find('input').parent().removeClass('has-error');
                        if (data === "err_empty") {
                            err = 'Заполните все поля!';
                            form.find('input').parent().addClass('has-error');
                        } else if (data === 'err_captcha') {
                            err = 'Неверный проверочный код!';
                        } else if (data === 'err_bot') {
                            err = 'Вы бот!';
                        } else if (data === 'err_email') {
                            err = 'Неверный email!';
                        } else if (data === 'err_phone') {
                            err = 'Введите корректный телефон!';
                            form.find('input[name=user_phone]').parent().addClass('has-error');
                        } else {
                            err = 'Ошибка отправки данных! Обновите страницу и попробуйте еще раз! Или напишите в чат поддержки в правом углу экрана.';
                            console.log(data);
                        }
                        alert(err);
                    }
                    form.removeClass('submitting');
                }
            });
        }
    }
    return false;
});
