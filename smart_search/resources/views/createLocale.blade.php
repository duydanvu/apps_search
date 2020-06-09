@extends('index')

@section('content')
    <div class="content-wrapper">
    <div class="formCreateLocale" >
        <div class="head"><a>Create Locale</a></div>
            <form method="post" name="postLocaleForm" action="{{route('postLocales')}}">
                {{csrf_field()}}
                <table>
                    <thead>
                    <tr>
                        <th>Locale Name: </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <select name="txtNameLocale">
                                @foreach($data as $value)
                                    <option value="{{$value->isoCode}}">{{$value->isoCode}} - {{$value->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->any())
                                <h4>{{$errors->first()}}</h4>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="txtSubmit" value="Submit" />
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </div>
@endsection
