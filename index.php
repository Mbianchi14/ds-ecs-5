<?php

require_once 'modelo/partido.php';
require_once 'modelo/arbitro.php';
require_once 'modelo/equipo.php';
require_once 'modelo/jugador.php';
require_once 'modelo/directorTecnico.php';

$dt1 = new DirectorTecnico();
$dt1->Id = 1;
$dt1->Nombre = 'Jorge';
$dt1->Apellido = 'Almiron';

$dt2 = new DirectorTecnico();
$dt2->Id = 2;
$dt2->Nombre = 'Gabriel';
$dt2->Apellido = 'Heinze';

$j1 = new Jugador();
$j1->Id = 1;
$j1->Nombre = 'Marcos';
$j1->Apellido = 'Rojo';

$j2 = new Jugador();
$j2->Id = 2;
$j2->Nombre = 'Pipa';
$j2->Apellido = 'Benedetto';

$j3 = new Jugador();
$j3->Id = 3;
$j3->Nombre = 'Lionel';
$j3->Apellido = 'Messi';

$j4 = new Jugador();
$j4->Id = 4;
$j4->Nombre = 'Maxi';
$j4->Apellido = 'Rodriguez';

$el = new Equipo();
$el->Id = 1;
$el->NombreEquipo = 'Boca Juniors';
$el->ListJugadores[] = $j1;
$el->ListJugadores[] = $j2;
$el->DirectorTecnico = $dt1;

$ev = new Equipo();
$ev->Id = 2;
$ev->NombreEquipo = 'Newells';
$ev->ListJugadores[] = $j3;
$ev->ListJugadores[] = $j4;
$ev->DirectorTecnico = $dt2;

$a = new Arbitro();
$a->Id = 1;
$a->Nombre = 'Mauro';
$a->Apellido = 'Bigliano';
$a->Gremio = 'AFA';

$p = new Partido();
$p->Id = 1;
$p->EquipoLocal = $el;
$p->EquipoVisitante = $ev;
$p->FechaPartido = '01/07/2023';
$p->Arbitro = $a;
$p->MostrarDatos();
