<?php
 
$array = [10, 10.12, true, '10USD', 'USD'];
function getValue($x, $y)
{
    $typeMap = [
        'integer' => 'int',
        'int' => 'int',
        'float' => 'float',
        'double' => 'float',
        'real' => 'float',
        'string' => 'string',
        'boolean' => 'bool',
        'bool' => 'bool',
    ];
    $yType = $typeMap[gettype($y)];
    $xType = $typeMap[gettype($x)];
 
    if ($xType == 'string')
        $x = "'$x'";
    elseif ($xType == 'bool')
        $x = $x ? 'true' : 'false';
    try {
        eval("if (!function_exists('test$yType')) {function test$yType($yType \$arg){}} test$yType($x);");
    } catch (Error $e) {
        return get_class($e).': '.$e->getMessage();
    }
    return 'Pass';
}
 
?>
<table border="1" width="50%">
    <thead>
 
    <tr>
        <td></td>
        <td align="center" colspan="<?= count($array) ?>"><strong>Input value</strong></td>
    </tr>
    <tr>
        <td></td>
        <?php foreach ($array as $header): ?>
            <td><?= gettype($header), ' ', var_export($header) ?></td>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <tr></tr>
    <?php foreach ($array as $y): ?>
        <tr>
            <td><?= gettype($y), ' ', var_export($y) ?></td>
            <?php foreach ($array as $x): ?>
                <td><?= getValue($x, $y); ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
