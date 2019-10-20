<div class="classynav">
    <ul>
    <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('blog.blog')}}">Blog</a></li>
        <li><a href="#">Catagories</a>
            <div class="dropdown">
                
                <ul class="single-mega cn-col-4">
                        @foreach($categories as $category)
                        <li><a href="{{route ('blog.blog-by-category', $category->slug)}}">{{$category -> name}}</a></li>
                        @endforeach
                    {{-- <li><a href="#">- Features</a></li>
                    <li><a href="#">- Food</a></li>
                    <li><a href="#">- Travel</a></li>
                    <li><a href="#">- Recipe</a></li>
                    <li><a href="#">- Bread</a></li>
                    <li><a href="#">- Breakfast</a></li>
                    <li><a href="#">- Meat</a></li>
                    <li><a href="#">- Fastfood</a></li>
                    <li><a href="#">- Salad</a></li>
                    <li><a href="#">- Soup</a></li> --}}
                </ul>
            </div>
        </li>
        <li><a href="/typography">Travel</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>

</div>