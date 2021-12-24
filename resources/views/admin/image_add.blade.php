@extends('layouts.admin')

@section('title',  'Add Image Page')
@section('javascript')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
<main class="mdl-layout__content">
    <div class="mdl-grid mdl-grid--no-spacing dashboard">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Subscription : {{$data->title}}</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div>
                                        <form class="form form--basic" action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mdl-grid">
                                                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="text" name="title">
                                                        <label class="mdl-textfield__label">Title</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <label style="font-size:14px;color:#666666">Image</label>
                                                        <input class="mdl-textfield__input" type="file" name="image">
                                                    </div>
                                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                                                        <div class="mdl-layout-spacer"></div>
                                                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">
                                                                Add Image
                                                            </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                <div class="mdl-card mdl-shadow--2dp">
                            <table class="mdl-data-table mdl-js-data-table" data-upgraded=",MaterialDataTable">
                                <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">ID</th>
                                    <th class="mdl-data-table__cell--non-numeric">Title</th>
                                    <th class="mdl-data-table__cell--non-numeric">Image</th>
                                    <th class="mdl-data-table__cell--non-numeric">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $rs)
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{$rs->id}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$rs->title}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" height="90" alt="">
                                            @endif
                                        </td>
                                        <td class="mdl-data-table__cell--non-numeric"><a href="{{route('admin_image_delete',['id' => $rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Are you sure you want to delete this?')">
                                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-red">
                                                    <i class="material-icons">delete</i>
                                                </button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
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
