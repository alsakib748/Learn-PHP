<?php

trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number Series A\n";
        // parent::numberSeriesA(); 
    }
    function numberSeriesB(){
        echo "Number Series B\n";
    }
}
trait NumberSeriesTwo{
    function numberSeriesA(){
        echo "Number Series A++";
    }
}

class NumberSeries{
    use NumberSeriesOne,NumberSeriesTwo{
        NumberSeriesOne::numberSeriesA as numberSeriesAA;
        NumberSeriesTwo::numberSeriesA as numberSeriesAAA;
    }

    function numberSeriesA(){
        echo "Printing + Printing Number Series A\n";
    }
}
$ns = new NumberSeries();
$ns->numberSeriesAAA();

?>