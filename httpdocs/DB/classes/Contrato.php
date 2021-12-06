<?php
class Contrato {
    public $contrato;

    function __construct($contrato = array()) {
        include __DIR__.'/queryBuilders/SimpleQuery.php';
        $this->SimpleQuery = new SimpleQuery($contrato,"contrato");
    }

    function list(){
        return $this->SimpleQuery->list();
    }
    function insert(){
        return $this->SimpleQuery->insert();
    }
    function update(){
        return $this->SimpleQuery->update();
    }
    function delete(){
        return $this->SimpleQuery->delete();
    }
}
?>