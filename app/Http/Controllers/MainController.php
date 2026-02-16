<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use LaravelLang\Lang\Plugins\Nova\DuskSuite\Main;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $cards = [
            "users" => [
                'title'=>"Usuarios",
                'description'=>"Mostrar TODOS los usuarios",
                'img'=>'https://cdn.pixabay.com/photo/2016/04/15/18/05/computer-1331579_640.png',
                'alt'=>"usuarios",
                'action'=>"/users",
                'boton'=>"Ver usuarios",
            ],
            "teachers" => [
                'title'=>"Profesores",
                'description'=>"Mostrar SOLO los profesores",
                'img'=>'https://img.freepik.com/vector-gratis/coleccion-profesores_23-2148557381.jpg?semt=ais_user_personalization&w=740&q=80',
                'alt'=>"profesores",
                'action'=>"/teachers",
                'boton'=>"Ver profesores",
            ],
            "students" => [
                'title'=>"Estudiantes",
                'description'=>"Mostrar SOLO los estudiantes",
                'img'=>'https://static.vecteezy.com/system/resources/previews/017/330/758/non_2x/a-group-of-students-talking-cartoon-illustration-vector.jpg',
                'alt'=>"estudiantes",
                'action'=>"/students",
                'boton'=>"Ver estudiantes",
            ],
            "cronometro" => [
                'title'=>"Cronómetro",
                'description'=>"Mostrar el cronometro",
                'img'=>'https://img.freepik.com/vector-gratis/temporizador-cronometro-es-color-rojo_78370-8122.jpg?semt=ais_hybrid&w=740&q=80',
                'alt'=>"cronometro",
                'action'=>"/crono",
                'boton'=>"Ver cronómetro",
            ],
            "projects" => [
                'title'=>"Proyectos",
                'description'=>"Mostrar los proyectos",
                'img'=>'https://www.itmplatform.com/wp-content/uploads/Gesti%C3%B3n-de-Proyectos-5-Requisitos-del-%C3%89xito.png',
                'alt'=>"proyectos",
                'action'=>"/projects",
                'boton'=>"Ver proyectos",
            ]
        ];
        return Inertia::render("Main", ["cards" => $cards]);
    }
}
