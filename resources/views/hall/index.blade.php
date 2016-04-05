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
                        <ul>
                            <?php foreach($model as $item) : ?>
                            <li style="list-style-type: none">
                                <a href="<?= URL::action('HallController@show', ['id' => $item->id]); ?>">
                                    <?= $item->name; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop