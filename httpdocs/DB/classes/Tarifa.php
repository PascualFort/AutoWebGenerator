<?php
class Tarifa {
    public $tarifa;

    function __construct($tarifa = array()) {
        include __DIR__.'/queryBuilders/SimpleQuery.php';
        $this->SimpleQuery = new SimpleQuery($tarifa,"tarifa");
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