<?php

require_once 'modelo/paciente.php';
require_once 'modelo/turno.php';
require_once 'modelo/especialidad.php';

$p = new paciente();
$p->Id=' 1';
$p->Nombre='Alberto';
$p->Apellido='Juarez';
$p->Documento= '12123456';
$p->Edad=$_GET['Edad'];
$p->Email= 'aj@gmail.com';

$e1 = new especialidad();
$e1->Id = '1';
$e1->Descripcion = 'Clinica';

$e2 = new especialidad();
$e2->Id = '2';
$e2->Descripcion = 'Traumatologia';

$t1 = new turno();
$t1->Id='1';
$t1->Fecha= '01-06-2023';
$t1->Hora= '17:00';
$t1->Medico= 'Armando Rodriguez';
$t1->Especialidad= $e1;


$t2 = new turno();
$t2->Id= '1';
$t2->Fecha=  '01-07-2023';
$t2->Hora= '18:00';
$t2->Medico= 'Graciela Mendez';
$t2->Especialidad= $e2;

$p->ListTurnos[] = $t1;
$p->ListTurnos[] = $t2;

$p->MostrarDatos();
