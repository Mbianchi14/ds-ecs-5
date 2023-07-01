<?php

class Partido{

    public $Id;
    public $EquipoLocal;
    public $EquipoVisitante;
    public $FechaPartido;
    public $Arbitro;

    public function MostrarDatos()
    {
        
        echo 'Id: ' . $this->Id . '<br>';
        echo '-----------Equipo Local-------------- ' . '<br>';
        echo  '--->id: '. $this->EquipoLocal->Id. '<br>';
        echo  '--->Nombre de Equipo: '. $this->EquipoLocal->NombreEquipo. '<br>';
        echo  '--->Lista de Jugadores: <br>';
        foreach ($this->EquipoLocal->ListJugadores as $el) 
    {
        echo  '-------->Id: '. $el->Id . ' <br>';
        echo  '-------->Nombre: '. $el->Nombre . ' <br>';
        echo  '-------->Apellido: '. $el->Apellido . ' <br>';
        echo '<br>';
    }
        echo  '--->Director Tecnico: <br>';
        echo  '-------->Id: '. $this->EquipoLocal->DirectorTecnico->Id . ' <br>';
        echo  '-------->Nombre: '. $this->EquipoLocal->DirectorTecnico->Nombre . ' <br>';
        echo  '-------->Apellido: '. $this->EquipoLocal->DirectorTecnico->Apellido . ' <br>';
        echo '<br>';

        echo '-----------Equipo Visitante-------------- ' . '<br>';
            echo  '--->id: '. $this->EquipoVisitante->Id. '<br>';
            echo  '--->Nombre de Equipo: '. $this->EquipoVisitante->Id. '<br>';
            echo  '--->Lista de Jugadores: <br>';
            foreach ($this->EquipoVisitante->ListJugadores as $ev) 
        {
            echo  '-------->Id: '. $ev->Id . ' <br>';
            echo  '-------->Nombre: '. $ev->Nombre . ' <br>';
            echo  '-------->Apellido: '. $ev->Apellido . ' <br>';
            echo '<br>';
        }

        echo  '--->Director Tecnico: <br>';
        echo  '-------->Id: '. $this->EquipoVisitante->DirectorTecnico->Id . ' <br>';
        echo  '-------->Nombre: '. $this->EquipoVisitante->DirectorTecnico->Nombre . ' <br>';
        echo  '-------->Apellido: '. $this->EquipoVisitante->DirectorTecnico->Apellido . ' <br>';
        echo '<br>';

        echo 'FechaPartido: ' . $this->FechaPartido . '<br>';
        echo 'Arbitro: <br>';
        echo '--->Id: ' . $this->Arbitro->Id . '<br>';
        echo '--->Nombre: ' . $this->Arbitro->Nombre . '<br>';
        echo '--->Apellido: ' . $this->Arbitro->Apellido . '<br>';
        echo '--->Gremio: ' . $this->Arbitro->Gremio . '<br>';

    }

}