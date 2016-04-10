@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Пользователи
                        <a href="{{ action('UserController@index') }}">
                            Добавить пользователя
                        </a>
                    </div>
                    <div class="panel-body">
                        <table style="min-width: 200px; text-align: center">
                            <tr>
                                <td>логин</td>

                            </tr>

                            <tr>
                                @foreach($model as $item)
                                    <td>
                                        <a href="{{ action('UserController@index', ['id' => $item->id]) }}">
                                            <?= $item->name; ?>
                                        </a>

                                    </td>
                                @endforeach
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop