<?php
 class Employee extends AppModel {
    var $name = 'Employee';
    var $validate = array('nazwisko' => array('rule' => 'notBlank'),'etat' => array('rule' => 'notBlank'), 'placa_pod' => array('rule' => ('greaterThanOrEqual', 0)), 
    'placa_pod' => array('rule' => ('lessThanOrEqual', 2000)));
 }
?>
