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
                <th">NID</th>
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
                    <a href="/informaiton/details/{{$user->id}}">
                      <i class="tim-icons icon-pencil"></i>
                        Edit
                    </a> |
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
  <!-- <div class="col-md-12">
    <div class="card  card-plain">
      <div class="card-header">
        <h4 class="card-title"> Table on Plain Background</h4>
        <p class="category"> Here is a subtitle for this table</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Country
                </th>
                <th>
                  City
                </th>
                <th class="text-center">
                  Salary
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Dakota Rice
                </td>
                <td>
                  Niger
                </td>
                <td>
                  Oud-Turnhout
                </td>
                <td class="text-center">
                  $36,738
                </td>
              </tr>
              <tr>
                <td>
                  Minerva Hooper
                </td>
                <td>
                  Curaçao
                </td>
                <td>
                  Sinaai-Waas
                </td>
                <td class="text-center">
                  $23,789
                </td>
              </tr>
              <tr>
                <td>
                  Sage Rodriguez
                </td>
                <td>
                  Netherlands
                </td>
                <td>
                  Baileux
                </td>
                <td class="text-center">
                  $56,142
                </td>
              </tr>
              <tr>
                <td>
                  Philip Chaney
                </td>
                <td>
                  Korea, South
                </td>
                <td>
                  Overland Park
                </td>
                <td class="text-center">
                  $38,735
                </td>
              </tr>
              <tr>
                <td>
                  Doris Greene
                </td>
                <td>
                  Malawi
                </td>
                <td>
                  Feldkirchen in Kärnten
                </td>
                <td class="text-center">
                  $63,542
                </td>
              </tr>
              <tr>
                <td>
                  Mason Porter
                </td>
                <td>
                  Chile
                </td>
                <td>
                  Gloucester
                </td>
                <td class="text-center">
                  $78,615
                </td>
              </tr>
              <tr>
                <td>
                  Jon Porter
                </td>
                <td>
                  Portugal
                </td>
                <td>
                  Gloucester
                </td>
                <td class="text-center">
                  $98,615
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> -->
</div>
@endsection
