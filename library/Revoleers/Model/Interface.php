<?php

interface Revoleers_Model_Interface {
    public function fetch ($id = null);
    
    public function fetchOne (array $params = array());
    
    public function fetchList (array $params = array(), $orderBy = null, $limit = null, $offset = null);
    
    public function query ($keyword, $offset = 0, $limit = 25, $orderBy = null);
    
    public function save (array $data, $parentobj = null);
    
    public function addManyToMany ($subobj, $fn1, $fn2);
    
    public function delete ($id);
    
    public function deleteManyToMany($subobj, $fn);
    
    public function deactivate ($id);
    
    public function activate ($id);
    
    public function copy ($id);
    
    public function toArray ();
    
    public function toJson ();
    
    public function toArrayList (array $params = array(), $orderBy = null, $limit = null, $offset = null, $includeLink = true);
    
    public function toJsonList (array $params = array(), $orderBy = null, $limit = null, $offset = null, $includeLink = true);
    
    public function solrQuery ($query, $offset = 0, $limit = 10, $params = array(), $method = self::METHOD_GET);
}