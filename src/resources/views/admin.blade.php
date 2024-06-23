@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('button')
<form action="{{ route('logout') }}" method="POST">
@csrf
    <button class="header__button-submit" type="submit">logout</button>
</form>
@endsection

@section('content')
<div class="admin__content">
  <div class="admin__heading">
    <h2>Admin</h2>
  </div>
  <div class="admin__search-form">
    <form class="search-form__content" action="find" method="get">
    @csrf
      <div class="search-form__item">
        <input class="search-form__item-input" name="" type="text" value="" placeholder="名前やメールアドレスを入力して下さい"/>
        <select class="search-form__item-select">
          <option value="" selected>性別</option>
          <option value="">全て</option>
          <option value="">男性</option>
          <option value="">女性</option>
          <option value="">その他</option>
        </select>
        <select class="search-form__item-select">
          <option value="" selected>お問い合わせの種類</option>
          <option value="">商品のお届けについて</option>
          <option value="">商品の交換について</option>
          <option value="">商品トラブル</option>
          <option value="">ショップへのお問い合わせ</option>
          <option value="">その他</option>
        </select>
        <input class="search-form__item-select" type="date" value=""></input>
        <button class="search-form__button-submit" type="submit">検索</button>
        <button class="search-form__button-reset" type="reset">リセット</button>
      </div>
    </form>
  </div>
  <div class="admin__navigation">
    <div class="navigation__content">
      <button class="navigation__button-export" type="">エクスポート</button>
      <div class="navigation__pagination">
        <p>{{ $contacts->links() }}</p>
      </div>
    </div>
  </div>
  <div class="admin__table">
    <table class="Table">
      <thead class="Table-Head">
      <tr class="Table-Head-Row">
          <th class="Table-Head-Row-Cell">お名前</th>
          <th class="Table-Head-Row-Cell">性別</th>
          <th class="Table-Head-Row-Cell">メールアドレス</th>
          <th class="Table-Head-Row-Cell">お問い合わせの種類</th>
          <th class="Table-Head-Row-Cell"></th>
      </tr>
      </thead>
      <tbody class="Table-Body">
      @foreach($contacts as $contact)
        <tr class="Table-Body-Row">
          <td class="Table-Body-Row-Cell">{{$contact->last_name}} {{$contact->first_name}}</td>
          <td class="Table-Body-Row-Cell">
            @php
              switch($contact['gender']){
                  case "1":
                  echo "男性";
                  break;
                  case "2":
                  echo "女性";
                  break;
                  case "3":
                  echo "その他";
                  break;
              }
            @endphp</td>
          <td class="Table-Body-Row-Cell">{{$contact->email}}</td>
          <td class="Table-Body-Row-Cell">{{$contact->getTitle()}}</td>
          <td class="Table-Body-Row-Cell">
            <button class="open-button" popovertarget="my-popover" popovertargetaction="show">詳細</button>
            <div id="my-popover" popover>
                <div class="modal-table">
                  <table class="modal-table__inner">
                    <tr class="modal-table__row">
                      <th class="modal-table__header">お名前</th>
                      <td class="modal-table__text">
                        <p>{{ $contact['last_name'] }}</p>
                        <p>{{ $contact['first_name'] }}</p>
                      </td>
                    </tr>
                    <tr class="modal-table__row">
                      <th class="modal-table__header">性別</th>
                      <td class="modal-table__text">
                        <p>
                          @php
                          switch($contact['gender']){
                              case "1":
                              echo "男性";
                              break;
                              case "2":
                              echo "女性";
                              break;
                              case "3":
                              echo "その他";
                              break;
                          }
                          @endphp
                        </p>
                      </td>
                    </tr>
                    <tr class="modal-table__row">
                      <th class="modal-table__header">メールアドレス</th>
                      <td class="modal-table__text">
                        <p>{{ $contact['email'] }}</p>
                      </td>
                    </tr>
                    <tr class="modal-table__row">
                      <th class="modal-table__header">電話番号</th>
                      <td class="modal-table__text">
                        <p>{{ $contact['tell1'] }}{{ $contact['tell2'] }}{{ $contact['tell3'] }}</p>
                      </td>
                    </tr>
                    <tr class="modal-table__row">
                      <th class="modal-table__header">住所</th>
                      <td class="modal-table__text">
                        <p>{{ $contact['address'] }}</p>
                      </td>
                    </tr>
                    <tr class="modal-table__row">
                      <th class="modal-table__header">建物名</th>
                      <td class="modal-table__text">
                        <p>{{ $contact['building'] }}</p>
                      </td>
                    </tr>
                    <tr class="modal-table__row">
                      <th class="modal-table__header">お問い合わせの種類</th>
                      <td class="modal-table__text">
                        <p>{{$contact->getTitle()}}</p>
                      </td>
                    </tr>
                    <tr class="modal-table__row">
                      <th class="modal-table__header">お問い合わせ内容</th>
                      <td class="modal-table__text">
                        <p>{!! nl2br(e($contact['detail'])) !!}</p>
                      </td>
                    </tr>
                  </table>
                </div>
                <form class="delete-form" action="/contacts/delete" method="POST">
                  @method('DELETE')
                  @csrf
                    <div class="delete-form__button">
                      <input type="hidden" name="id" value="{{ $contact['id'] }}">
                      <button class="delete-form__button-submit" type="submit">削除</button>
                    </div>
                </form>
              <button popovertarget="my-popover" popovertargetaction="hide" class="close-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M0 0h24v24H0z" fill="none" />
                  <path d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59 7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12 5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
                </svg>
              </button>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection