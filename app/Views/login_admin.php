<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Tittle -->
    <title>Admin Login</title>
    <!-- Style -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');



        body {
            background-image: url("img/background-admin.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .card {
            box-shadow: none;
        }

        h5 {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="row center align">
        <div class="col s12 m5" style="margin-top: 10%; ">
            <div class="container center-align">
                <h5 style="text-align: center; font-family:'Fredoka One', cursive; ">Login Admin Ulul Albaab</h5><br>
                <div class="card center-align" style="border-radius:15px ; font-family: 'Quicksand', sans-serif;">
                    <div class="card-content center-align">
                        <img class="vertical-middle" src="img/logo.png" alt="Logo" width="50%">
                        <form method="POST">
                            <div class="input-field">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="username" name="username" type="text" class="validate" required placeholder="username" required>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" name="password" type="password" class="validate" required placeholder="password" required>
                            </div>
                            <input type="button" class="waves-effect waves-light btn" style="border-radius:15px;" value="Login" id="submit" onclick="validate()" />
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        var attempt = 3; // Variable to count number of attempts.
        // Below function Executes on click of login button.
        function validate() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username == "admin" && password == "admin") {
                alert("Login successfully");
                window.location = "/admin/dashboard"; // Redirecting to other page.
                return false;
            } else {
                attempt--; // Decrementing by one.
                alert("Harap isi dengan benar");
                // Disabling fields after 3 attempts.
                if (attempt == 0) {
                    document.getElementById("username").disabled = true;
                    document.getElementById("password").disabled = true;
                    document.getElementById("submit").disabled = true;
                    return false;
                }
            }
        }
    </script>
</body>

</html>