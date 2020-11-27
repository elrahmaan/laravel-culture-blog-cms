@extends('layouts.app')

@section('title', 'Edit - Indonesian Cultures Blog')

@section('content')
<main class="py-5">
    <div class="container">
        <h2>Edit Artikel</h2>
        @foreach ($users as $user)
        @if($cultures->user_id == $user->id)
        <form action="/article/update/{{$cultures->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$cultures->id}}"></br>
            <div class="form-group">
                <label for="intro">Intro</label>
                <textarea class="form-control" required="required" name="intro">{{$cultures->intro}}</textarea></br>
            </div>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" required="required" name="title" value="{{$cultures->title}}"></br>
            </div>
            <div class="form-group">
                <label for="featured_image">Feature Image</label>
                <input type="file" class="form-control" required="required" name="featured_image" value="{{$cultures->featured_image}}"></br>
                <img width="150px" src="{{asset('storage/'.$cultures->featured_image)}}">
            </div>
            <div class="form-group">
                <label for="paragraph1">Paragraph 1</label>
                <textarea class="form-control" required="required" name="paragraph1">{{$cultures->paragraph1}}</textarea></br>
            </div>
            <div class="form-group">
                <label for="paragraph2">Paragraph 2</label>
                <textarea class="form-control" required="required" name="paragraph2">{{$cultures->paragraph2}}</textarea></br>
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <input type="text" class="form-control" required="required" name="category" value="{{$cultures->category}}"></br>
            </div>
            <div class="form-group">
                <label for="user_id">ID for Author (ID User)</label>
                <input type="text" class="form-control" required="required" name="user_id" value="{{$user->id}}"></br>
                <input type="text" class="form-control" value="{{$user->name}}" disabled>
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
        </form>
        @endif
        @endforeach
    </div>
</main>
@endsection