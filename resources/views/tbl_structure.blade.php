
@extends('layouts.base')

@section('title', 'DB')

@section('content')
{{--Table Structure--}}
    <div id="page_content">
        <a class="hide" id="update_recent_tables" href="index.php?route=/recent-table&amp;ajax_request=1&amp;recent_table=1"></a>
        <div id="structure_content">
            <h1 class="d-none d-print-block">category</h1>
            <form method="post" action="" name="fieldsForm" id="fieldsForm" class="ajax HideStructureActions">

                <div class="table-responsive-md">
                    <table id="tablestructure" class="table table-light table-striped table-hover w-auto">
                        <thead class="table-light">
                        <tr>
                            <th class="print_ignore"></th>
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Collation</th>
                            <th>Attributes</th>
                            <th>Null</th>
                            <th>Default</th>
                            <th>Comments</th>
                            <th>Extra</th>
                            <th colspan="8" class="action print_ignore">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($columns as $column)
                            <tr>
                                <td class="text-center print_ignore">
                                    <input type="checkbox" class="checkall" name="selected_fld[]" value="text" id="checkbox_row_1">
                                </td>
                                <td class="text-end">{{$column->id}}</td>
                                <th class="text-nowrap">
                                    <label for="checkbox_row_1">
                                        {{$column->field_name}}
                                    </label>
                                </th>
                                <td class="text-nowrap">
                                    <bdo dir="ltr" lang="en">
                                        {{$column->field_type}}({{$column->field_length}})
                                    </bdo>
                                </td>
                                <td>
                                </td>
                                <td class="column_attribute text-nowrap"> </td>
                                <td>{{$column->field_null}}</td>
                                <td class="text-nowrap">
                                    <em>None</em>
                                </td>
                                <td>

                                </td>
                                <td class="text-nowrap">{{$column->field_comments}}</td>
                                <td class="edit text-center print_ignore">
                                    <a class="change_column_anchor ajax" href="change_column?column={{$column->id}}&table={{$column->table}}">
                                        <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Change" alt="Change" class="icon ic_b_edit">&nbsp;Change</span>
                                    </a>
                                </td>
                                <td class="drop text-center print_ignore">
                                    <a class="drop_column_anchor ajax delete{{$column->id}}" data-id="{{$column->id}}">
                                        <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Drop" alt="Drop" class="icon ic_b_drop">&nbsp;Drop</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
            <hr class="print_ignore">
            <div id="move_columns_dialog" class="hide" title="Move columns">
                <p>Move the columns by dragging them up and down.</p>
                <form action="index.php?route=/table/structure/move-columns" name="move_column_form" id="move_column_form">
                    <div>
                        <input type="hidden" name="db" value="shoe_db"><input type="hidden" name="table" value="category"><input type="hidden" name="token" value="7c4b29797858217374447a412a4c2f7e">
                        <ul></ul>
                    </div>
                </form>
            </div>
        </div>


        <div class="clearfloat"></div>
    </div>
@endsection
