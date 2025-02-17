<?php

namespace App\Http\Controllers;

use App\Http\Middleware\checkRoleMiddleware;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class postController extends Controller implements HasMiddleware
    // to add middleware globaly we goto app.php on bootstap folder and append the middleware instance 
{   // to be implemen controller on the controller we must attach implements HasMiddleware after extends Controller
    public static function middleware()
    {
        // return[new Middleware(checkRoleMiddleware::class)]; // apply middelware across all the contoller methode
        //return[new middleware(checkRoleMiddleware::class,only:['store'])] ;// to apply middleware to a specific controller or array fo controllers
        return[new middleware(checkRoleMiddleware::class,except:['index'])];// to ignore some methode from the controller 
    }
    //end of middele
function index(){
    return view('post.index');
}
function store(Request $request){
dd($request);
}
}
