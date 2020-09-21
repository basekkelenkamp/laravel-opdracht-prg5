@extends('layouts')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    Detail
                </div>

                <div>
                    <h2>{{$newsitem['title']}}</h2>
                    <p>{{$newsitem['description']}}</p>
                    <img src="{{$newsitem['image']}}" alt="">
                </div>

            </div>
@endsection
