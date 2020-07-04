<?php

$binNumber = $_POST['binNumber'] ?? null;

verifyBinNumber($binNumber);

function verifyBinNumber($binNumber) {
    $flag = false;
    $arrBin = str_split($binNumber);
    for ($i=0; $i < count($arrBin); $i++) { 
        if ($arrBin[$i] != 0 and $arrBin[$i] != 1 ) {
            $flag = true;
            header('Location: ../public/index.php?erro=erro1');
        }
    }

    if (!$flag) {
        convertBinToDec($binNumber);
    }
    
}

function convertBinToDec($binNumber) {
    if (!is_null($binNumber) && $binNumber != 0) {
        $arrBin = str_split($binNumber);
        $newArr = revertArray($arrBin);
        $sum = 0;
        $tam = count($newArr);
        for ($i=0; $i < $tam ; $i++) { 
             $sum += $newArr[$i] * pow(2,$i);
        }
        header('Location: ../public/index.php?resultado='.$sum);
    }else {
        header('Location: ../public/index.php?erro=erro2');
    }
}

function revertArray($arrBin) {
    $j = 0;
    for ($i=count($arrBin) - 1; $i >= 0; $i--) { 
        $newArr[$j]= $arrBin[$i];
        $j++;
    }

    return $newArr;
}