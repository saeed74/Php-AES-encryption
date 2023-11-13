<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="paymentbox">

        <?php 

date_default_timezone_set('Asia/Tehran');
ini_set("log_errors", 1);
ini_set("error_log", "./z_php_error.log");
set_exception_handler(function($e) {
    error_log(
        date('Y-m-d H:i:s').' | '.$_SERVER['REQUEST_URI'].' | '.$e->getMessage().PHP_EOL,
        3,
        "./z_sql_error.log"
    );
});

foreach ( glob("./libs/*.php" ) as $filename )  include $filename;

$functions = new Functions;

?>


        <div class="rightbox box">
            <br>
            <div><b>AES Encryption</b></div>
            <form id="aes_e">
                <label>text:</label><br>
                <textarea class="textareas" rows="6" id="aes_e_text" name="text"></textarea><br>
                <label>key:</label><br>
                <input class="inputs" type="text" id="aes_e_key" name="key"><br>
                <label>cipher:</label><br>
                <textarea class="textareas" rows="6" id="aes_e_cipher" name="cipher"></textarea><br>
                <input id="aes_e_btn" class="btn" type="submit" value="Encrypt (to AES)">
            </form>
            <br><br><br><br><br>
            <div><b>AES Decryption</b></div>
            <form id="aes_d">
                <label>cipher:</label><br>
                <textarea class="textareas" rows="6" id="aes_d_cipher" name="cipher"></textarea><br>
                <label>key:</label><br>
                <input class="inputs" type="text" id="aes_d_key" name="key"><br>
                <label>text:</label><br>
                <textarea class="textareas" rows="6" id="aes_d_text" name="text"></textarea><br>
                <input class="btn" type="submit" value="Decrypt (from AES)">
            </form>
            <br><br>
        </div>

        <div class="leftbox box">
            <br>
            <div><b>DES Encryption</b></div>
            <form id="des_e">
                <label>text:</label><br>
                <textarea class="textareas" rows="6" id="des_e_text" name="text"></textarea><br>
                <label>key:</label><br>
                <input class="inputs" type="text" id="des_e_key" name="key"><br>
                <label>cipher:</label><br>
                <textarea class="textareas" rows="6" id="des_e_cipher" name="cipher"></textarea><br>
                <input class="btn" type="submit" value="Encrypt (to DES)">
            </form>
            <br><br><br><br><br>
            <div><b>DES Decryption</b></div>
            <form id="des_d">
                <label>cipher:</label><br>
                <textarea class="textareas" rows="6" id="des_d_cipher" name="cipher"></textarea><br>
                <label>key:</label><br>
                <input class="inputs" type="text" id="des_d_key" name="key"><br>
                <label>text:</label><br>
                <textarea class="textareas" rows="6" id="des_d_text" name="text"></textarea><br>
                <input class="btn" type="submit" value="Decrypt (from DES)">
            </form>
            <br><br>
        </div>


    </div>
    <br><br>


    <div class="paymentbox">
        <div class="rightbox box">
            <br>
            <div><b>BASE64 Encryption</b></div>
            <form id="base64_e">
                <label>text:</label><br>
                <textarea class="textareas" rows="6" id="base64_e_text" name="text"></textarea><br>
                <label>cipher:</label><br>
                <textarea class="textareas" rows="6" id="base64_e_cipher" name="cipher"></textarea><br>
                <input class="btn" type="submit" value="Encrypt (to BASE64)">
            </form>
            <br><br>
        </div>

        <div class="leftbox box">
            <br>
            <div><b>BASE64 Decryption</b></div>
            <form id="base64_d">
                <label>cipher:</label><br>
                <textarea class="textareas" rows="6" id="base64_d_cipher" name="cipher"></textarea><br>
                <label>text:</label><br>
                <textarea class="textareas" rows="6" id="base64_d_text" name="text"></textarea><br>
                <input class="btn" type="submit" value="Decrypt (from BASE64)">
            </form>
            <br><br>
        </div>
    </div>







    <script src="jquery.min.js"></script>
    <script src="api.js"></script>



</body>

</html>