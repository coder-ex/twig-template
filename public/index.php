<?php
// подгружаем и активируем авто-загрузчик Twig-а
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates', getcwd() . '/..');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    'cache' => '../var/cache/dev',
    'auto_reload' => true,
]);

echo $twig->render('child.html.twig', []);
//$twig->display('base.html.twig', array());
