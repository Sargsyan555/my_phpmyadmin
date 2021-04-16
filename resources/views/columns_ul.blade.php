
<ul>
    <li class="activePointer">
        <i>
            <div class="block ">
                <a>
                    <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Columns" alt="Columns" class="icon ic_pause">
                </a>
            </div>&nbsp;
            <a class="hover_show_full" href="tbl_structure.php?server=1&amp;db=syllabus&amp;table=failed_jobs">Columns</a></i>
        <div class="clearfloat"></div>
        <div class="list_container hide" style="display: block;">
            <ul>
                <li class="new_column italics">
                    <div class="block ">
                        <a href="columns?table={{$table_id}}">
                            <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="New" alt="New" class="icon ic_b_column_add">
                        </a>
                    </div>
                    <a class="hover_show_full" href="columns?table={{$table_id}}" title="New">
                        New
                    </a>
                    <div class="clearfloat"></div>
                </li>
                @foreach($columns as $column)
                    <li class="">
                        <div class="block"><i></i>
                            <a href="">
                                <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Column" alt="Column" class="icon ic_pause"></a></div>
                        <a class="hover_show_full"  title="Structure">{{$column->field_name}}</a>
                        <div class="clearfloat"></div>
                    </li>
                @endforeach
            </ul>
        </div>
    </li>
</ul>
