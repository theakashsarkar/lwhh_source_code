<?php
class Sodium{
    static function addForm($id):Sodium {}
    function addColumn($columnSize):Sodium {}
    function addFields(FieldInterface ...$file):Sodium {}
}
class FieldFactory{
    static function createTextField(): FieldInterface{}
    static function createRadio(): FieldInterface{}
}
class TextField extends AbstractField {

}
class Radio extends AbstractField {

}
class AbstractField implements FieldInterface{
    static function create($id): FieldInterface{}
    function setId():FieldInterface{}
    function setLabel():FieldInterface{}
    function setDefault():FieldInterface{}
    function setValue():FieldInterface{}
}
interface FieldInterface{
    static function create($id):FieldInterface;
    function setId():FieldInterface;
    function setLabel():FieldInterface;
    function setDefault():FieldInterface;
    function setValue():FieldInterface;
}
// Sodium::addForm("myform")->addColumn(70)->addFields(
//     [
//         FieldFactory::createTextField()->setId()->setDefault()->setId(),
//         FieldFactory::createRadio()->setLabel()->setValue()
//     ]
// );
Sodium::addForm("My")->addColumn(70)->addFields(
    TextField::create(1)->setLabel()->setValue()
);