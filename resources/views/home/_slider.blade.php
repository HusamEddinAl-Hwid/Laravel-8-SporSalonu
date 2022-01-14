<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    @php
                        $i = 0;
                    @endphp
                    @foreach($slider as $rs)
                        @php
                            $i += 1;
                        @endphp
                        <div class="item @if($i==1) active @endif">
                            <div class="down-content">
                                <img src="{{Storage::url($rs->image)}}" alt="">
                                <h4>{{$rs->title}}</h4>
                                <p>{{$rs->price}}₺</p>
                                <div class="main-button-yellow">
                                    <div><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Join Us Now!</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
