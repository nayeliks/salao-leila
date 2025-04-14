$(document).ready(function () {
    var loginView = (function ($) {
        var $form;

        return {
            init: function () {
                $form = $('#login-form');
                $loginButton = $('#login-btn');
                this.bindEvents();
            },

            bindEvents: function () {
                $form.on('submit', function (e) {
                    e.preventDefault();
                    loginView.handleSubmit();
                });
            },

            handleSubmit: function () {
                $loginButton.prop('disabled', true);
                var formData = {
                    login: $('#login').val(),
                    password: $('#password').val()
                };

                loginController.checkLogin(
                    formData,
                    function (response) {
                        if (response.success) {
                            window.location.href = '/dashboard';
                        } else {
                            $('#login-error-message').text('Login ou senha inválidos.');
                            $('#loginErrorModal').modal('show');
                        }
                        $loginButton.prop('disabled', false);
                    },
                    function () {
                        $('#login-error-message').text('Erro ao tentar realizar o login. Verifique suas credenciais, se persistir, contate o administrador do sistema.');
                        $('#loginErrorModal').modal('show');
                        $loginButton.prop('disabled', false);
                    }
                );
            }
        };
    })(jQuery);

    loginView.init();
});