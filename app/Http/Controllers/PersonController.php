<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        return view('person.index');
    }

    private $code = '190313007';
    private $name = 'Dara Febriani Iskandar';

    public function sendData() {
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code', 'name'));
    }


    public function add(){
        return view('person.add');
    }
    
    public funtion addProcess(Request $request)
    {
        $this->validate($request,[
            'person.name'=> 'required|max:30',
            'person_email'=> 'required:email'
        ]);
        return view('person.show',['data'=> $request]);
    }
}