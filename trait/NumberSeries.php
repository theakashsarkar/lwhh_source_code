<?php

trait NumberSeriesOne
{
    public function NumberSeriesA() :void
    {
        echo "Number series A\n";
    }
    public function NumberSeriesB(): void {
        echo "Number series B\n";
    }
}

trait NumberSeriesTwo
{
    public function NumberSeriesA() :void
    {
        echo "Number series A\n";
    }
    public function NumberSeriesB(): void {
        echo "Number series B\n";
    }
}

class NumberSeries {
    use NumberSeriesOne;
}
$ns = new NumberSeries();
$ns->NumberSeriesA();