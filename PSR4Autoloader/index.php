<?php

spl_autoload_register(static function (string $className)
{
    //   echo PHP_EOL . $className;
    if (strpos($className, 'Mathematica\\') !== 0)
    {
        return;
    }
    $filePath = substr($className, 11);
    require_once __DIR__ . '/classesfiles/' . str_replace('\\', DIRECTORY_SEPARATOR, $filePath) . '.php';
});

$sum = new \Mathematica\Summator(15, 9);
$sub = new \Mathematica\Substactor(33, 44);
$mul = new \Mathematica\multiplication\Multiplicator(16, 13);
$squ = new \Mathematica\multiplication\degree\Square(18);
$cub = new \Mathematica\multiplication\degree\Cube(23);

echo $sum->summ(), "<br/>";
echo $sub->subs(), "<br/>";
echo $mul->mult(), "<br/>";
echo $squ->sq(), "<br/>";
echo $cub->cub(), "<br/>";

?>