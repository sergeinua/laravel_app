<?php
use Illuminate\Support\Facades\URL;
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><?= $model->name; ?></div>
                    <div class="panel-body">
                        <table style="min-width: 200px; text-align: center">
                            <tr>
                                <td>ряд/место</td>
                                <?php $i=0; ?>
                                @while($i < $model->rows)
                                    <td><?= $i+1; ?></td>
                                    <?php $i++; ?>
                                @endwhile
                            </tr>
                            <?php for($n=0; $n<$model->cols; $n++) : ?>
                                <tr>
                                    <td><?= $n+1; ?></td>
                                    <?php for($i=0; $i<$model->rows; $i++) : ?>
                                        <td><a href="{{ action('HallController@index') }}">Купить</a></td>
                                    <?php endfor; ?>
                                </tr>
                            <?php endfor; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop