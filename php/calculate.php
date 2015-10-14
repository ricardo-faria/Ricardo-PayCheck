<?php    
    require 'calcSalary.php';

    $salary = $_GET["salary"];

    $inss = calc::calcInss($salary);
    $salary -= $inss;

    $irpf = calc::calcIrpf($salary);
    $salary -= $irpf;
    
    $result = array('salary' => $salary, 'inss' => $inss , 'irpf' => $irpf);
    echo json_encode($result);

?>