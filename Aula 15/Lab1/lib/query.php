<?php

class Query {
    private $Connection;
    private $Registros;
    private $SQL;

    private $queryResource;

    function __construct($Connection){
        $this->Connection = $Connection;
    }

    public function Open(){
        $this->queryResource = pg_query($this->Connection->getConn(), $this->SQL);

        if ($this->queryResource) {
            $this->Registros = pg_num_rows($this->queryResource);
            return true;
        }
        return false;
    }

    // Getter e Setter para Connection
    public function getConnection() {
        return $this->Connection;
    }

    // Getter e Setter para SQL
    public function getSQL() {
        return $this->SQL;
    }

    public function setSQL($SQL) {
        $this->SQL = $SQL;
    }

    public function getNextRow(){
        $row = pg_fetch_assoc($this->queryResource);
        
        if ($row){
            return $row;
        }    
        return false;
    }
}
