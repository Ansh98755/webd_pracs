<html>
    <head>
        <title>php codes</title>
    </head>
    <body>
        <form method="post">
            Number1: <input type="number" id="num1" name="num1"><br><br>
            Number2: <input type="number" id="num2" name="num2" ><br><br>
            <input type="submit" name="submit" value="Swap Numbers">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];

            echo "<h3>Before Swapping: </h3>"
            echo "Number 1 : $num1<br>"
            echo "Number 2 : $num2<br>"

            $temp=$num1;
            $num1=$num2;
            $num2=$temp;

            echo "<h3> After Swapping: </h3>"
            echo "Number 1: $num1 <br>"
            echo "Number 2: $num2 <br>"
        }
        ?>
    </body>
</html>