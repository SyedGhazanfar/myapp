@extends('layout.dashboard')
@section('content-dashboard')  
<div class="container mt-4">
    <table class="table table-striped table-bordered table-sm-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Role</th>
                <th>User Phone</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item['user_name']}}</td>
                    <td>{{$item['user_email']}}</td>
                    <td>{{$item['user_roles']}}</td>
                    <td>{{$item['user_phone']}}</td>
                    <td>
                        <a href="{{"useredit/".$item['user_id']}}">Edit</a> | <a href="{{"userdelete/".$item['user_id']}}">Delete</a>
                    </td>

                </tr>
                @endforeach

            </tbody>
    </table>
</div>
@endsection