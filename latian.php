<!--CALCULATOR -->

<?php

    // == // loose comparison
    // === // sttrict comparison

    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        $angka1 = $_POST['angka1'];
        $operation = $_POST['operation'];
        $angka2 = $_POST['angka2'];
    }
    
    //$formula = $angka1.$operation.$angka2;
    //echo $formula;
    if($operation === "+"){
        $result = $angka1 + $angka2;
    }
    else if($operation === "-"){
        $result = $angka1 - $angka2;
    }
    else if($operation === "*"){
        $result = $angka1 * $angka2;
    }
    else if($operation === "/"){
        $result = $angka1 / $angka2;
    }
    //echo $result;
    //$eval()
?>


<html>


    <body>
        <form method="post">
            <input type="text" name="angka1"/>
            <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            </select>
            <input type="text" name="angka2"/>
            <input type="text" name="result" value="<?= $result?>"/>
            <input type="submit" name="submit"/>
        </form>

    </body>


</html>