<?php

class Domicile extends DB
{
    function getDomicile()
    {
        $query = "SELECT * FROM domicile";
        return $this->execute($query);
    }

    function getDomicileById($id)
    {
        $query = "SELECT * FROM domicile where id_domicile = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['domicile_name'];

        $query = "INSERT into domicile values ('', '$name')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function edit($id, $data)
    {

        $name = $data['domicile_name'];

        $query = "UPDATE domicile set domicile_name = '$name' where id_domicile = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE FROM domicile WHERE id_domicile = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

}
