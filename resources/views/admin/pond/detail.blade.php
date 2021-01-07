@extends('layouts.admin')

@section('content')
<div class="container-scroller">
      <!-- Sidenav -->
      @include('layouts.sidenav')
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('admin/images/logo.svg') }}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Cari Kolam">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown ">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="{{ asset('admin/images/faces/face4.jpg') }}" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="{{ asset('admin/images/faces/face2.jpg') }}" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="{{ asset('admin/images/faces/face3.jpg') }}" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{ asset('admin/images/faces/face2.jpg') }}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Rifky Ari</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="../index.html">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-8 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <div class="">
                          <h3 class="mb-0">{{  $data->name }}</h3>
                          <p class="text-muted ml-2 my-2 font-weight-medium">Jenis Ikan : <b class="text-success">{{  $data->fish_type }}</b></p>
                          <p class="text-muted ml-2 my-2 font-weight-medium">Umur Budidaya : <b class="text-success">{{  $data->fish_age }} Hari</b></p>
                          <p class="text-muted ml-2 mb-2 font-weight-medium">Luas Kolam : <b class="text-success">{{ $data->pond_size }} m<sup>2</sup></b></p>
                        </div>
                      </div>
                      <div class="col-8 mt-3">
                        <div class="row indicator-card ">
                          <div class="col-4">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                  <div>
                                    <div class="d-flex flex-row">
                                      <h3>{{ $data->current_temp }}</h3>
                                      <sub class="text-muted small">°C</sub>
                                    </div>
                                    <p class="mb-0">Temperatur</p>
                                  </div>
                                  <div class="icon icon-box-success">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                  <div>
                                    <div class="d-flex flex-row">
                                      <h3>{{ $data->current_ph }}</h3>
                                      <sub class="text-muted small"></sub>
                                    </div>
                                    <p class="mb-0">pH</p>
                                  </div>
                                  <div class="icon icon-box-success">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                  <div>
                                    <div class="d-flex flex-row">
                                      <h3>{{ $data->current_do }} </h3>
                                      <sub class="text-muted small">ppm</sub>
                                    </div>
                                    <p class="mb-0">Oksigen</p>
                                  </div>
                                  <div class="icon icon-box-success">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
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
              </div>
              
              <div class="col-xl-4 col-sm-6 grid-margin">
                <div class="row">
                  <div class="col-6">
                    <div class="card">
                      <div class="card-body text-center">
                        <img src="{{ asset('admin/images/scan.svg') }}" width="35%" height="70px" alt="">
                        <h4 class="mt-4">Scan Kolam</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card">
                      <div class="card-body text-center">
                        <img src="{{ asset('admin/images/addpond.svg') }}" width="35%" height="70px" alt="">
                        <h4 class="mt-4">Tambah Kolam</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Rekomendasi Perawatan</h4>
                      <p class="text-muted mb-1">Status</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                        @foreach ($recommendations as $recommendation)
                            <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              @if ( $recommendation->type == 'danger')
                                <div class="preview-icon bg-danger">
                                  <i class="mdi mdi-thermometer-alert"></i>
                                </div>
                              @elseif ( $recommendation->type == 'warning')
                                <div class="preview-thumbnail">
                                  <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-water"></i>
                                  </div>
                                </div>
                              @endif
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">{{ $recommendation->title }}</h6>
                                <p class="text-muted mb-0">{{ $recommendation->recommendation }}</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                @if ( $recommendation->type == 'danger')
                                  <p class="mt-3 text-danger">Berbahaya</p>
                                @elseif ( $recommendation->type == 'warning')
                                  <p class="mt-3 text-warning">Penting</p>
                                @endif
                              </div>
                            </div>
                          </div>
                        @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body text-center">
                    <img class="pt-4" src="{{ asset('admin/images/confuse.svg') }}" width="50%" alt="">
                    <br>
                    <h4 class="my-4 px-5">
                      Masih bingung cara kerjanya ? <br> Yuk simak tutorial berikut
                    </h4>
                    <button type="button" class="btn btn-primary btn-lg btn-fw">Tutorial</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 Rifky Ari Yunanto. All rights reserved.</span>
              <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
@endsection