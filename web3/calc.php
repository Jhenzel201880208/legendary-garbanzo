<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
    $result = null;
        # test if input is_numeric
        if (isset($_POST['val1']) and isset($_POST['val2']) and isset($_POST['calc'])){
            $val1 = $_POST['val1'];
            $val2 = $_POST['val2'];
            $calc = $_POST['calc'];
        
            # test if calc is not null
            if(is_numeric($val1) and is_numeric($val2)){
                # switch statement for value of calc
                switch($calc){
                    case 'add':
                        $result = $val1 + $val2;
                        break;
                    case 'sub':
                        $result = $val1 - $val2;
                        break;
                    case 'mul':
                        $result = $val1 * $val2;
                        break;
                    case 'div':
                        $result = $val1 / $val2;
                        break;
                }
                echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>