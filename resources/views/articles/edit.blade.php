@extends('app')

@section('title', '記事一覧')

@include('nav')

@section('content')

<div class="continer">
  <div class="row">
    <div class="col-12">
      <div class="card mt-3">
        <div class="card-body pt-0">
          @include('error_card_list')
          <div class="card-text">
            <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
              @method('PATCH')
              @include('articles.form')
              <button type="submit" class="btn blue-gradient btn-block">更新する</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
