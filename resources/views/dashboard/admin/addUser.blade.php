@extends('layout.dashboard')
@section('content-dashboard')  
<form action="adduser" method="POST">
<div class="container mt-5">
    @csrf
    <div class="form-group">
        <label for="">Enter User Name</label>
        <input type="text" required
          class="form-control" name="user_name" aria-describedby="helpId" placeholder="">
      </div>
      
      <div class="form-group">
          <label for="">Enter User Email</label>
          <input type="email" required
            class="form-control" name="user_email" id="" aria-describedby="helpId" placeholder="">
        </div>
      
        <div class="form-group">
          <label for="">Enter User Role</label>
          <select class="form-control" name="user_roles" required>
            <option hidden>User Role</option>
            <option value="Admin">Admin</option>
            <option value="Accountant">Accountant</option>
            <option value="HR">HR</option>
          </select>
        </div>
  
      <div class="form-group">
        <label for="">Enter User Password</label>
        <input type="password" required
          class="form-control" name="user_password" id="" aria-describedby="helpId" placeholder="">
      </div>
       
      <div class="form-group">
        <label for="">Enter Phone Number</label>
        <input type="text" required
          class="form-control" name="user_phone" id="" aria-describedby="helpId" placeholder="">
      </div>

      <button type="submit" class="btn btn-danger btn-block">Submit</button>
          
</div>
</form>
@endsection