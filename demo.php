
<!doctype html>
<html>
<head>
<title>Demo Calculator</title>

</head>
<body>

<form>
    <input type="number" name="Num" step = '0.01' placeholder="Number">
    <select name="Operator">
        <option>None</option>
        <option>-</option>
        <option>+</option>
        <option>*</option>
        <option>/</option>
        <option>%</option>
    </select>
    <br>
    <input type="number" name="Num1" step = '0.01' placeholder="Number">
    <button type="submit" name="submit" value="submit">submit</button>
    <br>
    
</form>
<p>Result: </p>
<?php
    if (isset($_GET['submit'])){
    $result = $_GET['Num'];
    $result1 = $_GET['Num1'];
    switch($result){
        case 'Null':
            echo "Please enter number";
    }
    

    $op = $_GET['Operator'];
        
    switch ($op) {
        case 'None':
            echo "Choose Operator";
            break;
        case '+':
            echo $result + $result1;
            break;
        case '-':
            echo $result - $result1;
                break;
            case '*':
            echo $result * $result1;
            break;
        case '/':
            echo $result / $result1;
            break;
        case '%':
            echo $result / 100;
            break;
        }
    }
?>


</body>
</html>