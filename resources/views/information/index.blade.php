@extends('layouts.app', ['page' => __('All Information'), 'pageSlug' => 'information'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> All Data Information</h4>
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
                <th>Type</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Korim</td>
                <td>abc@gmail.com</td>
                <td>+880 1689-385783</td>
                <td>35352342422</td>
                <td>10-jul-1970</td>
                <td>User</td>
              </tr>

              <tr>
                <td>Rohim</td>
                <td>xyz@gmail.com</td>
                <td>+880 1789-455783</td>
                <td>35365654645</td>
                <td>05-May-1970</td>
                <td>Agent</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
