<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class TaskController extends Controller

{

    //Tambahkan index method

    public function index()

    {

        return view('tasks.index');

    }

}



