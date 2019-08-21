@extends('layouts.app', [
  'namePage' => 'Notifications',
  'class' => 'sidebar-mini',
  'activePage' => 'notifications',
])

@section('content')
  <div class="panel-header">
    <div class="header text-center">
      <h2 class="title">Notifications</h2>
      <p class="category">Handcrafted by our friend
        <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
        <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
      </p>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Notifications Style</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-info">
              <span>This is a plain notification</span>
            </div>
            <div class="alert alert-info">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>This is a notification with close button.</span>
            </div>
            <div class="alert alert-info alert-with-icon" data-notify="container">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
              <span data-notify="message">This is a notification with close button and icon.</span>
            </div>
            <div class="alert alert-info alert-with-icon" data-notify="container">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
              <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Notification states</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-primary">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
            </div>
            <div class="alert alert-info">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Info - </b> This is a regular notification made with ".alert-info"</span>
            </div>
            <div class="alert alert-success">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Success - </b> This is a regular notification made with ".alert-success"</span>
            </div>
            <div class="alert alert-warning">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
            </div>
            <div class="alert alert-danger">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="places-buttons">
              <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                  <h4 class="card-title">
                    Notifications Places
                    <p class="category">Click to view notifications</p>
                  </h4>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 ml-auto mr-auto">
                  <div class="row">
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','left')">Top Left</button>
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','center')">Top Center</button>
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','right')">Top Right</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 ml-auto mr-auto">
                  <div class="row">
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','left')">Bottom Left</button>
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','center')">Bottom Center</button>
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','right')">Bottom Right</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection