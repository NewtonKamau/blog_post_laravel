@extends
('layout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Update Articl</h1>
    <form method="POST" action="/articles/{{$article->id}}">
           @crsf
            @method('PUT')
            <div class="field">
                <div class="label" for="title">Title</div>
                <div class="control">
                <input  class="input" type="text" name="title" id="title" value="{{$article->title}}">
                </div>
            </div>
            <div class="field">
                <label class="label" for="except">Except</label>
                <div class="control">
                <textarea class="textarea" name="except" id="except">{{$article->except}}</textarea>
                </div>
            </div>
             <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <textarea class="textarea" name="body" id="body">$article->body</textarea>
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
