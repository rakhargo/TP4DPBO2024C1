<?php

class Members extends DB
{
    function getMembers()
    {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }

    function getMembersJoin()
    {
        $query = "SELECT * FROM members JOIN domicile ON members.id_domicile=domicile.id_domicile";
        return $this->execute($query);
    }

    function getMembersById($id)
    {
        $query = "SELECT * FROM members where id = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $domicile = $data['id_domicile'];

        $query = "INSERT into members values ('', '$name', '$email', '$phone', '2022-10-01', '$domicile')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function edit($id, $data)
    {

        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $domicile = $data['id_domicile'];

        $query = "UPDATE members set name = '$name', email = '$email', phone = '$phone', id_domicile = '$domicile' where id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE FROM members WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

}
