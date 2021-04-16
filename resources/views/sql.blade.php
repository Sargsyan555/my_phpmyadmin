
@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <div id="page_content">
        <form>
            <input type="hidden" name="message_to_show" value="Your SQL query has been executed successfully.">
            <a id="querybox"></a>
            <div class="card mb-3">
                <div class="card-header">You can create and delete database<img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a></div>
                <div class="card-body">
                    <div id="queryfieldscontainer">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <textarea class="form-control" tabindex="100" name="sql_query" id="sqlquery" cols="40" rows="15" aria-label="SQL query"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <input class="btn btn-primary ms-1" id="button_submit_query" value="Go">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="sqlqueryresultsouter"></div>
    </div>
    <script>
        $(document).ready(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#button_submit_query').click(function (){
                var data=$('#sqlquery').val();
                $.ajax({
                    url:'add_sql',
                    data:{
                        data:data
                    },
                    method:'POST',
                    success: function (res) {
                        alert(res)
                    }
                })

            })
            /*$('#update').click(function (){

            })
            $('#delete').click(function (){

            })*/
        })
    </script>
@endsection
