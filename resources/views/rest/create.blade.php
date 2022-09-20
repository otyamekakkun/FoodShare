@extends('layouts.app2')

@section('content')
    {{-- 
        データベースが絡む処理はここに記述するのかな
        --}}
<form action="/rest" method="post">
<table>
    @csrf
    <tr>
        <th>
            コンチャーすレトルトともう島σーーーーすmessage:
        </th>
        <td>
            <input type="text" name="message" value="{{old('message')}}">
        </td>
    </tr>

    <tr>
        <th>
            url:
        </th>
        <td>
            <input type="text" name="url" value="{{old('url')}}">
        </td>
    </tr>

    <th>
    
    </th>
    <td>
        <input type="submit"  value="send">
    </td>
</tr>

</table>
</form>





@endsection