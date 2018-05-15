@extends('layouts.admin')




@section('content')


    <h1>Create Users</h1>


    


  

        <form role="form" method="POST" action="admin/users"> 
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="form-horizontal">

        <h4>User</h4>
        <hr>
        

        <div class="form-group">
            <label class="control-label col-md-2" for="name">Name:</label>
            <div class="col-md-10">
                <input class="text-box single-line" name="name" type="text" value="">
                <!-- <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span> -->
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="name">Email:</label>
            <div class="col-md-10">
                <input class="text-box single-line" name="email" type="text" value="">
                <!-- <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span> -->
            </div>
        </div>

          <div class="form-group">
            <label class="control-label col-md-2" for="name">Password:</label>
            <div class="col-md-10">
                <input class="text-box single-line" name="password" type="text" value="">
                <!-- <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span> -->
            </div>
        </div>


    
  
    </div>

     <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Add" class="btn btn-primary">
            </div>
        </div>
</form>
  



 @stop