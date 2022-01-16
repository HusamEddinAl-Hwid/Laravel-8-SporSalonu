@extends('layouts.admin')

@section('title',  'Add FAQ Page')
@section('javascript')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include ckeditor css/js -->
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('content')
    <main class="mdl-layout__content">
        <div class="mdl-grid mdl-grid--no-spacing dashboard">
            <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--top">
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">Add FAQ</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                <form class="form form--basic" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input class="mdl-textfield__input" type="text" name="position" value="0">
                                                <label class="mdl-textfield__label">Position</label>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <input class="mdl-textfield__input" type="text" name="question">
                                                <label class="mdl-textfield__label">Question</label>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size" style="color:black">
                                                <label style="font-size:14px;color:#666666">Answer</label>
                                                <textarea id="answer" name="answer"></textarea>
                                                <script>
                                                    CKEDITOR.replace( 'answer' );
                                                </script>
                                            </div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                <label class="mdl-textfield__label">Status</label>
                                                <select class="mdl-textfield__input" name="status" >
                                                    <option style="color:black" selected="selected">False</option>
                                                    <option style="color:black">True</option>
                                                </select>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                                                <div class="mdl-layout-spacer"></div>
                                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">
                                                    Add
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
