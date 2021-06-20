<?php

namespace App;

class Photo extends Koneksi{

    public function __construct ()
    {  
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT tb_photo.* tb_post.* FROM tb_photo, tb_post WHERE tb_photo.post_id=tb_post.id_post";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
    
    return $data; 
    }

    public function input()
    {
        $i_tanggal = $_POST['i_tanggal'];
        $i_title= $_POST['i_title'];
        $i_keterangan = $_POST['i_keterangan'];
        $i_post = $_POST['i_post'];
        
        $sql = "INSERT INTO tb_photo VALUES (NULL, :tangggal, :title, :keterangan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tangggal", $i_tanggal);
        $stmt->bindParam(":title", $i_title);
        $stmt->bindParam(":keterangan", $i_keterangan);
        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_photo WHERE id_photo=:id_photo";
        $stmt =  $this->db->prepare($sql);
        $stmt->bindParam(":id_photo",$id);
        $stmt->execute();

        $row = $stmt->fetch();

    return $row;

    }

    public function update()
    {
        $i_tanggal = $_POST['i_tanggal'];
        $i_title= $_POST['i_title'];
        $i_keterangan = $_POST['i_keterangan'];
        $i_post = $_POST['i_post'];

        $sql = "UPDATE tb_photo SET tangggal=:tangggal, title=:title, keterangan=:keterangan, post_id=:post_id WHERE id_photo=:id_photo";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tangggal", $i_tanggal);
        $stmt->bindParam(":title", $i_title);
        $stmt->bindParam(":keterangan", $i_keterangan);
        $stmt->bindParam(":post_id", $i_post);
        $stmt->execute();
    }
}