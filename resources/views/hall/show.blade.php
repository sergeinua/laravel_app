<?php
use Illuminate\Support\Facades\URL;
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Halls</div>
                    <div class="panel-body">
                        <table style="min-width: 200px; text-align: center">
                            <tr>
                                <td>name</td>
                                <td>rows</td>
                                <td>cols</td>
                            </tr>
                            <tr>
                                <td><?= $model->name ?></td>
                                <td><?= $model->rows ?></td>
                                <td><?= $model->cols ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop