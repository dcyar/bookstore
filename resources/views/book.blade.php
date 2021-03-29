@extends('layouts.web')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <figure class="cover-container">
                <img src="{{ $book->cover->getUrl() }}" class="book-cover" alt="{{ $book->title }}" />
            </figure>
        </div>
        <div class="col-md-9">
            <h1>{{ $book->title }} - <small class="price">${{ $book->price }}</small></h1>
            <h5>{{ $book->author->name }} - {{ $book->published_date }}</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque nec nam aliquam sem et tortor consequat id. A iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Pharetra vel turpis nunc eget lorem dolor sed viverra. Quis risus sed vulputate odio. Hendrerit gravida rutrum quisque non tellus orci ac. Varius sit amet mattis vulputate enim nulla aliquet. Sit amet facilisis magna etiam tempor orci. Nec feugiat nisl pretium fusce id velit ut tortor. Porttitor lacus luctus accumsan tortor posuere ac. Suspendisse potenti nullam ac tortor. Amet aliquam id diam maecenas. Erat pellentesque adipiscing commodo elit. Elementum tempus egestas sed sed risus pretium quam.
            </p>
            <p>
                Dui accumsan sit amet nulla facilisi morbi tempus iaculis urna. Consequat nisl vel pretium lectus quam id leo. Porttitor lacus luctus accumsan tortor posuere ac ut consequat. Viverra adipiscing at in tellus integer. Pellentesque pulvinar pellentesque habitant morbi. Turpis in eu mi bibendum neque. Lacus vestibulum sed arcu non odio. Sed risus ultricies tristique nulla aliquet enim. Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque sit. Mi proin sed libero enim sed faucibus turpis in. Aliquam vestibulum morbi blandit cursus risus. Sem viverra aliquet eget sit amet tellus cras adipiscing enim.
            </p>
            <div class="checkout">
                <a href="{{ route('library.book.buy', $book->id) }}" class="btn btn-warning btn-block" onclick="sendSaleToGa()">Buy for {{ $book->price }} credits</a>
            </div>
        </div>
    </div>
@endsection
