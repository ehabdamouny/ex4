<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <section>
            <?php
                $un = $_GET["reg_un"];
                $pw = $_GET["reg_pw"];

                if( $un == "ehabdamouny@gmail.com" && $pw == "111")
                    echo "<h2> Login successfull, Hello " . $un . "</h2";
                else
                    echo "<h2> Wrong password. please try again</h2>"
            ?>
        </section>
    </body>
</html>

