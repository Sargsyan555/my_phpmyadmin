$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.hover_show_full').click(function (){
        var id = $(this).data("id");
        var thi = $(this).parent().parent().children('.list_container'+id);
        $.ajax({
            url:"field_list",
            data:{
                id:id
            },
            method: "POST",
            success:function (res){
                thi.append(res);
                thi.show();
            }
        })
    })
    $('#add_table').keyup(function (){
        $('.check_table').empty()

        var table = $('#add_table').val();
        var token_str = $('#token_str').val();
        $.ajax({
            url:"check_table",
            data:{
                table:table,
                token:token_str
            },
            method: "POST",
            success:function (res){
                $('.check_table').append(res)
            }
        })
    })
    $('.drop_table_anchor').click(function (e){
        e.preventDefault();
        var id = $(this).data("id");
        $.ajax({
            url:'delete_table',
            data:{
                id:id
            },
            method:'POST',
            success: function (res) {
                $('.delete_tbl' + id).parent().parent().remove();
            }
        })
    })
    $('.drop_column_anchor').click(function (e){
        e.preventDefault();
        var id = $(this).data("id");
        $.ajax({
            url:'delete_column',
            data:{
                id:id
            },
            method:'POST',
            success: function (res) {
                $('.delete' + id).parent().parent().remove();

            }
        })
    })

    $('#add_columns_in_table').click(function (){
        $.ajax({
            url:"add_columns_in_table",
            data:{
                added_fields:$('#added_fields').val(),
                table_id:$('#table_id').val(),
            },
            method: "POST",
            success:function (res){
                $('#table_columns').append(res);
            }
        })
    })
    $('#new_db').keyup(function (){
        $('.check_table').empty()
        var new_db = $('#new_db').val();
        $.ajax({
            url:"check_db",
            data:{
                new_db:new_db,
            },
            method: "POST",
            success:function (res){
                $('.check_table').append(res)
            }
        })
    })
    $('#add_table_check').keyup(function (){
        $('.check_table').empty()

        var table = $('#add_table_check').val();
        var token_str = $('#token_str').val();
        $.ajax({
            url:"check_table",
            data:{
                table:table,
                token:token_str
            },
            method: "POST",
            success:function (res){
                $('.check_table').append(res)
            }
        })
    })
    $('.expander_hideen').click(function (){
        $(this).parent().parent().parent().children('.toggle_table').toggle();
        if ($(this).attr('class').split(' ')[2] == 'ic_b_plus'){
            $(this).removeClass('ic_b_plus').addClass('ic_b_minus');
        }else {
            $(this).removeClass('ic_b_minus').addClass('ic_b_plus');
        }
    })

    $('.expander_column').click(function () {
        var id = $(this).data("id");
        var a =  $(this)
        $.ajax({
            url:'show_column_ul',
            data:{
                id:id
            },
            method:'POST',
            success: function (res) {
                $(a).parent().parent().parent().children('.toggle_column').append(res)
                $(a).parent().html("<img src=\"https://demo.phpmyadmin.net/master-config/themes/dot.gif\" title=\"Expand/Collapse\" alt=\"Expand/Collapse\" class=\"expander_hideen icon ic_b_minus\" style=\"\">\n")
            }
        })
    })

    $('.expander').click(function (){
        var id = $(this).data("id");
        var a =  $(this)
        $.ajax({
            url:'show_table_ul',
            data:{
                table_id:id
            },
            method:'POST',
            success: function (res) {
                $(a).parent().parent().parent().children('.toggle_table').append(res)
                $(a).parent().html("<img src=\"https://demo.phpmyadmin.net/master-config/themes/dot.gif\" title=\"Expand/Collapse\" alt=\"Expand/Collapse\" class=\"expander_hideen icon ic_b_minus\" style=\"\">\n")
            }
        })
    })



    var url = window.location.href.split('?')[0];
    var path = window.location.pathname;
    var paths =  window.location.search
    if (path == '/server_databases'){
        $('#topmenu').append('<li class="nav-item active">\n' +
            '                    <a class="nav-link text-nowrap" href="server_databases">\n' +
            '                        <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Structure" alt="Structure" class="icon ic_b_props">&nbsp;Structure\n' +
            '                    </a>\n' +
            '                </li>')
        $('.ic_s_db').parent().parent().hide();
    }
    if (path == '/db_structure'){
        $('#topmenu').append('<li class="nav-item active">\n' +
            '                    <a class="nav-link text-nowrap" href="db_structure'+paths+'">\n' +
            '                        <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Structure" alt="Structure" class="icon ic_b_props">&nbsp;Structure\n' +
            '                    </a>\n' +
            '                </li>')
        $('.ic_s_db').parent().parent().hide();
    }
    if (path == '/tbl_structure'){
        $('#topmenu').append('<li class="nav-item active">\n' +
            '                    <a class="nav-link text-nowrap" href="db_structure'+paths+'">\n' +
            '                        <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Structure" alt="Structure" class="icon ic_b_props">&nbsp;Structure\n' +
            '                    </a>\n' +
            '                </li>')
        $('.ic_s_db').parent().parent().hide();
    }
    $('#topmenu .nav-link').each(function() {
        if (this.href === url) {
            $(this).parent('.nav-item').addClass('active');
        }
    });
})
