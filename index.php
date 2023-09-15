<!DOCTYPE html>
<html>
<head>
    <head><title>Membuat Form Login Dengan Database</title>
            <link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>
    <br/>
    <br/>
    <center><h2>FORM LOGIN</h2></center>
    <br/>
    <div class = "login">
    <br/>
    <form action = "login.php" method = "post" onSubmit = "return alidasi()">
        <div>
            <label>Username:</label>
            <input type="text" name = "Username" id = "username" />
        </div>
        <div>
            <label> Password: </label>
            <input type="password" name= "password" id = "password" />
        </div>
        <div> 
            <input type="submit" value = "login" class ="tombol" />
        </div>
    </form>
    </div>
    </body>
    <script type="text/javascript">
    function falidasi(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if(username!=""&&password!=""){
            return true;
        }else{
            alert("Username dan password harus diisi!");
            return false
        }
        }
</script>
</html>