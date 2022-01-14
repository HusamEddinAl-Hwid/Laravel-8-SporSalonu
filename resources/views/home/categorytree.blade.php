<ul class="sub-menu">
@foreach($children as $subcategory)
        @if(count($subcategory->children))
            <li><a href="">{{$subcategory->title}}</a></li>
                @include('home.categorytree',['children' => $subcategory->children])
        @else
            <li><a href="{{route('category_products',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
@endforeach
</ul>
