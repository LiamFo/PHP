<body>
        <form action="inlogphp.php" method="POST">
            Username <input type="text" name="username" value="" required>
            Wachtwoord <input type="password" name="password" value="" required>
            <input type="submit" name="knop" value="verstuur">
        </form>
        <p1 style="color:rgba(0,0,0,0.3)">username: broeken<br>password: 64<br></p1>
        <p1 style="color:rgba(0,0,0,0.3)"><br>admin user: vos<br>password: 88</p1>
        <p><a href="inlogphp.php">website</a></p>
        <p><a href="inlogphp.php?loguit">log out</a></p>
        <p><a href="adminpage.php">admin</a></p>
        </body>

        <?php
            print_r($_SESSION);
        ?>