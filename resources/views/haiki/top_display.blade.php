@extends('layouts.app')
@section('content')

@php
//一言メモ logの出力先は/storage/logs/laravel.logで見れる
    logger('トップページに遷移しました')
    @endphp

@endsection