
@extends('layouts.base')

@section('title', 'DB ')

@section('content')
<div id="page_content">
    <div id="page_settings_modal"><div class="page_settings">
            <form method="post" action="" class="config-form disableAjax">
                <input type="hidden" name="tab_hash" value="">
                <input type="hidden" name="check_page_refresh" id="check_page_refresh" value="">
                <input type="hidden" name="token" value="305161774124453b48685b6c3b615977">
                <input type="hidden" name="submit_save" value="DbStructure">

                <ul class="nav nav-tabs" id="configFormDisplayTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="DbStructure-tab" href="#DbStructure" data-bs-toggle="tab" role="tab" aria-controls="DbStructure" aria-selected="true">Database structure</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="DbStructure" role="tabpanel" aria-labelledby="DbStructure-tab">
                        <div class="card border-top-0">
                            <div class="card-body">
                                <h5 class="card-title visually-hidden">Database structure</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Choose which details to show in the database structure (list of tables).</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="tableslistcontainer">


        <div class="row">
            <div class="col-12">
                <fieldset class="pma-fieldset" id="tableFilter">
                    <legend>Filters</legend>
                    <div class="formelement">
                        <label for="filterText">Containing the word:</label>
                        <input name="filterText" type="text" id="filterText" value="">
                    </div>
                </fieldset>
            </div>
        </div>
        <form method="post" action="index.php?route=/database/structure" name="tablesForm" id="tablesForm">
            <input type="hidden" name="db" value="shop"><input type="hidden" name="token" value="305161774124453b48685b6c3b615977">
            <div class="table-responsive">
                <table class="table table-light table-striped table-hover table-sm w-auto">
                    <thead class="table-light">
                    <tr>
                        <th class="d-print-none"></th>
                        <th><a href="index.php?route=/database/structure&amp;db=shop&amp;pos=0&amp;sort=table&amp;sort_order=DESC" title="Sort" onmouseover="$('.sort_arrow').toggle();" onmouseout="$('.sort_arrow').toggle();">Table <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="Ascending" class="icon ic_s_asc sort_arrow"> <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="Descending" class="icon ic_s_desc sort_arrow hide"></a></th>

                        <th colspan="7" class="d-print-none">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tables as $table)
                        <tr id="row_tbl_1" data-filter-row="{{$table->table}}">
                            <td class="text-center d-print-none">
                                <input type="checkbox" name="selected_tbl[]" class="checkall" value="simple_videos" id="checkbox_tbl_1">
                            </td>
                            <th>
                                <a href="tbl_structure?table={{$table->id}}&db={{$table->token}}" title="">
                                    {{$table->table}}
                                </a>
                            </th>
                            <td class="text-center d-print-none">
                                <a href="tbl_structure?table={{$table->id}}&db={{$table->token}}" title="">
                                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Structure" alt="Structure" class="icon ic_b_props">&nbsp;Structure</span>
                                </a>
                            </td>
                            <td class="text-center d-print-none">
                                <a class="ajax drop_table_anchor delete_tbl{{$table->id}}" data-id="{{$table->id}}">
                                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Drop" alt="Drop" class="icon ic_b_drop">&nbsp;Drop</span>
                                </a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                    <tfoot id="tbl_summary_row" class="table-light">
                    <tr>
                        <th class="d-print-none"></th>
                        <th class="tbl_num text-nowrap">
                            {{count($tables)}} table
                        </th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </form>
    </div>
    <hr>
    <form id="create_table_form_minimal" method="post" action="add_table" class="lock-page">
        @csrf
        <fieldset class="pma-fieldset">
            <legend>
                <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="" class="icon ic_b_table_add">        Create table        </legend>
            <input type="hidden" name="db"  value="shop">
            <input type="hidden" name="token" id="token_str" value="{{$_GET['db']}}">
            <div class="formelement">
                Name:<input type="text" name="table" id="add_table" maxlength="64" size="30" required="required">
                <span class="text-danger check_table d-block px-5"></span>
            </div>
            <div class="formelement">
                Number of columns:
                <input type="number" min="1" name="num_fields" value="4" required="required">
            </div>
            <div class="clearfloat"></div>
        </fieldset>
        <fieldset class="pma-fieldset tblFooters">
            <input class="btn btn-primary" type="submit" value="Go">
        </fieldset>
    </form>
</div>
@endsection
