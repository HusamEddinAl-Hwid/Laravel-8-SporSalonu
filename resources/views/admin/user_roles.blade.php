@extends('layouts.admin')

@section('title',  'Edit User Roles Page')
@section('javascript')

@endsection
@section('content')
    <main class="mdl-layout__content">
        <div class="mdl-grid mdl-grid--no-spacing dashboard">

            <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--top">
                @include('home.message')
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">Edit User Roles</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                            <table class="mdl-data-table mdl-js-data-table" data-upgraded=",MaterialDataTable">

                                                <tr>
                                                    <th class="mdl-data-table__cell--non-numeric">ID</th><td class="mdl-data-table__cell--non-numeric">{{$data->id}}</td>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Name</th><td class="mdl-data-table__cell--non-numeric">{{$data->name}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Email</th><td class="mdl-data-table__cell--non-numeric">{{$data->email}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Roles</th>
                                                <td class="mdl-data-table__cell--non-numeric">
                                                    <table>
                                                        @foreach($data->roles as $row)
                                                            <tr>
                                                                <td>{{$row->name}}</td>
                                                                <td>
                                                                    <a href="{{route('admin_user_role_delete',['userid' => $data->id,'roleid'=>$row->id])}}" onclick="return confirm('Are you sure you want to delete this?')">
                                                                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-red">
                                                                            <i class="material-icons">delete</i>
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                </td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Add Role</th>
                                                <td>
                                                    <form class="form form--basic" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                    <select class="mdl-textfield__input" name="roleid" >
                                                        @foreach($datalist as $rs)
                                                            <option style="color:black" value="{{$rs->id}}">{{$rs->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <tr>
                                                    <td></td><td>
                                                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red" onclick="return confirm('Are you sure you want to apply this edit?')">
                                                            Add Role
                                                        </button>
                                                    </td>
                                                </tr>
                                                </form>
                                            </table>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
