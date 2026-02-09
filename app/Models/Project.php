<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = ["name", "description", "hours", "start_date"];

    public static function fieldLabels() {
        // Aqui se colocarian las traducciones
        return [
            "name" => "Nombre",
            "description" => "Descripcion",
            "hours" => "Horas",
            "start_date" => "Fecha de inicio"
        ];
    }
}
