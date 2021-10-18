@extends('layout.admin')
@section('content')
<table class="table">
<th>عنوان</th>
<th>محتوا</th>
@foreach ($posts as $post)
<tr>
    <td>{{$post->title}}</td>
    <td>{{$post->content}}</td>
</tr>
@endforeach
</table>
{{ $posts->links() }}
@stop