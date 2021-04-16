@yield('scripts')
<ul>
    <li class="new_table italics">
        <div class="block"><i></i>
            <span class="hide pos2_nav" data-name="tables" data-value="0" ></span>
        </div>
        <div class="block second">
            <a href="index.php?route=/table/create&amp;server=2&amp;db=dbssg">
                <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="New" alt="New" class="icon ic_b_table_add">
            </a>
        </div>
        <a class="hover_show_full" href="server_databases?db={{$db_id}}" title="New">New</a>
        <div class="clearfloat">

        </div>
    </li>
@foreach($tables as $table)


    <li class="table">
        <div class="block"><i></i><b></b>
            <a >
                <span class="hide paths_nav" data-apath="cm9vdA==.ZGJzc2c=.dGFibGVz.Y2FuZGlkYXRlcw==" data-vpath="cm9vdA==.ZGJzc2c=.VGFibGVz.Y2FuZGlkYXRlcw==" data-pos="0" ></span>
                <span class="hide pos2_nav" data-name="tables" data-value="0" ></span>
                <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="expander_column icon ic_b_plus" data-id="{{$table->id}}">
            </a>
        </div>
        <div class="block second">
            <a href="">
                <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Structure" alt="Structure" class="icon ic_b_props">
            </a>
        </div>
        <a href="tbl_structure?table={{$table->id}}&db={{$db_id}}"  title="Browse">{{$table->table}}</a>
        <div class="clearfloat"></div>
        <div class="list_container toggle_column " style="display: block;">

        </div>
    </li>
@endforeach

</ul>
<script src="{{asset('assets/js/script.js')}}"></script>

