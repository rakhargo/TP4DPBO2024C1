<?php
include_once("conf.php");
include_once("models/Members.class.php");
include_once("views/Members.view.php");
include_once("views/MembersForm.view.php");

class MembersController {
  private $members;

  function __construct(){
    $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->members->open();
    $this->members->getMembersJoin();
    $data = array();
    while($row = $this->members->getResult()){
      array_push($data, $row);
    }

    $this->members->close();

    $view = new MembersView();
    $view->render($data);
  }

  public function form($typeForm, $id='1') {
    $this->members->open();
    $this->members->getMembersById($id);
    // $data = array();
    // while($row = $this->members->getResult()){
    //   array_push($data, $row);
    // }
      $data = $this->members->getResult();
    $this->members->close();

    $view = new MembersFormView();
    $view->render($data, $typeForm);
  }

  
  function add($data){
    $this->members->open();
    $this->members->add($data);
    $this->members->close();
    
    header("location:index.php");
  }

  function edit($id, $data){
    $this->members->open();
    $this->members->edit($id, $data);
    $this->members->close();
    
    header("location:index.php");
  }

  function delete($id){
    $this->members->open();
    $this->members->delete($id);
    $this->members->close();
    
    header("location:index.php");
  }


}