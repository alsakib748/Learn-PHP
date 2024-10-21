<?php 
/// Access Modifier
class Fund{
    private $fund;
    public function __construct($initialFund = 0){
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
    }

    public function subFund($money){
        $this->fund -= $money;
    }

    public function getFund(){
        echo "Total fund is ".$this->fund."\n";
    }

}    

$f1 = new Fund(50);
// $f1->fund = 20;
$f1->getFund();
$f1->addFund(30);
$f1->getFund();
$f1->subFund(20);
$f1->getFund();

?>