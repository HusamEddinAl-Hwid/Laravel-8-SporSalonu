@extends('layouts.admin')

@section('title',  'Contact Messages List')

@section('content')
<main class="mdl-layout__content">
    <div class="mdl-grid mdl-grid--no-spacing dashboard ui-tables">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Messages</h2>
                    </div>

                    <div class="mdl-card__supporting-text">
                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                            <div class="mdl-card mdl-shadow--2dp">
                                    <table class="mdl-data-table mdl-js-data-table" data-upgraded=",MaterialDataTable">
                                        <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">ID</th>
                                            <th class="mdl-data-table__cell--non-numeric">Name</th>
                                            <th class="mdl-data-table__cell--non-numeric">Email</th>
                                            <th class="mdl-data-table__cell--non-numeric">Phone</th>
                                            <th class="mdl-data-table__cell--non-numeric">Subject</th>
                                            <th class="mdl-data-table__cell--non-numeric">Message</th>
                                            <th class="mdl-data-table__cell--non-numeric">Admin Note</th>
                                            <th class="mdl-data-table__cell--non-numeric">Status</th>
                                            <th class="mdl-data-table__cell--non-numeric">Edit</th>
                                            <th class="mdl-data-table__cell--non-numeric">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->id}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->name}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->email}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->phone}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->subject}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->message}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->note}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->status}}</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="{{route('admin_message_edit',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800, height=700')">
                                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-teal">
                                                        <i class="material-icons">create</i>
                                                    </button></a> </td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="{{route('admin_message_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure you want to delete this?')">
                                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-red">
                                                        <i class="material-icons">delete</i>
                                                    </button></a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card__title mdl-card--expand">
                        <div>
                            <div class="mdl-layout-spacer"></div>
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">@include('home.message')</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
