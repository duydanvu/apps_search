@extends('index')

@section('content')
    <div class="content-wrapper">
<div>
    <table border="1">
        <thead>
        <tr>
            <th>No</th>
            <th>Locale</th>
            <th>Published</th>
            <th>Primary</th>
            <th>Publish</th>
            <th>Remove</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listlocales as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value['locale_name']}}</td>
            <td>{{$value['published']}}</td>
            <td>{{$value['primary']}}</td>
            <td><a href = "locale/remove/{{$value['id']}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"/>Remove</td>
            <td><a href = "{{asset('locale/publish/'.$value['id'])}}" onclick="return confirm('Bạn có chắc chắn muốn dùng?')"/>Publish</td>
        </tr>
       @endforeach
        </tbody>

    </table>
</div>

    </div>
@endsection


