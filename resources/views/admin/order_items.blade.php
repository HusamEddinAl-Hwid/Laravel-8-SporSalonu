@extends('layouts.admin')

@section('title',  'Edit Order Page')
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
                            <h2 class="mdl-card__title-text">Edit Order</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                <form class="form form--basic" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                            <table class="mdl-data-table mdl-js-data-table" data-upgraded=",MaterialDataTable">

                                                <tr>
                                                <th class="mdl-data-table__cell--non-numeric">ID</th><td class="mdl-data-table__cell--non-numeric">{{$data->id}}</td>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Name</th><td class="mdl-data-table__cell--non-numeric">{{$data->user->name}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Email</th><td class="mdl-data-table__cell--non-numeric">{{$data->user->email}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Product</th><td class="mdl-data-table__cell--non-numeric">{{$data->product->title}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Product ID</th><td class="mdl-data-table__cell--non-numeric">{{$data->product->id}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Start Date</th><td class="mdl-data-table__cell--non-numeric">{{$data->start_date}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Finish Date</th><td class="mdl-data-table__cell--non-numeric">{{$data->finish_date}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Months</th><td class="mdl-data-table__cell--non-numeric">{{$data->months}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Price</th><td class="mdl-data-table__cell--non-numeric">{{$data->price}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Total</th><td class="mdl-data-table__cell--non-numeric">{{$data->total}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Payment</th><td class="mdl-data-table__cell--non-numeric">{{$data->payment}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">IP</th><td class="mdl-data-table__cell--non-numeric">{{$data->IP}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Created Date</th><td class="mdl-data-table__cell--non-numeric">{{$data->created_at}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Updated Date</th><td class="mdl-data-table__cell--non-numeric">{{$data->updated_at}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Status</th>
                                                <td>
                                                    <select class="mdl-textfield__input" name="status" >
                                                        <option style="color:grey" selected="selected">{{$data->status}}</option>
                                                        <option style="color:black">Accepted</option>
                                                        <option style="color:black">Completed</option>
                                                        <option style="color:black">Cancelled</option>
                                                    </select>
                                                </td>
                                                <tr>
                                                <tr>
                                                    <th class="mdl-data-table__cell--non-numeric">Admin Note</th>
                                                    <td><textarea name="note" rows="3" cols="30">{{$data->note}}</textarea></td>
                                                </tr>
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
