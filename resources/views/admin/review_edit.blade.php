@extends('layouts.admin')

@section('title',  'Edit Review Page')
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
                            <h2 class="mdl-card__title-text">Edit Review</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                <form class="form form--basic" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
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
                                                <th class="mdl-data-table__cell--non-numeric">Product</th><td class="mdl-data-table__cell--non-numeric">{{$data->product->title}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Subject</th><td class="mdl-data-table__cell--non-numeric">{{$data->subject}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Review</th><td class="mdl-data-table__cell--non-numeric">{{$data->review}}</td>
                                                <tr>
                                                </tr>
                                                <th class="mdl-data-table__cell--non-numeric">Rate</th><td class="mdl-data-table__cell--non-numeric">{{$data->rate}}</td>
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
                                                        <option style="color:grey">{{$data->status}}</option>
                                                        <option style="color:black" selected="selected">True</option>
                                                        <option style="color:black" selected="selected">False</option>
                                                    </select>
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
