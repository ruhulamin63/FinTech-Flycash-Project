@extends('layouts.app', ['page' => __('Agent Details'), 'pageSlug' => 'agentdetails'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Agent Details Information</h4>
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
                <td>Rohim</td>
                <td>abc@gmail.com</td>
                <td>+880 1689-385783</td>
                <td>35352342422</td>
                <td>10-jul-1970</td>
                
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
