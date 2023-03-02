@extends('cms.parent')

@section('title' , 'Company_branch')

@section('styles')
@endsection

@section('mainTitle','Show Company_branch')

@section('subTitle','show company_branch')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Show Company_branch</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body ">
                    <div class="form-group ">
                      <label for="name">Company_branch Name</label>
                      <input
                      value="{{ $company_sons->Name}}" class="form-control form-control-solid" disabled>
                    </div>
                    <div class="form-group ">
                        <label for="street">Email</label>
                        <input
                        value="{{ $company_branch->Email}}" class="form-control form-control-solid" disabled>
                      </div>

                      <div class="form-group">
                          <label for="street">Password</label>
                          <input
                          value="{{ $company_branchs->Password}}" class="form-control form-control-solid" disabled>
                        </div>

                        <div class="form-group">
                          <label for="street">Status</label>
                          <input
                          value="{{ $company_branchs->Status}}" class="form-control form-control-solid" disabled>
                        </div>

                        <div class="form-group">
                          <label for="street">Description</label>
                          <input
                          value="{{ $company_branchs->Description}}" class="form-control form-control-solid" disabled>
                        </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    {{-- <button type="submit" onclick="performUpdate({{ $companies->id }})" class="btn btn-primary">Update</button> --}}
                    <a href="{{ route('company_branchs.index') }}" type="button" class="btn btn-dark">Go To Index</a>
                </div>
                </form>
              </div>
        </div>
    </div>
</div>

@endsection

@section('script')


@endsection
