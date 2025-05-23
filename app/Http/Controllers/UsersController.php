<?php

namespace App\Http\Controllers;

use App\Models\User;
use Cerbero\EloquentInspector\Inspector;

class UsersController extends Controller
{
    public function inspect() 
    {
        $useStatements = Inspector::inspect(User::class)->getUseStatements();
        echo __('User model statement: ') . PHP_EOL;
        var_dump($useStatements);
        $relationships = Inspector::inspect(User::class)->getRelationships();
        /*
        array:1 [▼
            "posts" => Cerbero\EloquentInspector\Dtos\Relationship {#553 ▼
                +name: "posts"
                +type: "hasMany"
                +class: "Illuminate\Database\Eloquent\Relations\HasMany"
                +model: "App\Models\Post"
                +relatesToMany: true
            }
        ]
        */
        echo __('User model relationship: ') . PHP_EOL;
        var_dump($relationships);
    }
}
