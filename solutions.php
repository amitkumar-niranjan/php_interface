<?php
interface AdvancedArithmetic{
    public function divisorSum($n);
}

/*
 * Write your code here
 */
class Calculator implements AdvancedArithmetic {
    function divisorSum($n) {
        $tot =0;
        $arr = array();
        for ($i=1; $i <= $n ; $i++) { 
            // $tot = $n % $i;
            if(($n % $i === 0)){
                $arr[] = $i;
            }
        }
        var_dump($arr);
        return array_sum($arr);
    }
}

$n=23;
// $n=intval(fgets(STDIN));
$myCalculator=new Calculator();
if($myCalculator instanceof AdvancedArithmetic) //checking if Calculator has implemented AdvancedArithemtic
{
    $sum=$myCalculator->divisorSum($n);
    echo "I implemented: AdvancedArithmetic\n".$sum;
}
else
{
    echo "Wrong answer"; // You will get this output if you dont implement
}
?>
