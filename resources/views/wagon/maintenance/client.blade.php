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
        <li class="active">Client</li>
      </ol>
    </div>
  </section>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group animated fadeIn">
            <a href="{{ url('/index') }}" class="list-group-item"><i class="fa fa-tasks" aria-hidden="true"></i> Dashboard</a>
            <a href="{{ url('/maintenance/client') }}" class="list-group-item active main-color-bg"><i class="fa fa-cogs" aria-hidden="true"></i> Maintenance</a>
            <a href="#" class="list-group-item"><i class="fa fa-bar-chart" aria-hidden="true"></i> Transactions</a>
            <a href="#" class="list-group-item"><i class="fa fa-file" aria-hidden="true"></i> Forms</a>
          </div>
          <div class="list-group animated fadeInDown">
            <a href="{{ url('/maintenance/client') }}" class="list-group-item active main-color-bg"><i class="fa fa-suitcase" aria-hidden="true"></i> Client</a>
            <a href="{{ url('/maintenance/personnel') }}" class="list-group-item"><i class="fa fa-male" aria-hidden="true"></i> Personnel</a>
            <a href="{{ url('maintenance/services') }}" class="list-group-item"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Services</a>
            <a href="{{ url('maintenance/vehicle') }}" class="list-group-item"><i class="fa fa-truck" aria-hidden="true"></i> Vehicle</a>
          </div>
        </div>

        <!--Modal-->
        <div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
          	<div class="modal-content">
          		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          			<h3 class="modal-title">Add Client</h3>
          		</div>
          		<div class="modal-body">
          			<form>
                  <div class="form-group">
                    <label for="companyID">Company ID</label>
                    <input type="text" class="form-control" id="companyID" placeholder="SAMPLE001" disabled>
                  </div>
                  <div class="form-group">
                    <label for="companyName">Company Name</label>
                    <input type="text" class="form-control" id="companyName" placeholder="Sample Incorporated">
                  </div>
                  <div class="form-group">
                    <label for="companyAddress">Company Address</label>
                    <input type="text" class="form-control" id="companyAddress" placeholder="Sample Address">
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
              <h3 class="panel-title">Client Overview</h3>
            </div>
            <div class="panel-body">
              <table class="table table-hover table-responsive">
                <thead class="main-color-bg">
                  <tr>
                    <th class="text-center">Client ID</th>
                    <th class="text-center">Company Name</th>
                    <th class="text-center">Contact Person</th>
                    <th class="text-center">Contact</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <th scope="row">CLIENT001</th>
                    <td>Company Enterprise</td>
                    <td>Tyron delos Reyes</td>
                    <td>614-5481</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Details</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Update</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">CLIENT002</th>
                    <td>Company Association</td>
                    <td>Xandra Subiera</td>
                    <td>614-5482</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Details</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Update</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">CLIENT003</th>
                    <td>Company Incorporated</td>
                    <td>Wandy Beby</td>
                    <td>614-5483</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Details</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Update</button>
                      <button type="button" class="btn btn-sm btn-space main-color-bg">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">CLIENT004</th>
                    <td>Company Inc.</td>
                    <td>Nards Paragas</td>
                    <td>614-5484</td>
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
              <button type="button" class="btn btn-sm btn-space main-color-bg" data-toggle="modal" data-target="#addClient">Add Client</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
