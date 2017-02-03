@extends('wagonmain')

@section('content')
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h1 class="animated slideInDown"><i class="fa fa-cogs" aria-hidden="true"></i> Maintenance</h1>
        </div>
        <div class="col-md-2">

        </div>
      </div>
    </div>
  </header>

  <section id="breadcrumb" class="animated pulse">
    <div class="container">
      <ol class="breadcrumb animated fadeIn">
        <li><a href="{{ url('/maintenance') }}">Maintenance</a></li>
        <li class="active">Personnel</li>
      </ol>
    </div>
  </section>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group animated fadeIn">
            <a href="{{ url('/index') }}" class="list-group-item"><i class="fa fa-tasks" aria-hidden="true"></i> Dashboard</a>
            <a href="#" class="list-group-item active main-color-bg"><i class="fa fa-cogs" aria-hidden="true"></i> Maintenance</a>
            <a href="#" class="list-group-item"><i class="fa fa-bar-chart" aria-hidden="true"></i> Transactions</a>
            <a href="#" class="list-group-item"><i class="fa fa-file" aria-hidden="true"></i> Forms</a>
          </div>
          <div class="list-group animated fadeInDown">
            <a href="{{ url('/maintenance/client') }}" class="list-group-item"><i class="fa fa-suitcase" aria-hidden="true"></i> Client</a>
            <a href="{{ url('/maintenance/personnel') }}" class="list-group-item active main-color-bg"><i class="fa fa-male" aria-hidden="true"></i> Personnel</a>
            <a href="{{ url('/maintenance/services') }}" class="list-group-item"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Services</a>
            <a href="{{ url('/maintenance/vehicle') }}" class="list-group-item"><i class="fa fa-truck" aria-hidden="true"></i> Vehicle</a>
          </div>
        </div>

        <!--Modal-->
        <div class="modal fade" id="addPersonnel" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title">Add Personnel</h3>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="perID">Personnel ID</label>
                    <input type="text" class="form-control" id="perID" placeholder="SAMPLE001" disabled>
                  </div>
                  <div class="form-group">
                    <label for="perName">Name</label>
                    <input type="text" class="form-control" id="perName" placeholder="Sample Name">
                  </div>
                  <div class="form-group">
                    <label for="perPosition">Position</label>
                    <input type="text" class="form-control" id="perPosition" placeholder="Sample Position">
                  </div>
                  <div class="form-group">
                    <label for="perContact">Contact</label>
                    <input type="text" class="form-control" id="perContact" placeholder="Sample Contact">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                  </div>
                  <div class="btn-group btn-delete hidden" role="group">
                    <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                  </div>
                  <div class="btn-group" role="group">
                    <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-9">
          <div class="panel panel-default animated slideInRight">
            <div class="panel-heading">
              <h3 class="panel-title">Personnel Overview</h3>
            </div>
            <div class="panel-body">
              <table class="table table-hover table-responsive">
                <thead class="main-color-bg">
                  <tr>
                    <th>Personnel ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Contact</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">PERSONNEL001</th>
                    <td>Rico Sabilao</td>
                    <td>Driver</td>
                    <td>09235568467</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Details</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Update</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">PERSONNEL002</th>
                    <td>Jane Zamora</td>
                    <td>Technician</td>
                    <td>09758839485</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Details</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Update</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">PERSONNEL003</th>
                    <td>Albert Santos</td>
                    <td>Driver</td>
                    <td>09229485768</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Details</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Update</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">PERSONNEL004</th>
                    <td>Andrew Sebastian</td>
                    <td>Technician</td>
                    <td>09457837455</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Details</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Update</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="panel-footer">
              <button type="button" class="btn btn-sm main-color-bg" data-toggle="modal" data-target="#addPersonnel">Add Personnel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
