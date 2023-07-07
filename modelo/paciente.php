<?php
class paciente
{
    public $Id;
    public $Nombre;
    public $Apellido;
    public $Dni;
    public $Email;
    public $Edad;
    public $Especialidad;
    public $ListTurnos = array();
    

    public function MostrarDatos()
    {
        echo 'ID: ' . $this->Id . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido ' . $this->Apellido . '<br>';
        echo 'Documento ' . $this->Dni . '<br>';
        echo 'Email ' . $this->Email. '<br>';    
       
        if ($this->Edad > 0 and $this->Edad<17) {
            echo "Paciente menor de edad "; 
        } else if ($this->Edad<74) {
            echo "Paciente mayor de edad ";
        }     
        else if  ($this->Edad>= 75 ) {
            echo "Paciente en la tercera edad";
        } 
        else {
            echo "La edad del paciente fue indicada incorrectamente";
         
        }
       echo '<br>'.'Turnos: <br>';
        foreach ($this->ListTurnos as $t) {
            echo  'ID: ' .$t->Id  .' Fecha:' .$t->Fecha . ' Hora:' . $t->Hora. '  Medico:' . $t->Medico.'  Especialidad:' .  $t->Especialidad->Id. ' ' . $t->Especialidad->Descripcion.'<br>';
        }

        
    }
}
