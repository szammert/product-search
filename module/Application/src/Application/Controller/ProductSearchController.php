<?php
/**
 * Created by PhpStorm.
 * User: svenzammert
 * Date: 12.02.16
 * Time: 10:06
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProductSearchController extends AbstractActionController {

    protected $productSearchTable;

    public function getProductSearchTable() {

        if (!$this->productSearchTable) {
            $sm = $this->getServiceLocator();
            $this->productSearchTable = $sm->get('Application\Model\ProductSearchTable');
        }
        return $this->productSearchTable;
    }
/*
    public function productSearchAction() {
        die('ProductSearchController');
        return new ViewModel(array(
            'productSearch' => $this->getProductSearchTable()->searchTable('BRIDGESTONE'),
        ));
    }*/


    public function indexAction() {
        die("indexcontroller");
        return new ViewModel();

    }
}