@extends('layouts.admin')

@section('title',  'Edit User Page')
@section('javascript')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
@section('content')
    <main class="mdl-layout__content">
        <div class="mdl-grid mdl-grid--no-spacing dashboard">
@include('home.message')
            <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--top">

                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">Edit Product</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                <form class="form form--basic" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input class="mdl-textfield__input" type="text" name="name" value="{{$data->name}}">
                                                <label class="mdl-textfield__label">Name</label>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input class="mdl-textfield__input" type="text" name="email" value="{{$data->email}}">
                                                <label class="mdl-textfield__label">Email</label>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input class="mdl-textfield__input" type="text" name="phone" value="{{$data->phone}}">
                                                <label class="mdl-textfield__label">Phone</label>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <label style="font-size:14px;color:#666666">Image</label>
                                                <input class="mdl-textfield__input" type="file" name="image">
                                                @if($data->profile_photo_path)
                                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                                @endif
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                                                <div class="mdl-layout-spacer"></div>
                                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red" onclick="return confirm('Are you sure you want to apply this edit?')">
                                                    Update
                                                </button>
                                            </div>
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
