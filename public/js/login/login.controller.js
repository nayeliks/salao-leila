var loginController = (function ($) {
    return {
        checkLogin: function (config, successCallback, errorCallback) {
            $.ajax({
                url: '/login/check',
                type: 'POST',
                dataType: 'json',
                data: config,
                success: successCallback,
                error: errorCallback
            });
        },

        createAccount: function (config, successCallback, errorCallback) {
            $.ajax({
                url: '/login/create',
                type: 'POST',
                dataType: 'json',
                data: config,
                success: successCallback,
                error: errorCallback
            });
        }
    };
})(jQuery);