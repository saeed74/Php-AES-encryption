(function ($) {



    $('form#aes_e').on('submit', function (e) {

        e.preventDefault();
        var _type = "aes_e";
        var _string = $('#aes_e_text').val();
        var _key = $('#aes_e_key').val();

        $.ajax({
            type: "POST",
            url: "http://localhost:8080/encryption/openssl.php",
            data: {
                type: _type,
                string: _string,
                key: _key
            },
            cache: false,
            success: function (data) {

                realdata = data.trim();
                $('#aes_e_cipher').val(realdata);

            }
        });

    });


    
    $('form#aes_d').on('submit', function (e) {

        e.preventDefault();
        var _type = "aes_d";
        var _string = $('#aes_d_cipher').val();
        var _key = $('#aes_d_key').val();

        $.ajax({
            type: "POST",
            url: "http://localhost:8080/encryption/openssl.php",
            data: {
                type: _type,
                string: _string,
                key: _key
            },
            cache: false,
            success: function (data) {

                realdata = data.trim();
                $('#aes_d_text').val(realdata);

            }
        });

    });
















    $('form#des_e').on('submit', function (e) {

        e.preventDefault();
        var _type = "des_e";
        var _string = $('#des_e_text').val();
        var _key = $('#des_e_key').val();

        $.ajax({
            type: "POST",
            url: "http://localhost:8080/encryption/openssl.php",
            data: {
                type: _type,
                string: _string,
                key: _key
            },
            cache: false,
            success: function (data) {

                realdata = data.trim();
                $('#des_e_cipher').val(realdata);

            }
        });

    });


    
    $('form#des_d').on('submit', function (e) {

        e.preventDefault();
        var _type = "des_d";
        var _string = $('#des_d_cipher').val();
        var _key = $('#des_d_key').val();

        $.ajax({
            type: "POST",
            url: "http://localhost:8080/encryption/openssl.php",
            data: {
                type: _type,
                string: _string,
                key: _key
            },
            cache: false,
            success: function (data) {

                realdata = data.trim();
                $('#des_d_text').val(realdata);

            }
        });

    });




    $('form#base64_d').on('submit', function (e) {

        e.preventDefault();
        var _type = "base64_d";
        var _string = $('#base64_d_cipher').val();

        $.ajax({
            type: "POST",
            url: "http://localhost:8080/encryption/openssl.php",
            data: {
                type: _type,
                string: _string
            },
            cache: false,
            success: function (data) {

                realdata = data.trim();
                $('#base64_d_text').val(realdata);

            }
        });

    });

    $('form#base64_e').on('submit', function (e) {

        e.preventDefault();
        var _type = "base64_e";
        var _string = $('#base64_e_text').val();

        $.ajax({
            type: "POST",
            url: "http://localhost:8080/encryption/openssl.php",
            data: {
                type: _type,
                string: _string
            },
            cache: false,
            success: function (data) {

                realdata = data.trim();
                $('#base64_e_cipher').val(realdata);

            }
        });

    });





})(jQuery)