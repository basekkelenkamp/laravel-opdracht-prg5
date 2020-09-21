@extends('layouts')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            News
        </div>
                @foreach($allitems as $item)

                <div>
                    <a href="{{route('news.link',$item['id'])}}">
                    <h2>
                        {{$item['title']}}
                    </h2>
                    <p>
                        {{$item['description']}}
                    </p>
                    <img src="{{$item['image']}}" alt="">


                    </a>
                </div>
                    <br>
                @endforeach

    </div>
    @endsection
