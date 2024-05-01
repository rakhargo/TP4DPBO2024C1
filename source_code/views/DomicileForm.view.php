<?php
  class DomicileFormView{
    public function render($data, $typeForm){
      $no = 1;
      $dataForm = null;
      $actionForm = 'domicile.php';
      if ($typeForm == 'create') {
        $dataForm .= '<h1 class="text-white text-center">  Create New Domicile </h1>
            </div><br>
            
            <label>DOMICILE NAME: </label>
            <input type="text" name="domicile_name" class="form-control"> <br>

            <button class="btn btn-success" type="submit" name="add"> Submit </button><br>
            <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>';
      }
      else if ($typeForm == 'edit') {
        $dataForm .= '<h1 class="text-white text-center">  Edit Domicile ' . $data['domicile_name'] .' </h1>
        </div><br>

        <input type="hidden" name="id_edit" class="form-control" value=' . $data['id_domicile']. '> <br>
            
        <label> DOMICILE NAME: </label>
        <input type="text" name="domicile_name" class="form-control" value=' . $data['domicile_name']. '> <br>
        
        <button class="btn btn-success" type="submit" name="edit"> Submit </button><br>
        <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>';
      }
      else{
        $dataForm .= '<h1 class="text-white text-center">Error form</h1>';
      }

      $tpl = new Template("templates/form.html");
      $tpl->replace("DATA_ACTION", $actionForm);
      $tpl->replace("DATA_FORM", $dataForm);
      $tpl->write();
    }
  }