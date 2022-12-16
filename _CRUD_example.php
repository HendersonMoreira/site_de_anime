<?php

header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set('America/Sao_Paulo');

$db = array(
    "hostname" => "localhost",
    "database" => "tioanimes",
    "username" => "root",
    "password" => ""
);


$conn = new mysqli($db['hostname'], $db['username'], $db['password'], $db['database']);


$sql = <<<SQL
INSERT INTO contacts (
    name, email, subject, message
) VALUES (
    'henderson daniel',
    'nemcatia@hotmail.com',
    'Teste de contato',
    'Essa é a mensagem do henderson.'
);
SQL;


$conn->query($sql);

$sql = <<<SQL
SELECT * FROM users 
    ORDER BY aniver DESC;
SQL;

$res = $conn->query($sql);

while ($user = $res->fetch_assoc()) {
    print_r($user);
}


$sql = <<<SQL
UPDATE contacts SET 
    nome = "henderson daniel",
    email = "nemcatia@hotmail.com"
WHERE
    id = 1;
SQL;


$conn->query($sql);


$sql = <<<SQL
DELETE FROM contacts WHERE id = 1;
SQL;

$conn->query($sql);