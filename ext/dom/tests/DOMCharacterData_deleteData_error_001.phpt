--TEST--
DOMCharacterData::deleteData() with no arguments.
--CREDITS--
Eric Lee Stewart <ericleestewart@gmail.com>
# TestFest Atlanta 2009-05-24
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$document = new DOMDocument;
$root = $document->createElement('root');
$document->appendChild($root);

$cdata = $document->createCDATASection('test');
$root->appendChild($cdata);
$cdata->deleteData();
?>
--EXPECTF--
Warning: DOMCharacterData::deleteData() expects exactly 2 parameters, 0 given in %s on line %d