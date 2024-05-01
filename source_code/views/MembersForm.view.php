<?php
  include_once("models/Domicile.class.php");

  class MembersFormView{
    public function render($data, $typeForm){
      $no = 1;
      $dataForm = null;
      $actionForm = 'index.php';
      $domicile = new Domicile(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
      $domicile->open();
      $domicile->getDomicile();
      
      if ($typeForm == 'create') {
        $dataForm .= '<h1 class="text-white text-center">  Create New Member </h1>
            </div><br>
            
            <label> NAME: </label>
            <input type="text" name="name" class="form-control"> <br>
            
            <label> EMAIL: </label>
            <input type="text" name="email" class="form-control"> <br>
            
            <label> PHONE: </label>
            <input type="text" name="phone" class="form-control"> <br>
            
            <label> DOMICILE: </label>
            <select class="form-select" name="id_domicile">';
        
            while ($rowDomicile = $domicile->getResult()) {
                $dataForm .= '<option value="' . $rowDomicile['id_domicile'] . '">' . $rowDomicile['domicile_name'] . '</option>';
            }
            
            $dataForm .= '</select>
            
            <button class="btn btn-success" type="submit" name="add"> Submit </button><br>
            <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>';
      }
      else if ($typeForm == 'edit') {
        $dataForm .= '<h1 class="text-white text-center">  Edit Member ' . $data['name'] .' </h1>
        </div><br>

        <input type="hidden" name="id_edit" class="form-control" value=' . $data['id']. '> <br>
            
        <label> NAME: </label>
        <input type="text" name="name" class="form-control" value=' . $data['name']. '> <br>
        
        <label> EMAIL: </label>
        <input type="text" name="email" class="form-control" value=' . $data['email']. '> <br>
        
        <label> PHONE: </label>
        <input type="text" name="phone" class="form-control" value=' . $data['phone']. '> <br>

        <label> DOMICILE: </label>
        <select class="form-select" name="id_domicile">';
                
        while ($rowDomicile = $domicile->getResult()) {
            $dataForm .= '<option value="' . $rowDomicile['id_domicile'] . '"';
            if ($rowDomicile['id_domicile'] == $data['id_domicile']) {
                $dataForm .= ' selected';
            }
            $dataForm .= '>' . $rowDomicile['domicile_name'] . '</option>';
        }
        
        $dataForm .= '</select>
        
        <button class="btn btn-success" type="submit" name="edit"> Submit </button><br>
        <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>';
      }
      else{
        $dataForm .= '<h1 class="text-white text-center">Error form</h1>';
      }

      $domicile->close();
      $tpl = new Template("templates/form.html");
      $tpl->replace("DATA_ACTION", $actionForm);
      $tpl->replace("DATA_FORM", $dataForm);
      $tpl->write();
    }
  }