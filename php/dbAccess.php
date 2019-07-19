<?PHP
$config = parse_ini_file('../../private/config.ini'); 
try {
    $dbh = new PDO('mysql:host='.$config['servername'].';'.'dbname='.$config['dbname'], $config['username'], $config['password']);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
?>