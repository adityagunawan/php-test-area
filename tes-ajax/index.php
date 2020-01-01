<html>
    <head>
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous">
    </head>

    <body>

        <div class="container">
            <div id="form">
                <h2>Vertical (basic) form</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter email"
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input
                            type="password"
                            class="form-control"
                            id="pwd"
                            placeholder="Enter password"
                            name="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember">
                            Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
            <div id="result"></div>
        </div>

    </body>
    <script>
        $(document).ready(function () {
           $(document).on('click', '.btn', function(e){
                e.preventDefault()
                $.ajax({
                    url : 'proccess.php',
                    method : 'post',
                    dataType: 'json',
                    data : {email : $("#email").val(), password : $("#pwd").val()},
                    success : function(r){
                       console.log(r)
                    //    var a = JSON.parse(r)
                       for (var i = 0; i < r.length; i++) {
                           $("#result").append("<p>ini value ke-" + r[i].value + "</p>")
                       }
                    }
                }).done(function(){
                    alert("ajax success!")
                })
           })
        })
    </script>
</html>