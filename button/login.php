<head>
        <title>Login page</title>
    </head>
    <body>
        <h1>Login Page</h1>
        <form name="login">
            Username<input type="text" name="username"/>
            Password<input type="password" name="pass"/>
            <input type="button" onclick="check(this.form)" value="Login"/>
            <input type="reset" value="Cancel"/>
        </form>
        <script language="javascript">
            function check(form) { 
               
                if(form.username.value == "root" && form.pass.value == "1234") {
                    window.open('showtable.php')
                }
                else {
                    alert("Error Password or Username")
                }
            }
        </script>
    </body>
</html>