<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pbola extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pbola";
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
        $nama_pbola = $_POST['nama_pbola'];
        $hrg_pbola = $_POST['hrg_pbola'];

        $sql = "INSERT INTO tb_pbola (nama_pbola, hrg_pbola) VALUES (:nama_pbola, :hrg_pbola)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pbola", $nama_pbola);
        $stmt->bindParam(":hrg_pbola", $hrg_pbola);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pbola WHERE id_pbola=:id_pbola";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pbola", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_pbola = $_POST['nama_pbola'];
        $hrg_pbola = $_POST['hrg_pbola'];
        $id_pbola = $_POST['id_pbola'];

        $sql = "UPDATE tb_pbola SET nama_pbola=:nama_pbola, hrg_pbola=:hrg_pbola WHERE id_pbola=:id_pbola";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pbola", $nama_pbola);
        $stmt->bindParam(":hrg_pbola", $hrg_pbola);
        $stmt->bindParam(":id_pbola", $id_pbola);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pbola WHERE id_pbola=:id_pbola";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pbola", $id);
        $stmt->execute();

    }

}