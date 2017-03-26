@extends('layouts.app')
@section('content');
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-heading">Login Form</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="/chklogin" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-4">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email"  id="txtemail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-4">
                            <input type="password"  name="password" class="form-control" id="txtpassword" placeholder="Enter Password" />                    
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-default col-sm-offset-2">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
