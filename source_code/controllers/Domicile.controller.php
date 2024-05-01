<?php
include_once("conf.php");
include_once("models/Domicile.class.php");
include_once("views/Domicile.view.php");
include_once("views/DomicileForm.view.php");

class DomicileController {
  private $domicile;

  function __construct(){
    $this->domicile = new Domicile(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->domicile->open();
    $this->domicile->getDomicile();
    $data = array();
    while($row = $this->domicile->getResult()){
      array_push($data, $row);
    }

    $this->domicile->close();

    $view = new DomicileView();
    $view->render($data);
  }

  public function form($typeForm, $id='1') {
    $this->domicile->open();
    $this->domicile->getDomicileById($id);
    // $data = array();
    // while($row = $this->domicile->getResult()){
    //   array_push($data, $row);
    // }
      $data = $this->domicile->getResult();
    $this->domicile->close();

    $view = new DomicileFormView();
    $view->render($data, $typeForm);
  }

  
  function add($data){
    $this->domicile->open();
    $this->domicile->add($data);
    $this->domicile->close();
    
    header("location:domicile.php");
  }

  function edit($id, $data){
    $this->domicile->open();
    $this->domicile->edit($id, $data);
    $this->domicile->close();
    
    header("location:domicile.php");
  }

  function delete($id){
    $this->domicile->open();
    $this->domicile->delete($id);
    $this->domicile->close();
    
    header("location:domicile.php");
  }


}