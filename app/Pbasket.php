<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pbasket extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pbasket";
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
        $nama_pbasket = $_POST['nama_pbasket'];
        $hrg_pbasket = $_POST['hrg_pbasket'];

        $sql = "INSERT INTO tb_pbasket (nama_pbasket, hrg_pbasket) VALUES (:nama_pbasket, :hrg_pbasket)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pbasket", $nama_pbasket);
        $stmt->bindParam(":hrg_pbasket", $hrg_pbasket);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pbasket WHERE id_pbasket=:id_pbasket";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pbasket", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_pbasket = $_POST['nama_pbasket'];
        $hrg_pbasket = $_POST['hrg_pbasket'];
        $id_pbasket = $_POST['id_pbasket'];

        $sql = "UPDATE tb_pbasket SET nama_pbasket=:nama_pbasket, hrg_pbasket=:hrg_pbasket WHERE id_pbasket=:id_pbasket";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pbasket", $nama_pbasket);
        $stmt->bindParam(":hrg_pbasket", $hrg_pbasket);
        $stmt->bindParam(":id_pbasket", $id_pbasket);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pbasket WHERE id_pbasket=:id_pbasket";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pbasket", $id);
        $stmt->execute();

    }

}