@extends('layouts.admin')

@section('title',  'Edit Category Page')

@section('content')
<main class="mdl-layout__content">
    <div class="mdl-grid mdl-grid--no-spacing dashboard">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Edit Category</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div>
                                        <form class="form form--basic" action="{{route('admin_category_update',['id' => $data->id])}}" method="post">
                                            @csrf
                                            <div class="mdl-grid">
                                                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <label class="mdl-textfield__label">Parent</label>

                                                        <select class="mdl-textfield__input" name="parent_id" >
                                                            <option value="0" style="color:grey">Main Category</option>
                                                            @foreach($datalist as $rs)
                                                                <option style="color:black" value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>{{$rs->title}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="text" name="title" value="{{$data->title}}">
                                                        <label class="mdl-textfield__label">Title</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="text" name="keywords" value="{{$data->keywords}}">
                                                        <label class="mdl-textfield__label">Keywords</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="text" name="description" value="{{$data->description}}">
                                                        <label class="mdl-textfield__label">Description</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="text" name="slug" value="{{$data->slug}}">
                                                        <label class="mdl-textfield__label">Slug</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <label class="mdl-textfield__label">Status</label>
                                                        <select class="mdl-textfield__input" name="status" >
                                                            <option style="color:black" selected="selected">{{$data->status}}</option>
                                                            <option style="color:black">False</option>
                                                            <option style="color:black">True</option>
                                                        </select>
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
