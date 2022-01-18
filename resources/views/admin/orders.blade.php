@extends('layouts.admin')

@section('title',  'Admin Order List')

@section('content')
<main class="mdl-layout__content">
    <div class="mdl-grid mdl-grid--no-spacing dashboard ui-tables">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Orders</h2>
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
                                            <th class="mdl-data-table__cell--non-numeric">Product</th>
                                            <th class="mdl-data-table__cell--non-numeric">Start Date</th>
                                            <th class="mdl-data-table__cell--non-numeric">Finish Date</th>
                                            <th class="mdl-data-table__cell--non-numeric">Months</th>
                                            <th class="mdl-data-table__cell--non-numeric">Price</th>
                                            <th class="mdl-data-table__cell--non-numeric">Total</th>
                                            <th class="mdl-data-table__cell--non-numeric">Payment</th>
                                            <th class="mdl-data-table__cell--non-numeric">Status</th>
                                            <th class="mdl-data-table__cell--non-numeric">Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->id}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->user->name}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->user->email}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->product->title}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->start_date}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->finish_date}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->months}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->price}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->total}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->payment}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->status}}</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="{{route('admin_order_show',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1000, height=800')">
                                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-teal">
                                                        <i class="material-icons">create</i>
                                                    </button></a>
                                            </td>
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
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>

@endsection
