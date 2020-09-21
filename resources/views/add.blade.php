@extends('layouts')

@section('content')
<form action="{{route('news')}}" method="post">
    <label for="title">Title:</label><br>
    <input type="text" id="title" value="" id="" name="" placeholder="Title"><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" value="" id="" name="" placeholder="Write your text..."><br>
    <input type="submit" value="Submit">
</form>
    @endsection
