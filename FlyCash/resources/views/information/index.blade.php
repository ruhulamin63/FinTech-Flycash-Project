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
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th >Phone</th>
                <th>NID</th>
                <th>DOB</th>
                <th>Type</th>
              </tr>
            </thead>
            <tbody>

            @foreach($userlist as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->ind}}</td>
                <td>{{$user->dob}}</td>
                <td>{{$user->type}}</td>

                <td>
                    <a href="/informaiton/details/{{$user->id}}">Details</a> | 
                    <a href="/user/delete/{{$user->id}}">Delete</a> 

                  <a href="/informaiton/details/{{$user->id}}">
                      <i class="tim-icons icon-pencil"></i>
                        Edit
                  </a> | 
                  <a href="/informaiton/delete/{{$user->id}}">
                    <i class="tim-icons icon-trash-simple"></i>
                      delete
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
