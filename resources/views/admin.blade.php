@extends('layouts.app2')
@section('content')
@section('title', "コンビニ管理マイページ")
<body>
    <header>
        @include('header.staff.staffmypage_header')
    </header>
<div class="c-mypagemenu">
<h1 class="c-mypagemenu__title"> {{$admin->name}}様専用メニュー
</h1>

</div>

<div id="app">
{{-- コンポーネント部分 --}}
<staffmypage-componennt></staffmypage-componennt>
<staffmypagebought-componennt></staffmypagebought-componennt>
<footer-component></footer-component>
</div>
</body>
@endsection

