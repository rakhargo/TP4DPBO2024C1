<?php
  class MembersView{
    public function render($data){
      $no = 1;
      $dataMembers = null;
      foreach($data as $val)
      {
        list($id, $nama, $email, $phone, $join_date, $id_domicile, $id_domicile2, $domicile_name) = $val;
        $dataMembers .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $nama . "</td>
                <td>" . $email . "</td>
                <td>" . $phone . "</td>
                <td>" . $join_date . "</td>
                <td>" . $domicile_name . "</td>
                <td>
                <a href='membersForm.php?id_edit=" . $id .  "&typeForm=edit' class='btn btn-warning''>Edit</a>
                <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                </td>
                </tr>";
      }

      $tpl = new Template("templates/index.html");
      $tpl->replace("DATA_TABEL", $dataMembers);
      $tpl->write();
    }
  }