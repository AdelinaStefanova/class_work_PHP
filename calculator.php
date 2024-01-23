<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Simple Calculator</title>
</head>

<body>

     <form method="get">
          <select name="oper">
               <option>+</option>
               <option>-</option>
               <option>*</option>
               <option>/</option>
          </select>
          Number 1: <input name="num1" value="null" type="number" /><br />
          Number 2: <input name="num2" value="null" type="number" /><br />
          <button type="submit">Calculate</button>
     </form>

     <?php
     if (
          isset($_GET['num1']) &&
          isset($_GET['num2']) &&
          isset($_GET['oper'])
     ) {
          $num1 = intval($_GET['num1']);
          $num2 = intval($_GET['num2']);

          switch ($_GET['oper']) {
               case "+":
                    echo "Result is: " . ($num1 + $num2);
                    break;
               case "-":
                    echo "Result is: " . ($num1 - $num2);
                    break;
               case "*":
                    echo "Result is: " . ($num1 * $num2);
                    break;
               case "/":
                    // Проверка за деление на 0
                    if ($num2 != 0) {
                         echo "Result is: " . ($num1 / $num2);
                    } else {
                         echo "Error! Division by zero is not allowed.";
                    }
                    break;
               default:
                    echo "Invalid operator.";
          }
     }
     ?>

</body>

</html>