<style>
    <?php include 'style.css'; ?>
</style>

<?php

echo "<h1>Calculator using PHP</h1>";

if (isset($_REQUEST['input'])) {
    $input = $_REQUEST['input'];
    try {
        $result = calculate($input);
        if ($result == "Null Input!") {
            echo $result;
        } else {
            echo "Result is " . $result;
        }
    } catch (ParseError $error) {
        echo "invalid Input!";
    } catch (Error $error) {
        echo $error->getMessage();
    }
}

function calculate($input)
{
    $temp = "Null Input!";
    if ($input != "") {
        $temp = @eval("return " . $input . ";");
    }
    if ($temp == null) {
        throw new Error("Null Input");
    }
    return $temp;
}

echo "<br><br><a href='index.html'>Back</a>";
