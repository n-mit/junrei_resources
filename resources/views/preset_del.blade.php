@extends('layout/layout')
@section('contents')

<br>

<div class="text-center">
    <h2>プリセットの削除</h2>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="mx-auto">
            <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <p>選択したプリセットを本当に削除してもよろしいですか？</p>
            </div>
            <br>
            <form method="post" action="{{url('/preset_del_done', $data->id)}}">
            {{csrf_field()}}
            {{method_field('delete')}}
                <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
                    <input type="submit" value="削除" class="btn-danger btn-lg">
                </div>
            </form>
            
            <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
                <a href="/preset_list" class="btn-primary btn-lg">プリセット一覧に戻る</a>
            </div>
        </div>
    </div>
</div>



@endsection