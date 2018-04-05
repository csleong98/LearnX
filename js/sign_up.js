$('document').ready(function () {

    var fullname_state = false;
    var username_state = false;

    var email_state = false;
    var pass_state = false;
    var confirm_pass_state = false;


    $('#fullname').on('blur', function () {
        var fullname = $('#fullname').val();

        if (fullname == '') {
            fullname_state = false;
            $('#fullname').parent().removeClass("form_success");
            $('#fullname').parent().addClass("form_error");
            $('#fullname').siblings("span").text('Please fill in full name');
            return;
        }

        $.ajax({
            url: 'index.php',
            type: 'post',
            data: {
                'fullname_check': 1,
                'fullname': fullname,
            },
            success: function (response) {
                if (response == 'taken') {
                    fullname_state = false;
                    $('#fullname').parent().removeClass("form_success");
                    $('#fullname').parent().addClass("form_error");
                    $('#fullname').siblings("span").text('Sorry... name already taken');
                } else if (response == 'not_taken') {
                    fullname_state = true;
                    $('#fullname').parent().removeClass("form_error");
                    $('#fullname').parent().addClass("form_success");
                    $('#fullname').siblings("span").text('Full name available');
                }
            }
        });
    });

    $('#username').on('blur', function () {
        var username = $('#username').val();

        if (username == '') {
            username_state = false;
            $('#username').parent().removeClass("form_success");
            $('#username').parent().addClass("form_error");
            $('#username').siblings("span").text('Please fill in username');
            return;
        }

        $.ajax({
            url: 'index.php',
            type: 'post',
            data: {
                'username_check': 1,
                'username': username,
            },
            success: function (response) {
                if (response == 'taken') {
                    username_state = false;
                    $('#username').parent().removeClass("form_success");
                    $('#username').parent().addClass("form_error");
                    $('#username').siblings("span").text('Sorry... username already taken');
                } else if (response == 'not_taken') {
                    username_state = true;
                    $('#username').parent().removeClass("form_error");
                    $('#username').parent().addClass("form_success");
                    $('#username').siblings("span").text('Username available');
                }
            }
        });
    });

    $('#email').on('blur', function () {
        var email = $('#email').val();
        var mail_format = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var mail = mail_format.test(email);

        if (email == '') {
            pass_state = false;
            $('#email').parent().removeClass("form_success");
            $('#email').parent().addClass("form_error");
            $('#email').siblings("span").text('Please fill in your email');
            return;
        } else if (!mail) {
            email_state = false;
            $('#email').parent().removeClass("form_success");
            $('#email').parent().addClass("form_error");
            $('#email').siblings("span").text('Please fill in a valid email');
            return;
        }

        $.ajax({
            url: 'index.php',
            type: 'post',
            data: {
                'email_check': 1,
                'email': email,
            },
            success: function (response) {
                if (response == 'taken') {
                    email_state = false;
                    $('#email').parent().removeClass("form_success");
                    $('#email').parent().addClass("form_error");
                    $('#email').siblings("span").text('Sorry... Email already taken');
                } else if (response == 'not_taken') {
                    email_state = true;
                    $('#email').parent().removeClass("form_error");
                    $('#email').parent().addClass("form_success");
                    $('#email').siblings("span").text('Email available');
                }
            }
        });
    });

    $('#password').on('blur', function () {

        var pass = $('#password').val();
        var password_confirm = $('#confirm_password').val();

        if (pass == '') {
            pass_state = false;
            $('#password').parent().removeClass("form_success");
            $('#password').parent().addClass("form_error");
            $('#password').siblings("span").text('Please fill in your password');
            return;
        } else if (pass == password_confirm) {
            pass_state = true;
            $('#password').parent().removeClass("form_error");
            $('#password').parent().addClass("form_success");
            $('#password').siblings("span").text('Password match');
            return;
        } else if (pass !== password_confirm) {
            pass_state = false;
            $('#password').parent().removeClass("form_success");
            $('#password').parent().addClass("form_error");
            $('#password').siblings("span").text('Password does not match');
            return;
        }
    });

    $('#confirm_password').on('blur', function () {

        var pass = $('#password').val();
        var password_confirm = $('#confirm_password').val();

        if (password_confirm == '') {
            password_confirm_state = false;
            $('#confirm_password').parent().removeClass("form_success");
            $('#confirm_password').parent().addClass("form_error");
            $('#confirm_password').siblings("span").text('Please fill in your password');
            return;
        } else if (pass !== password_confirm) {
            password_confirm_state = false;
            $('#confirm_password').parent().removeClass("form_success");
            $('#confirm_password').parent().addClass("form_error");
            $('#confirm_password').siblings("span").text('Password does not match');
            return;
        } else if (pass == password_confirm) {
            pass_state = true;
            $('#confirm_password').parent().removeClass("form_error");
            $('#confirm_password').parent().addClass("form_success");
            $('#confirm_password').siblings("span").text('Password match');
            return;
        }
    });

    $('#reg_btn').on('click', function () {
        var fullname = $('#fullname').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirm = $('#confirm_password').val();

        if ((fullname_state == false || username_state == false) || (email_state == false || pass_state == false)) {
            if (password_confirm_state == false) {
                alert('Please fill in ALL information');
            }
        } else {
            // proceed with form submission
            $.ajax({
                url: 'index.php',
                type: 'post',
                data: {
                    'submit': 1,
                    'fullname': fullname,
                    'username': username,
                    'email': email,
                    'password': password,
                    'password_confirm': password_confirm
                },
                success: function (response) {
                    if (response == 'saved') {
                        alert('Registered Successfully. Log in now');
                        $('#teamname').val('');
                        $('#username').val('');
                        $('#email').val('');
                        $('#password').val('');
                        $('#confirm_password').val('');
                        location.replace("index.php");
                    } else {
                        alert("not saved");
                    }
                }
            });
        }

    });
});