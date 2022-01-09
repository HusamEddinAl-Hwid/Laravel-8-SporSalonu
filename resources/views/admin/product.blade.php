@extends('layouts.admin')

@section('title',  'Products List')

@section('content')
<main class="mdl-layout__content">
    <div class="mdl-grid mdl-grid--no-spacing dashboard ui-tables">

        <div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Products</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                            <div class="mdl-card mdl-shadow--2dp">
                                    <table class="mdl-data-table mdl-js-data-table" data-upgraded=",MaterialDataTable">
                                        <thead>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric">ID</th>
                                            <th class="mdl-data-table__cell--non-numeric">Category</th>
                                            <th class="mdl-data-table__cell--non-numeric">Title</th>
                                            <th class="mdl-data-table__cell--non-numeric">Months</th>
                                            <th class="mdl-data-table__cell--non-numeric">Price</th>
                                            <th class="mdl-data-table__cell--non-numeric">Image</th>
                                            <th class="mdl-data-table__cell--non-numeric">Status</th>
                                            <th class="mdl-data-table__cell--non-numeric">Image Gallery</th>
                                            <th class="mdl-data-table__cell--non-numeric">Edit</th>
                                            <th class="mdl-data-table__cell--non-numeric">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->id}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{ \App\Http\Controllers\Admin\CategoryController::getParentTree($rs->category, $rs->category->title) }}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->title}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->months}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->price}}</td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                                @endif
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">{{$rs->status}}</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="{{route('admin_image_add',['product_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-teal">
                                                        <i class="material-icons">photo_library</i>
                                                    </button></a> </td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="{{route('admin_product_edit',['id' => $rs->id])}}">
                                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-teal">
                                                        <i class="material-icons">create</i>
                                                    </button></a> </td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="{{route('admin_product_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure you want to delete this?')">
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
                            <a href="{{route('admin_product_add')}}">
                                <button class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                    Add Product
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>

@endsection
