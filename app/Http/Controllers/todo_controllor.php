<?php

namespace App\Http\Controllers;

use App\Models\TODO_LIST;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class todo_controllor extends Controller
{ 
    public function save(request$req){
    $new = new TODO_LIST();
    $new->title=$req->title;     
    $new->desc=$req->desc; 
    if($new->save()){
        return "success";

        }else{
            
        }    
    }
}
