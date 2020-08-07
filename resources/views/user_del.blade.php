@extends('layout/layout')
@section('contents')

<br>

<div class="text-center">
    <h2>ユーザー情報の削除</h2>
</div>

<br>

<div class="container">
	<div class="row">
		<div class="mx-auto">
			<div class="col-md-12 col-ms-12 col-xs-12 text-center">
				<p>選択したユーザーを本当に削除してもよろしいですか？</p>
			</div>
			<br>
			<form method="post" action="{{url('/user_del_done', $data->id)}}">
            {{csrf_field()}}
			{{method_field('delete')}}
				<div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
					<input type="submit" value="削除" class="btn-danger btn-lg">
				</div>
			</form>
			<div class="col-md-12 col-ms-12 col-xs-12 text-center">
				<hr class="my-5">
			</div>
			<div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
				<a href="/user_list" class="btn-primary btn-lg">ユーザー一覧に戻る</a>
			</div>
		</div>
	</div>
</div>

<br><br><br>

@endsection