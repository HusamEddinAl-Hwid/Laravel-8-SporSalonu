@extends('layouts.admin')

@section('title',  'Edit Product Page')
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
                            <h2 class="mdl-card__title-text">Edit Settings</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                    <form class="form form--basic" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mdl-grid">
                                            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">

                                                <div class="card card-primary card-tabs">
                                                    <div class="card-header p-0 pt-1">
                                                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-general" aria-selected="true">General</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill" href="#custom-tabs-one-social" role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social Media</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill" href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-one-aboutus-tab" data-toggle="pill" href="#custom-tabs-one-aboutus" role="tab" aria-controls="custom-tabs-one-aboutus" aria-selected="false">About us</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                                            <div class="tab-pane fade active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                                                <input class="mdl-textfield__input" id="id" type="hidden" name="id" value="{{$data->id}}">
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
                                                                    <input class="mdl-textfield__input" type="text" name="company" value="{{$data->company}}">
                                                                    <label class="mdl-textfield__label">Company</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="address" value="{{$data->address}}">
                                                                    <label class="mdl-textfield__label">Address</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="phone" value="{{$data->phone}}">
                                                                    <label class="mdl-textfield__label">Phone</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="fax" value="{{$data->fax}}">
                                                                    <label class="mdl-textfield__label">Fax</label>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social-tab">
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="facebook" value="{{$data->facebook}}">
                                                                    <label class="mdl-textfield__label">Facebook</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="twitter" value="{{$data->twitter}}">
                                                                    <label class="mdl-textfield__label">Twitter</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="instagram" value="{{$data->instagram}}">
                                                                    <label class="mdl-textfield__label">Instagram</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="youtube" value="{{$data->youtube}}">
                                                                    <label class="mdl-textfield__label">Youtube</label>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel" aria-labelledby="custom-tabs-one-smtp-tab">
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="email" value="{{$data->email}}">
                                                                    <label class="mdl-textfield__label">Email</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="smtpserver" value="{{$data->smtpserver}}">
                                                                    <label class="mdl-textfield__label">Smtp Server</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="text" name="smtpemail" value="{{$data->smtpemail}}">
                                                                    <label class="mdl-textfield__label">Smtp Email</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="password" name="smtppassword" value="{{$data->smtppassword}}">
                                                                    <label class="mdl-textfield__label">Smtp Password</label>
                                                                </div>
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                                                    <input class="mdl-textfield__input" type="number" name="smtpport" value="{{$data->smtpport}}">
                                                                    <label class="mdl-textfield__label">Smtp Port</label>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="custom-tabs-one-aboutus" role="tabpanel" aria-labelledby="custom-tabs-one-aboutus-tab">
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size" style="color:black">
                                                                    <label style="font-size:14px;color:grey">About us</label>
                                                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size" style="color:black">
                                                                    <label style="font-size:14px;color:grey">Contact</label>
                                                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size" style="color:black">
                                                                    <label style="font-size:14px;color:grey">References</label>
                                                                    <textarea id="references" name="references">{{$data->references}}</textarea>
                                                                </div>
                                                                <script>
                                                                    $(document).ready(function() {
                                                                        $('#aboutus').summernote();
                                                                        $('#contact').summernote();
                                                                        $('#references').summernote();
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                                                <div class="mdl-layout-spacer"></div>
                                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red" onclick="return confirm('Are you sure you want to apply this edit?')">
                                                    Update
                                                </button>
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
