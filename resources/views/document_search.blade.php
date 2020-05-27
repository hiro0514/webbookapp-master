@extends('layouts.form')

@section('title','資料検索画面')

@section('content')
{{--検索--}}
<form action="/document_search_result" method="post">
  @csrf
  <p>検索したい資料名を入力してください。</p>
  <input type="search" name="catalog_name" placeholder="資料名を入力">
  <input type="submit" value="検索" name="search_button" class="next_button">
 <br>
  @error('catalog_name')
  <span class="errorMsg">{{$message}}</span>
  @enderror
  @error('no_catalog_name')
  <span class="errorMsg">{{$message}}</span>
  @enderror
  </br>
</form>

{{--戻るボタン--}}
  <p><button type="button" class="back_button" name="return_button" onclick="location.href='./after_login_top'">戻る</button></p>

@endsection


<!-- @csrf
 <p><input type="text" name="user_email" required>
 <input type="submit" class="next_button" value="検索"></p>
@error('user_email')
 <span class="errorMsg">{{$message}}</span>
@enderror
@error('no_user_email')
 <span class="errorMsg">{{$message}}</span>
@enderror -->
