@extends('layouts.base')

@section('title', 'DB Structure')

@section('content')
{{--create table name --}}
{{--+--}}
<div id="page_content">
    <form id="create_table_form_minimal" method="post" action="add_table" class="lock-page">
            @csrf
            <fieldset class="pma-fieldset">
                <legend>
                    <img src="https://demo.phpmyadmin.net/master-config/themes/dot.gif" title="" alt="" class="icon ic_b_table_add">        Create table        </legend>
                    <input type="hidden" name="db"  value="shop">
                <input type="hidden" name="token" id="token_str" value="{{$_GET['db']}}">
                <div class="formelement">
                    Name:<input type="text" name="table" id="add_table_check" maxlength="64" size="30" required="required">
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
