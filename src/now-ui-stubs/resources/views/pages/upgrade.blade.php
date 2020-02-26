@extends('layouts.app', [
    'namePage' => 'Upgrade TO pro',
    'class' => 'sidebar-mini',
    'activePage' => 'upgrade',
  ])
  
@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="card card-upgrade">
          <div class="card-header text-center">
            <h4 class="card-title">Now UI Dashboard FREE</h3>
              <p class="card-category">Are you looking for more components? Please check our Premium Version of Now UI Dashboard PRO.</p>
          </div>
          <div class="card-body">
            <div class="table-responsive table-upgrade">
              <table class="table">
                <thead>
                  <th></th>
                  <th class="text-center">Free</th>
                  <th class="text-center">PRO</th>
                </thead>
                <tbody>
                    <tr>
                        <td><h3 class="text-primary mb-0 mt-3">Laravel</h3></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                      </tr>
                      <tr>
                        <td>Login, Register, Forgot password pages</td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>User profile</td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Users management</td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>User roles management </td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Items management </td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Categories management, Tags management </td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Image upload, date picker inputs</td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Radio button, checkbox, toggle inputs</td>
                        <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                        <td class="text-center"><i class="fa fa-check text-success"></i></td>
                      </tr>
                      <tr>
                        <td><h3 class="text-primary mb-0 mt-3">Frontend</h3></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                      </tr>
                  <tr>
                    <td>Components</td>
                    <td class="text-center">16</td>
                    <td class="text-center">160</td>
                  </tr>
                  <tr>
                    <td>Plugins</td>
                    <td class="text-center">4</td>
                    <td class="text-center">13</td>
                  </tr>
                  <tr>
                    <td>Example Pages</td>
                    <td class="text-center">7</td>
                    <td class="text-center">27</td>
                  </tr>
                  <tr>
                    <td>Login, Register, Pricing, Lock Pages</td>
                    <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                    <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                    <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                    <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>Mini Sidebar</td>
                    <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                    <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>Premium Support</td>
                    <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                    <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-center">Free</td>
                    <td class="text-center">Just $149</td>
                  </tr>
                  <tr>
                    <td class="text-center"></td>
                    <td class="text-center">
                      <a href="#" class="btn btn-round btn-default disabled">Current Version</a>
                    </td>
                    <td class="text-center">
                      <a target="_blank" href="https://www.creative-tim.com/product/now-ui-dashboard-pro-laravel?ref=nud-free-upgrade-live" class="btn btn-round btn-primary">Upgrade to PRO</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection