<?php
/**
 * Created by PhpStorm.
 * User: valeron
 * Date: 30.07.17
 * Time: 17:10
 */


    $arr = json_decode($_POST['json'], true);
    $name = trim(implode(" ",$arr));

    $result = "Здравствуйте";

    if(!empty($name))
    {
        $result .= ", $name";
    }

    $result .= "!";

    echo htmlspecialchars($result);

