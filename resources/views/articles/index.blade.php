@extends('layout')

@section('content')
    <div id="wrapper">
            <div id="page" class="container">
               @foreach($article as $article)
                    <div class="content">
                        <div class="title">
                            <h3>
                            <a  href="{{ route('articles.show', $article)}}">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            <p>
                          <img src="images/banner.jpg" alt="" class="image image-full">
                            </p>
                       {{$article->body}}
                        </div>
                        @endforeach
                    </div>
             </div>
    </div>
@endsection
