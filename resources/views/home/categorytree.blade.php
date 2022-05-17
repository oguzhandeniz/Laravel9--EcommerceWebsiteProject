@foreach($children as $subcategory)
    <ul>
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            <ul >
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
        @endif
    </ul>
@endforeach
