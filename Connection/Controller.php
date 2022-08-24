<?php 
include("Database.php");

class Controller extends Database {

    function __construct(){
        parent::__construct();
    }
    
    public function tugas_1(){
        $query = "SELECT * FROM pbo_pegawai";
        
        $hasil = $this->conn->query($query);

        if(!$hasil){
            return "Terjadi Kesalahan Pada Query";
        }

        $rows = array();

        while($row = $hasil->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }

    public function tugas_2(){
        $query = "SELECT * FROM pbo_pegawai WHERE jns_kel = 'L'" ;
        
        $hasil = $this->conn->query($query);

        if(!$hasil){
            return "Terjadi Kesalahan Pada Query";
        }

        $rows = array();

        while($row = $hasil->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    public function tugas_3(){
        $query = "SELECT * FROM pbo_pegawai WHERE status = 'M'";
        
        $hasil = $this->conn->query($query);

        if(!$hasil){
            return "Terjadi Kesalahan Pada Query";
        }

        $rows = array();

        while($row = $hasil->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    public function tugas_4(){
        $query = "SELECT * FROM pbo_pegawai WHERE status = 'B'";
        
        $hasil = $this->conn->query($query);

        if(!$hasil){
            return "Terjadi Kesalahan Pada Query";
        }

        $rows = array();

        while($row = $hasil->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }

    // (YEAR(CUREDATE())-YEAR(tgl_lahir)) AS umur FROM pbo_pegawai WHERE (YEAR(CURDATE()-(tgl_lahir)) BETWEEN 20 AND 30";
    public function tugas_5(){
        $query = "SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM pbo_pegawai WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) BETWEEN 20 AND 30";
        
        $hasil = $this->conn->query($query);

        if(!$hasil){
            return "Terjadi Kesalahan Pada Query";
        }

        $rows = array();

        while($row = $hasil->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    public function tugas_6(){
        $query = "SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM pbo_pegawai WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) BETWEEN 31 AND 45";
        
        $hasil = $this->conn->query($query);

        if(!$hasil){
            return "Terjadi Kesalahan Pada Query";
        }

        $rows = array();

        while($row = $hasil->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    public function tugas_7(){
        $query = "SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa FROM pbo_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 1 AND 5";
        
        $hasil = $this->conn->query($query);

        if(!$hasil){
            return "Terjadi Kesalahan Pada Query";
        }

        $rows = array();

        while($row = $hasil->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    public function tugas_8(){
        $query = "SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa FROM pbo_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 6 AND 10";
        
        $hasil = $this->conn->query($query);

        if(!$hasil){
            return "Terjadi Kesalahan Pada Query";
        }

        $rows = array();

        while($row = $hasil->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    public function tugas_9(){
        $query = "SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa FROM pbo_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 11 AND 55";
        
        $hasil = $this->conn->query($query);

        if(!$hasil){
            return "Terjadi Kesalahan Pada Query";
        }

        $rows = array();

        while($row = $hasil->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
}

?>
