<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class ProductSearchTable {
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }

    public function searchTable($searchText) {
        $searchText  = $searchText;
        $rowset = $this->tableGateway->select(array('manufacturer' => $searchText));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $searchText");
        }
        die($row);
        return $row;
    }
}
