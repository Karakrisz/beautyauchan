<?php

/******************** logs function content start **********************/

function logMessage($level, $message)
{
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] $message" . PHP_EOL);
    fclose($file);
}

/******************** errors function content start **********************/

function errorPage()
{
    include "tamplates/error.php";
    die();
}

/******************** routes function content start **********************/

$routes = [];

function route($action, $callable, $method = 'GET')
{
    global $routes;
    $pattern = "%^$action$%";
    $routes[strtoupper($method)][$pattern] = $callable;
}

function dispatch($action, $notFound)
{
    global $routes;
    $method = $_SERVER["REQUEST_METHOD"];
    if (array_key_exists($method, $routes)) {
        foreach ($routes[$method] as $pattern => $callable) {
            if (preg_match($pattern, $action, $matches)) {
                return $callable($matches);
            }
        }
    }
    return $notFound();
}

/******************** html function content start **********************/

function esc($string)
{
    echo htmlspecialchars($string);
}

/******************** connection function content start **********************/

function getConnection()
{
    global $config;
    $connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
    if (!$connection) {
        logMessage('ERROR', 'Connection error:' . mysqli_connect_error());
        errorPage();
    }
    return $connection;
}

/******************** home function content start **********************/

function promotions($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from promotions ORDER BY id DESC limit 1')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}

function about_us($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from about_us ORDER BY id DESC limit 3')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}

/******************** promotions function content start **********************/

function promotionsInsert($connection, $promotions_name, $promotions_comment)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO promotions (promotions_name, promotions_comment) VALUES (?,?)')) {
        mysqli_stmt_bind_param($statement, 'ss', $promotions_name, $promotions_comment);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}


/******************** about_name function content start **********************/

function aboutInsert($connection, $about_name)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO about_us (about_name) VALUES (?)')) {
        mysqli_stmt_bind_param($statement, 's', $about_name);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}