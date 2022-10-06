<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogApp;

class LogAppService extends Controller
{
    public function create($login, $descriptionExternal)
    {        
        $log = new LogApp();
        $log->login = $login;
        $log->description = $descriptionExternal; 
        $log->save();
    }
}
