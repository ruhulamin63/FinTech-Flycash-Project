@extends('layouts.app', ['page' => __('User Details'), 'pageSlug' => 'userdetails'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> User Details Information</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th >Phone</th>
                <th>NID</th>
                <th>DOB</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ruhul Amin</td>
                <td>raridoy101@gmail.com</td>
                <td>+880 1689-385783</td>
                <td>1998535353</td>
                <td>05-jul-1998</td>

                <td>
                  <a href="#">
                    <i class="tim-icons icon-trash-simple"></i>
                      delete
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
