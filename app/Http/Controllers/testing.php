<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testing extends Controller
{
    public function test()
    {
        return 'ini Jajal';
    }

    public function testById($id) 
    {
        return "Iso Jajal ping =" . $id;
    }

    public function testByIdEdit($id) 
    {
        return "Iso Jajal ping =" . $id;
    }
}
