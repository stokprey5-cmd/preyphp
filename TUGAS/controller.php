<?php

require_once 'Model.php';
require_once 'View.php';

class Controller {
    private $model;
    private $view;

    public function __construct() {
        
        $this->model = new Model();
        $this->view = new View();
    }

    public function tampilkanDaftarBuku() {
        $dataBuku = $this->model->getDataBuku();  
        $this->view->tampilkan($dataBuku);        
    }
}
?>
