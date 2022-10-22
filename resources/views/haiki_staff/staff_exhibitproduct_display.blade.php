@extends('layouts.app2')
@section('content')
<body>
    {{-- ヘッダー部分 --}}
    <header>
        @include('header.staff.staff_header')
    </header>
    


@include('common.productcreate');







<footer-component></footer-component>
</div>
</body>
@endsection