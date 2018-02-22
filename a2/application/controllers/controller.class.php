<?php
class controller {

    public $load;
    public $model;

    function __construct() {
        $this->load = new load();
        $this->model = new model();
        $this->home();
    }

    function home() {
        $data = $this->model->getName();

        $this->load->view('view.php',$data);
    }


}
?>
