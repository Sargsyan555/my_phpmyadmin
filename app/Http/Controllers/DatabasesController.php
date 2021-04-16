<?php

namespace App\Http\Controllers;

use App\Models\Columns;
use App\Models\Databases;
use App\Models\TableName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class DatabasesController extends Controller
{
    function addDb(Request $request){
        $databases = new Databases($request->all());
        $databases->save();
        return Redirect::to('server_databases?db='.$databases->id);
    }
    function checkTable(Request $request){
        $table = TableName::where('table',$request->table)->where('token',$request->token)
            ->first();
        if (isset($table)){
            return 'This table already is created in database';
        }
    }
    function check_db(Request $request){
        $database = Databases::where('new_db',$request->new_db)->first();
        if (isset($database)){
            return 'This database name already is created in database';
        }
    }
    function addTable(Request $request){
        $table = TableName::where('table',$request->table)->where('token',$request->token)
            ->first();
        if (!isset($table)){
            $table = new TableName($request->all());
            $table->save();
            return Redirect::to('columns?table='.$table->id);
        }else{
            return Redirect::to('server_databases?db='.$table->token);
        }
    }
    function addColumnsInTable(Request $request){
        $table = TableName::where('id',$request->table_id)
            ->first();

            $count = $table->num_fields + $request->added_fields;
            $old_count = $table->num_fields;
            TableName::where('id',$request->table_id)->update([
                'num_fields'=>$count
            ]);
        $column =view('add_columns_in_table', compact('count','old_count'));
        return $column;
    }
    function showTableUl(Request $request){
        $db_id = $request->table_id;
        $tables = TableName::where('token',$request->table_id)
            ->get();

        $table =view('tables_ul', compact('tables','db_id'));
        return $table;
    }
    function showColumnUl(Request $request){
        $table_id = $request->id;
        $columns = Columns::where('table',$request->id)
            ->get();

        $column =view('columns_ul', compact('columns','table_id'));
        return $column;
    }
    function fieldList(Request $request){
        $tables = TableName::where('token',$request->id)->get();

        $column =view('field_list', compact('tables'));
        return $column;
    }
    function addTableColumns(Request $request){
        $count = count($request->field_type);
            for($i=0;$i<$count;$i++){
                $created_columns = Columns::where('field_name',$request->field_name[$i])
                    ->where('db',$request->db_id)
                    ->where('table',$request->table)->get();

                if (count($created_columns) == 0){
                $column = new Columns;
                $column->table =$request->table;
                $column->db =$request->db_id;
                $column->field_name =$request->field_name[$i];
                $column->field_type =$request->field_type[$i];
                $column->field_length =$request->field_length[$i];
                $column->field_default =$request->field_default[$i];
                $column->field_collation =$request->field_collation[$i];
                $column->field_attributes =$request->field_attribute[$i];
                $column->field_null ='null';
                $column->field_index =$request->field_key[$i];
                $column->field_a_l ='AUTO_INCREMENT';
                $column->field_comments =$request->field_comments[$i];
                $column->field_virtuality =$request->field_virtuality[$i];
                $column->field_move_column =$request->field_expression[$i];
                $column->save();
                 $columns = Columns::where('table',$request->table)->get();

                }else {
                    return Redirect::to('db_structure?db='.$request->db_id);
                }

            }
        return Redirect::to('tbl_structure?table='.$request->table.'&db='.$request->db_id);
    }

    function changeTableColumns(Request $request){
        Columns::where('id',$request->column_id)->update([
            'field_name'=>$request->field_name,
            'field_length' =>$request->field_length,
            'field_default' =>$request->field_default,
            'field_collation' =>$request->field_collation,
            'field_attributes' =>$request->field_attribute,
            'field_index' =>$request->field_key,
            'field_comments' =>$request->field_comments,
            'field_virtuality' =>$request->field_virtuality,
            'field_move_column' =>$request->field_expression,
        ]);
        $column = Columns::where('table',$request->table)->first();
            return Redirect::to('tbl_structure?table='.$column->table.'&db='.$column->db);

    }
    function deleteTableColumns(Request $request)
    {
        Columns::where('id',$request->get('id'))->delete();
    }
    function deleteTable(Request $request)
    {
        TableName::where('id',$request->get('id'))->delete();
    }
    function sqlAdd(Request $request){
        $sql = preg_split('/[\s,]+/', $request->data);

        $db = Databases::where('new_db',$sql[2])->first();
        $count = count($sql);
        if ($sql[0] == 'CREATE' && $sql[1] == 'DATABASE' && $count == 3){
            if (!isset($db)){
                $data=array('lang'=>'1',"reload"=>'1',"new_db"=>$sql[2],"db_collation"=>'utf8_general_ci');
                DB::table('databases')->insert($data);
                return 'Your database is creeated';
            }else{
                return 'This database already is created';
            }
        }else if ($sql[0] == 'DROP' && $sql[1] == 'DATABASE' && $count == 3){
            if (isset($db)){
                $db = Databases::where('new_db',$sql[2])->first();
                $id = $db->id;
                TableName::where('token', $id)->delete();
                Columns::where('db', $id)->delete();
                Databases::where('new_db',$sql[2])->delete();
                return 'Succsess';

            }else{
                return 'Nothing with this name was found';

            }
        }else{
            return 'This content does not right';
        }
    }
}
