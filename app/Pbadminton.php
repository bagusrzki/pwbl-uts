<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pbadminton extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pbadminton";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(); 

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $nama_pbadminton = $_POST['nama_pbadminton'];
        $hrg_pbadminton = $_POST['hrg_pbadminton'];

        $sql = "INSERT INTO tb_pbadminton (nama_pbadminton, hrg_pbadminton) VALUES (:nama_pbadminton, :hrg_pbadminton)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pbadminton", $nama_pbadminton);
        $stmt->bindParam(":hrg_pbadminton", $hrg_pbadminton);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pbadminton WHERE id_pbadminton=:id_pbadminton";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pbadminton", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_pbadminton = $_POST['nama_pbadminton'];
        $hrg_pbadminton = $_POST['hrg_pbadminton'];
        $id_pbadminton = $_POST['id_pbadminton'];

        $sql = "UPDATE tb_pbadminton SET nama_pbadminton=:nama_pbadminton, hrg_pbadminton=:hrg_pbadminton WHERE id_pbadminton=:id_pbadminton";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pbadminton", $nama_pbadminton);
        $stmt->bindParam(":hrg_pbadminton", $hrg_pbadminton);
        $stmt->bindParam(":id_pbadminton", $id_pbadminton);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pbadminton WHERE id_pbadminton=:id_pbadminton";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pbadminton", $id);
        $stmt->execute();

    }

}