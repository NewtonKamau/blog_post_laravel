@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')
<div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">SimpleWork</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{Request::path()=== '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
                    <li class="{{Request::path()=== 'clients' ? 'current_page_item' : ''}}"><a href="clients" accesskey="2" title="">Our Clients</a></li>
                    <li class="{{Request::path()=== 'about' ? 'current_page_item' : ''}}"><a href="about" accesskey="3" title="">About Us</a></li>
                    <li class="{{Request::path()=== 'articles' ? 'current_page_item' : ''}}"><a href="articles" accesskey="4" title="">Articles</a></li>
                    <li class="{{Request::path()=== 'contact' ? 'current_page_item' : ''}}"><a href="/contact" accesskey="5" title="">Contact Us</a></li>
                </ul>
            </div>
        </div>
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>
        <form method="POST" action="/articles">
          @crsf
            <div class="field">
                <div class="label" for="title">Title</div>
                <div class="control">
                    <input  class="input" {{$errors->has('title')? 'is-danger' : ''}}
                    type="text"
                    name="title"
                     id="title"
                     value="{{ old('title')}}">
                     
                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="except">Except</label>
                <div class="control">
                    <textarea class="textarea" name="except" id="except"></textarea>
                </div>
            </div>
             <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <textarea class="textarea" name="body" id="body"></textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-text">submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
