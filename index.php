<?php 

$perem1 = 0;
$perem2 = 1;
$and = $perem1 || $perem1;

?>


<!DOCTYPE html>

<html>
<head>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/style.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="innerContainer">
            <table class="table table-hover table-bordered">
                <thead class="thead">
                <tr>
                    <th scope="col">A</th>
                    <th scope="col">B</th>
                    <th scope="col">!A</th>
                    <th scope="col">A || B</th>
                    <th scope="col">A && B</th>
                    <th scope="col">A xor B</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">0</th>
                    <th scope="row">0</th>
                    <td><?php echo $not = var_dump(!$perem1); ?></td>
                    <td><?php echo $or = var_dump($perem1||$perem1); ?></td>
                    <td><?php echo $and = var_dump($perem1&&$perem1); ?></td>
                    <td><?php echo $xor = var_dump($perem1 xor $perem1); ?></td>
                </tr>
                <tr>
                    <th scope="row">0</th>
                    <th scope="row">1</th>
                    <td><?php echo $not = var_dump(!$perem1); ?></td>
                    <td><?php echo $or2 = var_dump($perem1||$perem2); ?></td>
                    <td><?php echo $and2 = var_dump($perem1&&$perem2); ?></td>
                    <td><?php echo $xor2 = var_dump($perem1 xor $perem2); ?></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th scope="row">0</th>
                    <td><?php echo $not = var_dump(!$perem2); ?></td>
                    <td><?php echo $or3 = var_dump($perem2||$perem1); ?></td>
                    <td><?php echo $and3 = var_dump($perem2&&$perem1); ?></td>
                    <td><?php echo $xor3 = var_dump($perem2 xor $perem1); ?></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <th scope="row">1</th>
                    <td><?php echo $not = var_dump(!$perem2); ?></td>
                    <td><?php echo $not = var_dump($perem2||$perem2); ?></td>
                    <td><?php echo $and4 = var_dump($perem2&&$perem2); ?></td>
                    <td><?php echo $xor4 = var_dump($perem2 xor $perem2); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>  
    
    <?php
    $true = true;
    $false = false;
    $one = 1;
    $zero = 0;
    $minusone = -1;
    $onestring = "1";
    $null - null;
    $stringPhp = "php";
    ?>

    <div class="container">
        <div class="innerContainer">
            <table class="table table-hover table-bordered">
                <thead class="thead">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">true</th>
                    <th scope="col">false</th>
                    <th scope="col">1</th>
                    <th scope="col">0</th>
                    <th scope="col">-1</th>
                    <th scope="col">"1"</th>
                    <th scope="col">null</th>
                    <th scope="col">"php"</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">true</th>
                    <td>
                        <?php echo '=='.var_dump($true == $true); ?>
                        <br/>
                        <?php echo '==='.var_dump($true === $true); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($true == $false); ?>
                        <br/>
                        <?php echo '==='.var_dump($true === $false); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($true == $one); ?>
                        <br/>
                        <?php echo '==='.var_dump($true === $one); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($true == $zero); ?>
                        <br/>
                        <?php echo '==='.var_dump($true === $zero); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($true == $minusone); ?>
                        <br/>
                        <?php echo '==='.var_dump($true === $minusone); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($true == $onestring); ?>
                        <br/>
                        <?php echo '==='.var_dump($true === $onestring); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($true == $null); ?>
                        <br/>
                        <?php echo '==='.var_dump($true === $null); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($true == $stringPhp); ?>
                        <br/>
                        <?php echo '==='.var_dump($true === $stringPhp); ?>
                    </td>                
                </tr>
                <tr>
                    <th scope="row">false</th>
                    <td>
                        <?php echo '=='.var_dump($false == $true); ?>
                        <br/>
                        <?php echo '==='.var_dump($false === $true); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($false == $false); ?>
                        <br/>
                        <?php echo '==='.var_dump($false === $false); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($false == $one); ?>
                        <br/>
                        <?php echo '==='.var_dump($false === $one); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($false == $zero); ?>
                        <br/>
                        <?php echo '==='.var_dump($false === $zero); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($false == $minusone); ?>
                        <br/>
                        <?php echo '==='.var_dump($false === $minusone); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($false == $onestring); ?>
                        <br/>
                        <?php echo '==='.var_dump($false === $onestring); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($false == $null); ?>
                        <br/>
                        <?php echo '==='.var_dump($false === $null); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($false == $stringPhp); ?>
                        <br/>
                        <?php echo '==='.var_dump($false === $stringPhp); ?>
                    </td>                
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <?php echo '=='.var_dump($one == $true); ?>
                        <br/>
                        <?php echo '==='.var_dump($one === $true); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($one == $false); ?>
                        <br/>
                        <?php echo '==='.var_dump($one === $false); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($one == $one); ?>
                        <br/>
                        <?php echo '==='.var_dump($one === $one); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($one == $zero); ?>
                        <br/>
                        <?php echo '==='.var_dump($one === $zero); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($one == $minusone); ?>
                        <br/>
                        <?php echo '==='.var_dump($one === $minusone); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($one == $onestring); ?>
                        <br/>
                        <?php echo '==='.var_dump($one === $onestring); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($one == $null); ?>
                        <br/>
                        <?php echo '==='.var_dump($one === $null); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($one == $stringPhp); ?>
                        <br/>
                        <?php echo '==='.var_dump($one === $stringPhp); ?>
                    </td>                
                </tr>
                <tr>
                    <th scope="row">0</th>
                    <td>
                        <?php echo '=='.var_dump($zero == $true); ?>
                        <br/>
                        <?php echo '==='.var_dump($zero === $true); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($zero == $false); ?>
                        <br/>
                        <?php echo '==='.var_dump($zero === $false); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($zero == $one); ?>
                        <br/>
                        <?php echo '==='.var_dump($zero === $one); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($zero == $zero); ?>
                        <br/>
                        <?php echo '==='.var_dump($zero === $zero); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($zero == $minusone); ?>
                        <br/>
                        <?php echo '==='.var_dump($zero === $minusone); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($zero == $onestring); ?>
                        <br/>
                        <?php echo '==='.var_dump($zero === $onestring); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($zero == $null); ?>
                        <br/>
                        <?php echo '==='.var_dump($zero === $null); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($zero == $stringPhp); ?>
                        <br/>
                        <?php echo '==='.var_dump($zero === $stringPhp); ?>
                    </td>                
                </tr>
                <tr>
                    <th scope="row">-1</th>
                    <td>
                        <?php echo '=='.var_dump($minusone == $true); ?>
                        <br/>
                        <?php echo '==='.var_dump($minusone === $true); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($minusone == $false); ?>
                        <br/>
                        <?php echo '==='.var_dump($minusone === $false); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($minusone == $one); ?>
                        <br/>
                        <?php echo '==='.var_dump($minusone === $one); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($minusone == $zero); ?>
                        <br/>
                        <?php echo '==='.var_dump($minusone === $zero); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($minusone == $minusone); ?>
                        <br/>
                        <?php echo '==='.var_dump($minusone === $minusone); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($minusone == $onestring); ?>
                        <br/>
                        <?php echo '==='.var_dump($minusone === $onestring); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($minusone == $null); ?>
                        <br/>
                        <?php echo '==='.var_dump($minusone === $null); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($minusone == $stringPhp); ?>
                        <br/>
                        <?php echo '==='.var_dump($minusone === $stringPhp); ?>
                    </td>                
                </tr>
                <tr>
                    <th scope="row">"1"</th>
                    <td>
                        <?php echo '=='.var_dump($onestring == $true); ?>
                        <br/>
                        <?php echo '==='.var_dump($onestring === $true); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($onestring == $false); ?>
                        <br/>
                        <?php echo '==='.var_dump($onestring === $false); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($onestring == $one); ?>
                        <br/>
                        <?php echo '==='.var_dump($onestring === $one); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($onestring == $zero); ?>
                        <br/>
                        <?php echo '==='.var_dump($onestring === $zero); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($onestring == $minusone); ?>
                        <br/>
                        <?php echo '==='.var_dump($onestring === $minusone); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($onestring == $onestring); ?>
                        <br/>
                        <?php echo '==='.var_dump($onestring === $onestring); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($onestring == $null); ?>
                        <br/>
                        <?php echo '==='.var_dump($onestring === $null); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($onestring == $stringPhp); ?>
                        <br/>
                        <?php echo '==='.var_dump($onestring === $stringPhp); ?>
                    </td>                
                </tr>
                <tr>
                    <th scope="row">null</th>
                    <td>
                        <?php echo '=='.var_dump($null == $true); ?>
                        <br/>
                        <?php echo '==='.var_dump($null === $true); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($null == $false); ?>
                        <br/>
                        <?php echo '==='.var_dump($null === $false); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($null == $one); ?>
                        <br/>
                        <?php echo '==='.var_dump($null === $one); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($null == $zero); ?>
                        <br/>
                        <?php echo '==='.var_dump($null === $zero); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($null == $minusone); ?>
                        <br/>
                        <?php echo '==='.var_dump($null === $minusone); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($null == $onestring); ?>
                        <br/>
                        <?php echo '==='.var_dump($null === $onestring); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($null == $null); ?>
                        <br/>
                        <?php echo '==='.var_dump($null === $null); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($null == $stringPhp); ?>
                        <br/>
                        <?php echo '==='.var_dump($null === $stringPhp); ?>
                    </td>                
                </tr>
                <tr>
                    <th scope="row">"php"</th>
                    <td>
                        <?php echo '=='.var_dump($stringPhp == $true); ?>
                        <br/>
                        <?php echo '==='.var_dump($stringPhp === $true); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($stringPhp == $false); ?>
                        <br/>
                        <?php echo '==='.var_dump($stringPhp === $false); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($stringPhp == $one); ?>
                        <br/>
                        <?php echo '==='.var_dump($stringPhp === $one); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($stringPhp == $zero); ?>
                        <br/>
                        <?php echo '==='.var_dump($stringPhp === $zero); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($stringPhp == $minusone); ?>
                        <br/>
                        <?php echo '==='.var_dump($stringPhp === $minusone); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($stringPhp == $onestring); ?>
                        <br/>
                        <?php echo '==='.var_dump($stringPhp === $onestring); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($stringPhp == $null); ?>
                        <br/>
                        <?php echo '==='.var_dump($stringPhp === $null); ?>
                    </td>
                    <td>
                        <?php echo '=='.var_dump($stringPhp == $stringPhp); ?>
                        <br/>
                        <?php echo '==='.var_dump($stringPhp === $stringPhp); ?>
                    </td>                
                </tr>
                </tbody>
            </table>
        </div>    
    </div>    


</body>





</html>