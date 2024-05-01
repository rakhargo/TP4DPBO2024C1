<?php
  class DomicileView{
    public function render($data){
      $no = 1;
      $dataDomicile = null;
      foreach($data as $val)
      {
        list($id, $nama) = $val;
        $dataDomicile .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $nama . "</td>
                <td>
                <a href='domicileForm.php?id_edit=" . $id .  "&typeForm=edit' class='btn btn-warning''>Edit</a>
                <a href='domicile.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                </td>
                </tr>";
      }

      $tpl = new Template("templates/domicile.html");
      $tpl->replace("DATA_TABEL", $dataDomicile);
      $tpl->write();
    }
  }