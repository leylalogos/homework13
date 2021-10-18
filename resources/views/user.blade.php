@extends('layout.admin')
@section('content')
<table class="table">
<th>نام</th>
<th>موبایل</th>
<th>ایمیل</th>
@foreach ($users as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->mobile}}</td>
    <td>{{$user->email}}</td>
</tr>
@endforeach
</table>

@stop