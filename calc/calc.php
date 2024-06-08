<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Multi purpose Calculator Using PHP</h1>
    <form method="post" action="calc.php">
    <label for="num1">Number 1:</label>
      <input type="number"  id="num1" name="num1"><br><br>
      <label for="num2">Number 2:</label>
      <input type="number"  id="num2" name="num2"><br><br>
      <label for="operation">Operation:</label>  
        <select id="operator" name="operator">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="division">Division (/)</option>
            <option value="exponent">Exponentiation (pow)</option>
            <option value="percentage">Percentage (%)</option>
            <option value="square root">Square root (sqrt)</option>
            <option value="logarithms">Logarithm (log)</option>
        </select><br><br>
        
        <input class="button" type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
               
                break;
            case 'subtract':
                $result = $num1 - $num2;
               
                break;
            case 'multiply':
                $result = $num1 * $num2;
                
                break;
            case 'division':
                if ($num2!= 0) {
                    $result = $num1 / $num2;
                    
                } else {
                    $result = "Error: Division by zero is not allowed";
                }
                break;
            case 'logarithms':
                $result = log($num1);
                
                break;
            case 'square root':
                $result = sqrt($num1);
                
                break;
            case 'percentage':
                $result = ($num1 / 100) * $num2;
               
                break;
            case 'exponent':
                $result = pow($num1, $num2);
                
                break;
            default:
                $result =  "Invalid option";
        }
        echo "$num1 $operator $num2 =". $result;
    }
   ?>
</body>
</html>