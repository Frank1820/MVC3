<?php
class personas_model{
    private $db;
    private $personas;

    private $id;
    private $nombre;
    private $edad;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
    }

/* GETTERS & SETTERS */

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getNombre() {
      return $this->nombre;
    }

    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }

    public function getEdad() {
      return $this->edad;
    }

    public function setEdad($edad) {
      $this->edad = $edad;
    }


    public function get_personas(){
        $consulta=$this->db->query("select * from personas;");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }

    public function insertar() {

         $sql = "INSERT INTO personas (nombre, edad) VALUES ('{$this->nombre}','{$this->edad}')";
         $result = $this->db->query($sql);

         if ($this->db->error)
             return "$sql<br>{$this->db->error}";
         else {
             return false;
         }
    }

    public function delete($id) {
        $sql = "DELETE FROM personas WHERE id='$id'";

        $result = $this->db->query($sql);

        if ($this->db->error)
            return "$sql<br>{$this->db->error}";
        else {
            return false;
        }
    }
    public function ordperson(){
        $consulta=$this->db->query("select * from personas ORDER BY nombre");
        while($filas=$consulta->fetch_assoc()){
            $this->nombre[]=$filas;
        }
        return $this->nombre;
    }
    public function ordedad(){

        $consulta=$this->db->query("select * from personas ORDER BY edad");
        while($filas=$consulta->fetch_assoc()){
            $this->edad[]=$filas;
        }
        return $this->edad;
    }
}
?>
