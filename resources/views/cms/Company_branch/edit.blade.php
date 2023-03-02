@extends('cms.parent')

@section('title' , 'Company_branch')

@section('styles')
@endsection

@section('mainTitle','Edit Company_branch')

@section('subTitle','edit company_branch')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Company_branch</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Company_branch Name</label>
                      <input type="text" class="form-control" name = "Name" id="Name"
                      value="{{ $company_branchs->Name}}" placeholder="Enter Company_Son Name">
                    </div>
                    <div class="form-group">
                        <label for="street">Email</label>
                        <input type="text" class="form-control" name="Email" id="Email"
                        value="{{ $company_branchs->Email}}"placeholder="Enter Email">
                      </div>

                      <div class="form-group">
                          <label for="street">Password</label>
                          <input type="text" class="form-control" name="Password" id="Password"
                          value="{{ $company_branchs->Password}}" placeholder="Enter Password">
                        </div>

                        <div class="form-group">
                          <label for="Status">Status</label>
                          <input type="text" class="form-control" name="Status" id="Status"
                          value="{{ $company_branchs->Status}}" placeholder="Enter Status">
                        </div>

                        <div class="form-group">
                          <label for="Description">Description</label>
                          <input type="text" class="form-control" name="Description" id="Description"
                          value="{{ $company_branchs->Description}}" placeholder="Enter description">
                        </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" onclick="performUpdate({{ $company_sons->id }})" class="btn btn-primary">Update</button>
                    <a href="{{ route('company_branchs.index') }}" type="button" class="btn btn-dark">Go To Index</a>
                </div>
                </form>
              </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
    function performUpdate(id){
        let formData = new FormData();
        formData.append('Name' ,document.getElementById('Name').value);
        formData.append('Email' ,document.getElementById('Email').value);
        formData.append('Password' ,document.getElementById('Password').value);
        formData.append('Status' ,document.getElementById('Status').value);
        formData.append('Description' ,document.getElementById('Description').value);
        storeRoute('/cms/admin/company_branchs_update/'+ id, formData);

    }
    </script>

@endsection
