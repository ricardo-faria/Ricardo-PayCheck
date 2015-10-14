<?php
    class calc{
        public static function calcInss($salary){
            
            if($salary <= 1399.12){
            $inss = round(($salary * 0.08), 2);        
            }
            else if($salary <= 2331.88){
                $inss = round(($salary * 0.09), 2);       
            }
            else if($salary <= 4663.75){
                $inss = round(($salary * 0.11), 2);        
            }
            else{
                $inss = 513.02;
            }
            
            return $inss;
        }
        
        public static function calcIrpf($salary){
            if($salary <= 1903.98){
                $irpf = 0;
            }
            else if($salary <= 2826.65){
                $irpf  = round(($salary *  0.075 - 142.8), 2);
               
            }
            else if($salary <= 3751.05){
                $irpf  = round(($salary * 0.15 - 354.8), 2);
            }
            else if($salary <= 4664.68){
                $irpf  = round(($salary * 0.225 - 636.13), 2);
            }
           else{
                $irpf  = round(($salary * 0.275 - 869.36), 2);
           }
            
            
            return $irpf;

        }
    }
?>