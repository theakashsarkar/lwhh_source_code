<?php
function doTaskA():void {
    echo "Step A Done\n";
}
function doTaskB():void {
    echo "Step B Done\n";
}

function doTaskC():void {
    echo "Step C Done\n";
}

function doTaskD():void {
    echo "Step D Done\n";
}

function doTaskE():void {
    echo "Step E Done\n";
}

function doTheLargerTask():void {
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

doTheLargerTask();