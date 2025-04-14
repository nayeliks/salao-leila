$(document).ready(function () {
    var registerView = (function ($) {
        var $form, $registerButton;

        return {
            init: function () {
                $form = $('#register-form');
                $registerButton = $('#register-btn');
                this.bindEvents();
            },

            bindEvents: function () {
                $form.on('submit', function (e) {
                    e.preventDefault();
                    registerView.handleSubmit();
                });
            },

            handleSubmit: function () {
                $registerButton.prop('disabled', true);
                var formData = {
                    description: $('#description').val(),
                    login: $('#login').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                    ddi: $('#ddi').val(),
                    number: $('#numero').val(),
                    type: 2
                };

                loginController.createAccount(
                    formData,
                    function (response) {
                        if (response.success) {
                            window.location.href = '/login';
                        }
                    },
                    function () {
                        alert('Erro ao cadastrar. Tente novamente mais tarde, ou contate o administrador do sistema.');
                        $registerButton.prop('disabled', false);
                    }
                );
            }
        };
    })(jQuery);

    registerView.init();
});