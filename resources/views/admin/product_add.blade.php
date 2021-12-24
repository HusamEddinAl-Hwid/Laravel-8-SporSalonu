@extends('layouts.admin')

@section('title',  'Add Product Page')
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
                        <h2 class="mdl-card__title-text">Add Product</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div>
                                        <form class="form form--basic" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mdl-grid">
                                                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <label class="mdl-textfield__label">Category</label>

                                                        <select class="mdl-textfield__input" name="category_id" >
                                                            @foreach($datalist as $rs)
                                                                <option style="color:black" value="{{$rs->id}}">{{$rs->title}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="text" name="title">
                                                        <label class="mdl-textfield__label">Title</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="text" name="keywords">
                                                        <label class="mdl-textfield__label">Keywords</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="text" name="description">
                                                        <label class="mdl-textfield__label">Description</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="number" name="months" value="0">
                                                        <label class="mdl-textfield__label">Months</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="number" name="price" value="0">
                                                        <label class="mdl-textfield__label">Price</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="number" name="tax" value="18">
                                                        <label class="mdl-textfield__label">Tax</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <input class="mdl-textfield__input" type="text" name="slug">
                                                        <label class="mdl-textfield__label">Slug</label>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size" style="color:black">
                                                        <label style="font-size:14px;color:#666666">Detail</label>
                                                        <textarea id="detail" name="detail"></textarea>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('#detail').summernote();
                                                            });
                                                        </script>
                                                    </div>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                        <label style="font-size:14px;color:#666666">Image</label>
                                                        <input class="mdl-textfield__input" type="file" name="image">
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
                                                                Add Product
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
