@extends('wagonmain')

@section('content')
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h1 class="animated slideInDown"><i class="fa fa-tasks" aria-hidden="true"></i> Dashboard</h1>
        </div>
        <div class="col-md-2">

        </div>
      </div>
    </div>
  </header>

  <section id="breadcrumb" class="animated pulse">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active animated fadeIn">Dashboard</li>
      </ol>
    </div>
  </section>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group animated fadeIn">
            <a href="#" class="list-group-item active main-color-bg animated">
              <i class="fa fa-tasks" aria-hidden="true"></i> Dashboard
            </a>
            <a href="{{ url('maintenance/client') }}" class="list-group-item"><i class="fa fa-cogs" aria-hidden="true"></i> Maintenance</a>
            <a href="#" class="list-group-item"><i class="fa fa-bar-chart" aria-hidden="true"></i> Transactions</a>
            <a href="#" class="list-group-item"><i class="fa fa-file" aria-hidden="true"></i> Forms</a>
          </div>
          <div class="well animated slideInDown">
            <h4>Disk Space Used</h4>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                60%
              </div>
            </div>
            <h4>Bandwidth Used</h4>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                35%
              </div>
            </div>
          </div>
        </div>
          <div class="col-md-9 animated slideInRight">
            <!--Website Overview-->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website and System Overview</h3>
              </div>
              <div class="panel-body">
                <div class = "col-md-3">
                  <div class="well dash-box">
                    <h2><span class="fa fa-users" aria-hidden="true"></span> 203</h2>
                    <h4>Clients</h4>
                  </div>
                </div>
                <div class = "col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 55</h2>
                    <h4>Inquiries</h4>
                  </div>
                </div>
                <div class = "col-md-3">
                  <div class="well dash-box">
                    <h2><span class="fa fa-user" aria-hidden="true"></span> 34</h2>
                    <h4>Users</h4>
                  </div>
                </div>
                <div class = "col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 11,236</h2>
                    <h4>Visitors</h4>
                  </div>
                </div>
              </div>
            </div>

            <!--Latest Users-->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Latest Users</h3>
              </div>
              <div class="panel-body">
                <table class="table table-hover table-responsive">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Name</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">USER001</th>
                      <td>Carlo Carpio</td>
                      <td>01/30/17</td>
                    </tr>
                    <tr>
                      <th scope="row">USER002</th>
                      <td>Carla Fernandez</td>
                      <td>01/16/17</td>
                    </tr>
                    <tr>
                      <th scope="row">USER002</th>
                      <td>Camille Gomez</td>
                      <td>12/16/17</td>
                    </tr>
                    <tr>
                      <th scope="row">USER002</th>
                      <td>Joseph Oscar</td>
                      <td>11/4/16</td>
                    </tr>
                    <tr>
                      <th scope="row">USER002</th>
                      <td>Anne Mendiola</td>
                      <td>10/14/16</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
