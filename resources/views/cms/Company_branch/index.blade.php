@extends('cms.parent')

@section('title' , 'Company_branch')

@section('mainTitle','Index Company_branch')

@section('subTitle','index company_branch')

@section('styles')
@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('company_branchs.create') }}" type="button" class="btn btn-info">Add New Company_branch</a>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th> Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
                <th>Description</th>
                <th>company_id</th>
                <th>Setting</th>
              </tr>
            </thead>
            <tbody>


                @foreach ($company_branchs as $company_branch)
                <tr>
                    <td>{{ $company_son->id }}</td>
                    <td>{{ $company_son->Name }}</td>
                    <td>{{ $company_son->Email }}</td>
                    <td>{{ $company_son->Password }}</td>
                    <td>{{ $company_son->Status }}</td>
                    <td>{{ $company_son->Description }}</td>
                    <td>{{ $company_son->company ? $company_branch->company->Name: "notValue" }}</td>


                    <td>

                        <div class="btn-group">
                            <a href="{{ route('company_branchs.edit' , $company_branch->id) }}" type="button" class="btn btn-info">Edit</a>
                            <a href="#" onclick="performDestroy({{ $company_branch->id}},this)" class="btn btn-danger">Delete</a>
                            <a  href="{{ route('company_branchs.show' , $company_branch->id) }}" type="button" class="btn btn-success">Show</a>
                          </div>

                    </td>
                  </tr>


                @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection

@section('script')

<script>
    function performDestroy(id , referance){
        let url = '/cms/admin/company_branchs/' + id ;
        confirmDestroy(url , referance);
    }
</script>

@endsection
