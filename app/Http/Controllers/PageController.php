<?php

namespace App\Http\Controllers;

use App\Models\Columns;
use App\Models\Databases;
use App\Models\TableName;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view('home');
    }
    function sql(){
        return view('sql');
    }
    function change_column(){
        $id= $_GET['column'];

        $columns = Columns::where('id',$id)->first();
        return view('change_column', compact('columns'));
    }
    function server_databases(){
        return view('server_databases');
    }
    function db(){
        $databases = Databases::all();
        return view('db', compact('databases'));
    }
    function db_structure(Request $request){
        $id = $_GET['db'];
        $tables = TableName::where('token',$id)->get();

        return view('db_structure', compact('tables'));
    }
    function tbl_structure(Request $request){
        $table = $_GET['table'];
        $db = $_GET['db'];
        $columns = Columns::where('table', $table)->where('db',$db)->get();
        return view('tbl_structure', compact('columns'));
    }
    function columns(Request $request){
        $table_id = $_GET['table'];
        $table = TableName::where('id', $table_id)->first();
        return view('columns', compact('table'));
    }
}
