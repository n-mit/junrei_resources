@extends('layout/layout')
@section('contents')

<br>

<div class="text-center">
    <h2>ユーザー情報の編集内容確認</h2>
</div>

<br>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-ms-12 col-xs-12">
            <div class="mx-auto" style="width:70%">
                <form method="post" action="{{url('/user_edit_done', $data->id)}}">
                {{csrf_field()}}
                {{method_field('patch')}}
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td>Name</td><td>{{$name}}</td>
                            <input type="hidden" name="name" value="{{$name}}">
                        </tr>
                        <tr>
                            <td>Email</td><td>{{$mail_address}}</td>
                            <input type="hidden" name="mail_address" value="{{$mail_address}}">
                        </tr>
                        <tr>
                            <td>Password</td><td>{{$password}}</td>
                            <input type="hidden" name="password" value="{{$password}}">
                        </tr>
                    </table>
                    <br>
                    <div>
                        <input type="submit" value="登録" class="btn-primary btn-lg" style="width:100%">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br><br>

@endsection