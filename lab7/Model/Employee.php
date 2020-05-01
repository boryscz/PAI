<?php
 class Employee extends AppModel {
    var $name = 'Employee';
    var $validate = array('nazwisko' => array('rule' => 'notBlank'),'etat' => array('rule' => 'notBlank'));
 }
?>
