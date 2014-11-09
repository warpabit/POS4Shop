@extends('layout')

@section('head')
<title>{{App::make('ceddd\Shop')->getName()}} - Product</title>
@stop

@section('body')
<div class="well">
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Create At</th>
            <th>Update At</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($allCustomer as $val) {
            ?>
            <tr>
                <td>{{$val->get('id')}}</td>
                <td>{{$val->get('name')}}</td>
                <td>{{$val->get('created_at')}}</td>
                <td>{{$val->get('updated_at')}}</td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
@stop

@section('js')
@stop