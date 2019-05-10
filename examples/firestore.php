<?php
require_once 'Firestore.php';

$fs = new Firestore('cities');

echo '<pre>';
print_r($fs->getDocument('asdasd'));
print_r($fs->getWhere('citizens', '>', 10000000000000));
print_r($fs->newDocument('Dublin', ['capital' => false]));
print_r($fs->newCollection('test', 'Israel'));
print_r($fs->dropDocument('Dublin'));
print_r($fs->dropCollection('test'));
