
@extends('layouts.base')

@section('title', 'DB')

@section('content')

<div id="page_content">

    <div id="structure_content">
        <h1 class="d-none d-print-block">category</h1>
        <form method="post" action="index.php?route=/table/structure" name="fieldsForm" id="fieldsForm" class="ajax HideStructureActions">

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

                        <td class="print_ignore">
                            <ul class="table-structure-actions resizable-menu">
                                <li class="submenu shown">
                                    <a href="#" class="tab text-nowrap"><span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="More" alt="More" class="icon ic_b_more">&nbsp;More</span></a>
                                    <ul>

                                        <li class="primary text-nowrap">
                                            <a rel="samepage" class="ajax add_key print_ignore add_primary_key_anchor" href="index.php?route=/table/structure/add-key" data-post="?db=shoe_db&amp;table=category&amp;sql_query=ALTER+TABLE+%60category%60+ADD+PRIMARY+KEY%28%60text%60%29%3B&amp;message_to_show=A+primary+key+has+been+added+on+text.">
                                                <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Primary" alt="Primary" class="icon ic_b_primary">&nbsp;Primary</span>
                                            </a>
                                        </li>

                                        <li class="add_unique unique text-nowrap">
                                            <a rel="samepage" class="ajax add_key print_ignore add_unique_anchor" href="index.php?route=/table/structure/add-key" data-post="?db=shoe_db&amp;table=category&amp;sql_query=ALTER+TABLE+%60category%60+ADD+UNIQUE%28%60text%60%29%3B&amp;message_to_show=An+index+has+been+added+on+text.">
                                                <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Unique" alt="Unique" class="icon ic_b_unique">&nbsp;Unique</span>
                                            </a>
                                        </li>

                                        <li class="add_index text-nowrap">
                                            <a rel="samepage" class="ajax add_key print_ignore add_index_anchor" href="index.php?route=/table/structure/add-key" data-post="?db=shoe_db&amp;table=category&amp;sql_query=ALTER+TABLE+%60category%60+ADD+INDEX%28%60text%60%29%3B&amp;message_to_show=An+index+has+been+added+on+text.">
                                                <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Index" alt="Index" class="icon ic_b_index">&nbsp;Index</span>
                                            </a>
                                        </li>

                                        <li class="spatial text-nowrap">
                                            <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Spatial" alt="Spatial" class="icon ic_bd_spatial">&nbsp;Spatial</span>
                                        </li>

                                        <li class="fulltext text-nowrap">
                                            <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Fulltext" alt="Fulltext" class="icon ic_bd_ftext">&nbsp;Fulltext</span>
                                        </li>

                                        <li class="browse text-nowrap">
                                            <a href="index.php?route=/sql" data-post="?db=shoe_db&amp;table=category&amp;sql_query=SELECT+COUNT%28%2A%29+AS+%60Rows%60%2C+%60text%60+FROM+%60category%60+GROUP+BY+%60text%60+ORDER+BY+%60text%60&amp;is_browse_distinct=1">
                                                <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Distinct values" alt="Distinct values" class="icon ic_b_browse">&nbsp;Distinct values</span>
                                            </a>
                                        </li>
                                        <li class="browse text-nowrap">
                                            <a href="#" class="central_columns add_button">
                                                <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Add to central columns" alt="Add to central columns" class="icon ic_centralColumns_add">&nbsp;Add to central columns</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="print_ignore">
                <input type="checkbox" id="fieldsForm_checkall" class="checkall_box" title="Check all">
                <label for="fieldsForm_checkall">Check all</label>
                <em class="with-selected">With selected:</em>

                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/browse">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Browse" alt="Browse" class="icon ic_b_browse">&nbsp;Browse</span>
                </button>

                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/change">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Change" alt="Change" class="icon ic_b_edit">&nbsp;Change</span>
                </button>
                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/drop-confirm">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Drop" alt="Drop" class="icon ic_b_drop">&nbsp;Drop</span>
                </button>

                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/primary">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Primary" alt="Primary" class="icon ic_b_primary">&nbsp;Primary</span>
                </button>
                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/unique">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Unique" alt="Unique" class="icon ic_b_unique">&nbsp;Unique</span>
                </button>
                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/index">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Index" alt="Index" class="icon ic_b_index">&nbsp;Index</span>
                </button>
                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/spatial">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Spatial" alt="Spatial" class="icon ic_b_spatial">&nbsp;Spatial</span>
                </button>
                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/fulltext">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Fulltext" alt="Fulltext" class="icon ic_b_ftext">&nbsp;Fulltext</span>
                </button>

                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/central-columns-add">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Add to central columns" alt="Add to central columns" class="icon ic_centralColumns_add">&nbsp;Add to central columns</span>
                </button>
                <button class="btn btn-link mult_submit" type="submit" formaction="index.php?route=/table/structure/central-columns-remove">
                    <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Remove from central columns" alt="Remove from central columns" class="icon ic_centralColumns_delete">&nbsp;Remove from central columns</span>
                </button>
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
        <div id="structure-action-links">
            <a href="#" id="printView"><span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Print" alt="Print" class="icon ic_b_print">&nbsp;Print</span></a>
            <a href="index.php?route=/table/tracking&amp;db=shoe_db&amp;table=category">
                <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Track table" alt="Track table" class="icon ic_eye">&nbsp;Track table</span>
            </a>
            <a href="#" id="move_columns_anchor">
                <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Move columns" alt="Move columns" class="icon ic_b_move">&nbsp;Move columns</span>
            </a>
            <a href="index.php?route=/normalization&amp;db=shoe_db&amp;table=category">
                <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Normalize" alt="Normalize" class="icon ic_normalize">&nbsp;Normalize</span>
            </a>
        </div>
        <form method="post" action="index.php?route=/table/add-field" id="addColumns" name="addColumns">
            @foreach($columns as $column)

            <input type="hidden" name="db" value="{{$column}}"><input type="hidden" name="table" value="category">
            <input type="hidden" name="token" value="7c4b29797858217374447a412a4c2f7e">
            <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Add column" alt="Add column" class="icon ic_b_insrow">&nbsp;
            Add <input type="number" name="num_fields" value="1" onfocus="this.select()" min="1" required=""> column(s)
            <input type="hidden" name="field_where" value="after">&nbsp;
            <select name="after_field">
                <option value="first" data-pos="first">
                    at beginning of table            </option>
                <option value="text" selected="selected">
                    after text
                </option>
            </select>
            <input class="btn btn-primary" type="submit" value="Go">
            @endforeach
        </form>

        <div id="index_div" class="w-100 ajax">
            <fieldset class="pma-fieldset index_info">
                <legend id="index_header">
                    Indexes        <a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F8.0%2Fen%2Foptimizing-database-structure.html" target="mysql_doc"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a>
                </legend>

                <div class="no_indexes_defined"><div class="alert alert-primary" role="alert">
                        <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="" class="icon ic_s_notice"> No index defined!
                    </div>
                </div>
            </fieldset>

            <fieldset class="pma-fieldset tblFooters print_ignore text-start">
                <form action="index.php?route=/table/indexes" method="post">
                    <input type="hidden" name="db" value="shoe_db"><input type="hidden" name="table" value="category"><input type="hidden" name="token" value="7c4b29797858217374447a412a4c2f7e">
                    <input type="hidden" name="create_index" value="1">

                    Create an index on <input class="mx-2" type="number" name="added_fields" value="1" min="1" required=""> columns
                    <input class="btn btn-primary add_index ajax" type="submit" value="Go">
                </form>
            </fieldset>
        </div>

        <div id="partitions">
            <fieldset class="pma-fieldset">
                <legend>
                    Partitions            <a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F8.0%2Fen%2Fpartitioning.html" target="mysql_doc"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a>
                </legend>
                <div class="alert alert-primary" role="alert">
                    <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="" class="icon ic_s_notice"> No partitioning defined!
                </div>

            </fieldset>
            <fieldset class="pma-fieldset tblFooters print_ignore">
                <form action="index.php?route=/table/structure/partitioning" method="post">
                    <input type="hidden" name="db" value="shoe_db"><input type="hidden" name="table" value="category"><input type="hidden" name="token" value="7c4b29797858217374447a412a4c2f7e">

                    <input class="btn btn-secondary" type="submit" value="Partition table">
                </form>
            </fieldset>
        </div>
    </div>

    <div id="tablestatistics">
        <fieldset class="pma-fieldset">
            <legend>Information</legend>
            <a id="showusage"></a>

            <table class="table table-light table-striped table-hover table-sm w-auto caption-top">
                <caption>Space usage</caption>
                <tbody>
                <tr>
                    <th class="name">Data</th>
                    <td class="value">16.0</td>
                    <td class="unit">KiB</td>
                </tr>

                <tr>
                    <th class="name">Index</th>
                    <td class="value">0</td>
                    <td class="unit">B</td>
                </tr>

                <tr>
                    <th class="name">Overhead</th>
                    <td class="value">0</td>
                    <td class="unit">B</td>
                </tr>
                <tr>
                    <th class="name">Effective</th>
                    <td class="value">16.0</td>
                    <td class="unit">KiB</td>
                </tr>

                <tr>
                    <th class="name">Total</th>
                    <td class="value">16.0</td>
                    <td class="unit">KiB</td>
                </tr>
                </tbody>

                <tfoot class="table-light">
                <tr class="print_ignore">
                    <th colspan="3" class="center">
                        <a href="index.php?route=/sql" data-post="?db=shoe_db&amp;table=category&amp;sql_query=OPTIMIZE+TABLE+%60category%60&amp;pos=0">
                            <span class="text-nowrap"><img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Optimize table" alt="Optimize table" class="icon ic_b_tbloptimize">&nbsp;Optimize table</span>
                        </a>
                    </th>
                </tr>
                </tfoot>
            </table>

            <table class="table table-light table-striped table-hover table-sm w-auto caption-top">
                <caption>Row statistics</caption>
                <tbody>
                <tr>
                    <th class="name">Format</th>
                    <td class="value">dynamic</td>
                </tr>


                <tr>
                    <th class="name">Collation</th>
                    <td class="value">
                        <dfn title="Unicode, case-insensitive">
                            utf8_general_ci
                        </dfn>
                    </td>
                </tr>




                <tr>
                    <th class="name">Next autoindex</th>
                    <td class="value">0</td>
                </tr>

                <tr>
                    <th class="name">Creation</th>
                    <td class="value">Apr 11, 2021 at 02:41 PM</td>
                </tr>

                <tr>
                    <th class="name">Last update</th>
                    <td class="value">Apr 11, 2021 at 02:41 PM</td>
                </tr>

                <tr>
                    <th class="name">Last check</th>
                    <td class="value">Apr 11, 2021 at 02:41 PM</td>
                </tr>
                </tbody>
            </table>
        </fieldset>
    </div>

    <div class="clearfloat"></div>
</div>
@endsection
