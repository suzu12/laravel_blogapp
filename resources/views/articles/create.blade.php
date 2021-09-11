@extends('app')

@section('title', '記事投稿')

@include('nav')

@section('content')

<div class="continer">
  <div class="row">
    <div class="col-12">
      <div class="card mt-3">
        <div class="card-body pr-0">
          @include('error_card_list')
          <div class="card-text">
            <form method="POST" action="{{ route('articles.store') }}">
              @include('articles.form')
              <button type="submit" class="btn blue-grediend btn-block">投稿する</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
