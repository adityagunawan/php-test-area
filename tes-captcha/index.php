<html>
    <head>
        <title>Google Captcha V2</title>

        <!-- Load Librari Google reCaptcha nya -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <div style="padding-top:20px;padding-left:30px">
        <h3>Tes Google Captcha V2</h3>
        <form method="POST" action="proccess.php">
            <label>Username :</label>
            <input type="text" name="username"/>
            <br/>
            <br/>
            <label>Password :</lable>
            <input type="password" name="password"/>
            <br/>
            <br/>
            <div
                class="g-recaptcha"
                data-sitekey="6LfhwMcUAAAAAGe77ovttK4eedRuNM3T5utSuFia"></div>
            <br/>
            <button type="submit">Sign In</button>
        </form>
    </div>
</html>