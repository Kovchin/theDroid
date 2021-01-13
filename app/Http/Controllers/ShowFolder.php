<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowFolder extends Controller
{
    //Массив путей по которым должны открываться папки
    private $showRoute = array(
        1 => array(
            "Path" => '\\\172.16.0.45\cspi_fsk\Отчеты ЭТО_7798_ЕТССЭ_МЭС Сибири_Компания ТрансТелеКом',
            "Title" => 'Заголовок',
            "Description" => 'Описание что за маршрут и зачем он тут нужен'
        ),
        2 => array(
            "Path" => '2 Path',
            "Title" => 'Заголовок',
            "Description" => 'Описание что за маршрут и зачем он тут нужен'
        ),
    );

    //Функция открывающая папки
    public function showRequestedFolder($id_route)
    {
        exec('explorer ' . $this->showRoute[$id_route]["Path"]);
        return redirect('/');
    }
}
