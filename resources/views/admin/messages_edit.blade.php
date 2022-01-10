@extends('layouts.admin')

@section('title',  'Edit Message Page')
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
                            <h2 class="mdl-card__title-text">Edit Message</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                <form class="form form--basic" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
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
                                                <th class="mdl-data-table__cell--non-numeric">Phone</th><td class="mdl-data-table__cell--non-numeric">{{$data->phone}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Subject</th><td class="mdl-data-table__cell--non-numeric">{{$data->subject}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Message</th><td class="mdl-data-table__cell--non-numeric">{{$data->message}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Admin Note</th>
                                                <td>
                                                    <textarea id="note" name="note">{{$data->note}}</textarea>
                                                </td>
                                                <tr>
                                                    <td></td><td>
                                                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red" onclick="return confirm('Are you sure you want to apply this edit?')">
                                                            Update
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

@endsection
