
@foreach($tables as $table)
    <ul>
        <li class="new_table italics">
            <div class="block"><i></i>
                <span class="hide pos2_name">tables</span>
                <span class="hide pos2_value">0</span></div>
            <div class="block "><a href="tbl_create.php?server=1&amp;db=1">
                    <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Новая" alt="Новая" class="icon ic_b_table_add"></a>
            </div><a class="hover_show_full" href="tbl_create.php?server=1&amp;db=1" title="Новая">Новая</a><div class="clearfloat">

            </div>
        </li>
        <li class="last table">
            <div class="block ">
                <a href="tbl_structure.php?server=1&amp;db=1&amp;table=simple_videos">
                    <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Структура" alt="Структура" class="icon ic_b_props">
                </a>
            </div>
            <a class="hover_show_full" href="sql.php?server=1&amp;db=1&amp;table=simple_videos&amp;pos=0" title="Обзор">simple_videos</a>
            <span class="navItemControls">
                                            <a href="navigation.php" data-post="hideNavItem=1&amp;itemType=table&amp;itemName=simple_videos&amp;dbName=1" class="hideNavItem ajax">
                                                <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Скрыть" alt="Скрыть" class="icon ic_hide"></a></span>
            <div class="clearfloat"></div></li>
    </ul>
@endforeach
