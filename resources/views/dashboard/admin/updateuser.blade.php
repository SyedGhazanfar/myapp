@extends('layout.dashboard')
@section('content-dashboard')  

<form action="/updateuser" method="POST">
<div class="container mt-5">
    @csrf
    <input type="text" hidden name="user_id" value="{{$item['user_id']}}">
    <div class="form-group">
        <label for="">Enter User Name</label>
        <input type="text" required
          class="form-control" name="user_name" value="{{$item['user_name']}}">
      </div>
      
      <div class="form-group">
          <label for="">Enter User Email</label>
          <input type="email" required
            class="form-control" name="user_email" id="" value="{{$item['user_email']}}">
        </div>
      
        <div class="form-group">
          <label for="">Enter User Role</label>
          <select class="form-control" name="user_roles" required>
            <option hidden>{{$item['user_roles']}}</option>
            <option value="Admin">Admin</option>
            <option value="Accountant">Accountant</option>
            <option value="HR">HR</option>
          </select>
        </div>
  
      <div class="form-group">
        <label for="">Enter User Password</label>
        <input type="password" required
          class="form-control" name="user_password" id="">
      </div>
       
      <div class="form-group">
        <label for="">Enter Phone Number</label>
        <input type="text" required
          class="form-control" name="user_phone" id="" value="{{$item['user_phone']}}">
      </div>

      <button type="submit" class="btn btn-danger btn-block">Submit</button>
          
</div>
</form>
@endsection