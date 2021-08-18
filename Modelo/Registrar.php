<?php 

include_once ('Conectar.php');

class Persona{

    private $tdoc;
    private $ndoc;
    private $names;
    private $lnames;
    private $tel;
    private $age;
    private $corre;
    private $contra;

    public function __construct($tdoc, $ndoc, $names, $lnames, $tel, $age, $corre, $contra){
        
        $this->tdoc=$tdoc;
        $this->ndoc=$ndoc;
        $this->names=$names;
        $this->lnames=$lnames;
        $this->tel=$tel;
        $this->age=$age;
        $this->corre=$corre;
        $this->contra=$contra;
    }

    public function setTdoc($tdoc){
        $this->tdoc=$tdoc;
    }

    public function getTdoc($tdoc){
        return ($this->tdoc);
    }

    public function setNdoc($ndoc){
        $this->ndoc=$ndoc;
    }

    public function getNdoc($ndoc){
        return ($this->ndoc);
    }

    public function setNames($names){
        $this->names=$names;
    }

    public function getNames($names){
        return ($this->names);
    }

    public function setLnames($lnames){
        $this->lnames=$lnames;
    }

    public function getLnames($lnames){
        return ($this->lnames);
    }
    
    public function setTel($tel){
        $this->tel=$tel;
    }

    public function getTel($tel){
        return ($this->tel);
    }

    public function setAge($age){
        $this->age=$age;
    }

    public function postAge($age){
        return ($this->age);
    }

    public function setCorre($corre){
        $this->corre=$corre;
    }

    public function getCorre($corre){
        return ($this->corre);
    }

    public function setContra($contra){
        $this->tel=$contra;
    }

    public function getContra($contra){
        return ($this->contra);
    }

    public function addPaciente(){
        
        $m=new CONEXION();
        $reg="INSERT INTO pacientes (Tipo_documento, nro_doc, nombre, apellido, Telefono, Edad, correo, Contraseña)
        VALUES ('$this->tdoc', '$this->ndoc', '$this->names', '$this->lnames', '$this->tel', '$this->age', '$this->corre', '$this->contra')";

        $m->query($reg);
        if($m==TRUE){
            echo "<meta http-equiv='refresh' content='4; url=../Inicio.php'>";
            echo "El paciente fue registrado correctamente... Redirigiendo en 4 segundos";
        }else {
            echo "El paciente no se registro .... Revise ";
        }
    }
}
?>