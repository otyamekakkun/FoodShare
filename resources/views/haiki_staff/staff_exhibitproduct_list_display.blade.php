@extends('layouts.app2')
@section('content')


<body>
    <header>
        @include('rest.staff.header')
    </header>

<h1>
    出品した商品一覧
</h1>
<div id="app">
    <admin-component></admin-component>



<footer-component></footer-component>
</div>
</body>
@endsection


