@section('content')
    <table>
    <tr><th>id</th><th>氏名</th><th>生年月日</th><th>年齢</th><th>出身</th></tr>
    @foreach ($item as $item)
        <tr>
            <td>{{$item->ID}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->birthday}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->birthplace}}</td>
        </tr>
    @endforeach
    </table>
@endsection