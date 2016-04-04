<?php
use Illuminate\Support\Facades\URL;
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-block">
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
@stop
