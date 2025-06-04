<html>
    <head>
        <title>Maximum of 3 numbers</title>
    </head>
    <body>
        <form method='post'>
            Number1: <input type="number" name='num1'><br>
            Number2: <input type="number" name='num2'><br>
            Number3: <input type="number" name='num3'><br>
            <input type="submit" name="max" value="find maximum">
        </form>
        <?php
            if(isset($_POST['max'])){
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $num3=$_POST['num3'];
                
                if($num1>$num2&&$num1>$num3)
                    echo "$num1 is the maximum number among all";
                elseif($num2>$num1&&$num2>$num3)
                    echo "$num2 is the maximum number among all";
                else
                    echo "$num3 is the maximum number among all";
            }
        ?>
    </body>
</html>