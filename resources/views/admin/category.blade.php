@extends('layouts.admin')

@section('title',  'Category List')

@section('content')
<main class="mdl-layout__content">
    <div class="mdl-grid mdl-grid--no-spacing dashboard ui-tables">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--2-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Categories</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                            <div class="mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title">
                                    <h1 class="mdl-card__title-text">Simple table</h1>
                                </div>
                                <div class="mdl-card__supporting-text no-padding">
                                    <table class="mdl-data-table mdl-js-data-table" data-upgraded=",MaterialDataTable">
                                        <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">ID</th>
                                            <th class="mdl-data-table__cell--non-numeric">Parent</th>
                                            <th class="mdl-data-table__cell--non-numeric">Title</th>
                                            <th class="mdl-data-table__cell--non-numeric">Status</th>
                                            <th class="mdl-data-table__cell--non-numeric">Edit</th>
                                            <th class="mdl-data-table__cell--non-numeric">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->id}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->parent_id}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->title}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->status}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">Edit</td>
                                            <td class="mdl-data-table__cell--non-numeric">Delete</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card__title mdl-card--expand">
                        <div>
                            Footer
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>

@endsection
