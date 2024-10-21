<?php 
trait NumberSeriesOne{
    private function numberSeriesA(){
        echo "Number Series A\n";
    }
    protected function numberSeriesB(){
        $this->numberSeriesA();
        echo "Number Series B\n";
    }
}
trait NumberSeriesTwo{
    use NumberSeriesOne;
    function numberSeriesC(){
        $this->numberSeriesA();
        echo "Number Series C\n";
    }
    function numberSeriesD(){
        $this->numberSeriesB();
        echo "Number Series D\n";
    }
}
class NumberSeries{
    use NumberSeriesTwo;
    // use NumberSeriesOne;
    // use NumberSeriesTwo;
}
$ns = new NumberSeries();
// $ns->numberSeriesA();
// $ns->numberSeriesB();
$ns->numberSeriesC();
$ns->numberSeriesD();

?>