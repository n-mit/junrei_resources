@extends('layout.common')

@section('title', 'パスワード変更')
@section('type', 'website')
@section('description', 'パスワード変更')
@section('pageCss')
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')

<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <h2>パスワード変更確認画面</h2>
        </div>
        <form method="post" action="{{url('/pass_edit_done', $user->admin_id)}}" class="form-horizontal">
        {{csrf_field()}}
            <div class="form-group">
                <label>新しいパスワード</label>{{$new_pass}}
                <input type="password" name="new_pass" value="{{$new_pass}}" class="form-control" readonly>
            </div>
            <br>
            <input type="submit" value="変更" class="btn-lg">
        </form>
    </div>
</div>

<br><br>

@endsection

@include('layout.footer')

