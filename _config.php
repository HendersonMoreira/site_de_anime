<?php

header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set('America/Sao_Paulo');

$site_name = "Tio Animes";

$site_slogan = "";

$site_logo = "img/logo02 126.png";

$rgpass = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{7,25}$/";

$db = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/_config.ini', true);

foreach ($db as $server => $values) :

    
    if ($server == $_SERVER['SERVER_NAME']) :

        $conn = new mysqli($values['hostname'], $values['username'], $values['password'], $values['database']);

        if ($conn->connect_error) die("Falha de conexão com o banco e dados: " . $conn->connect_error);

    endif;
endforeach;

$conn->query("SET NAMES 'utf8'");
$conn->query('SET character_set_connection=utf8');
$conn->query('SET character_set_client=utf8');
$conn->query('SET character_set_results=utf8');
$conn->query('SET GLOBAL lc_time_names = pt_BR');
$conn->query('SET lc_time_names = pt_BR');

if (isset($_COOKIE["{$site_name}_user"])) :

    
    $user = json_decode($_COOKIE["{$site_name}_user"], true);


else :

   
    $user = false;

endif;

function post_clean($post_field, $type = 'string')
{

    switch ($type):
        case 'string':

            $post_value = htmlspecialchars($_POST[$post_field]);
            break;

        case 'email':

            
            $post_value = filter_input(INPUT_POST, $post_field, FILTER_SANITIZE_EMAIL);
            break;

    endswitch;
   
    $post_value = trim($post_value);
  
    $post_value = stripslashes($post_value);
   
    return $post_value;
}


function get_age($birthdate)
{
    
    $age = 0;

    $birth_date = date('Y-m-d', strtotime($birthdate));

    list($byear, $bmonth, $bday) = explode('-', $birth_date);

    $age = date("Y") - $byear;

    if (date("m") < $bmonth) $age -= 1;

    elseif ((date("m") == $bmonth) && (date("d") <= $bday)) $age -= 1;

    return $age;
}

function debug($element, $pre = true, $stop = true)
{
    if ($pre) echo '<pre>';
    print_r($element);
    if ($pre) echo '</pre>';
    if ($stop) exit;
}