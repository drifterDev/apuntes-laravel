<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectController extends Controller
{
    public function getAllProjects()
    {
        $projects = Project::all();
        return $projects;
    }

    public function chuck()
    {
        Project::chunk(200, function ($projects) {
            foreach ($projects as $project) {
                //Aquí escribimos lo que haremos con los datos (operar, modificar, etc)
            }
        });
    }

    public function antiFails()
    {
        // En caso de no encontrar el modelo, nos retornarán un objeto de tipo ModelNotFoundException y podemos operar con él en caso de error.
        // Ten en cuenta que si no capturas la excepción, se enviará un error 404 al usuario y ahí sí se rompería tu flujo de trabajo.
        $project = Project::findOrFail(1);
        $project = Project::where('name', '=', 'Mateo')->firstOrFail();
    }

    public function insertProject()
    {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nuevo proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();
        return "Guardado";
    }

    public function updateProject()
    {
        Project::where('is_active', 1)
            ->where('project_id', 1)
            ->update(['execution_date' => '2020-02-03', 'name' => 'Proyecto actualizado']);
        return "Actualizado";
    }

    public function deleteProject()
    {
        // Diferentes formas de eliminar
        $project = Project::find(1);
        $project->delete();

        // Los parametros son llaves primarias
        Project::destroy(1);
        Project::destroy(1, 2, 3);
        Project::destroy([1, 2, 3]);

        $project = Project::where('project_id', '>', 15)->delete();
        return "Registros eliminados";
    }

    public function scopeActive($query)
    {
        // Scope global en App/scope
        // Scope local
        return $query->where('is_active', 1);
        // Al hacer Project::active()->get(); en otra parte se aplicará este scope
    }

    public function sinModelo()
    {
        // Si no tenemos un modelo podemos hacer lo siguiente
        DB::table('projects')->get();
        DB::table('projects')->where('name', 'test')->first();
        DB::table('projects')->find(10);
        // Esta trae toda una columna
        DB::table('projects')->pluck('name');
    }
}
