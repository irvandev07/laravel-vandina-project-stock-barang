@extends('layouts.master')
@section('title')
Table | Vandina Projects
@stop
@section('content')
<div class="container-fluid py-4 mb-5">
      <div class="container-fuild">
        <div class="row">
          <div class="col-11">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <div class="col-1">
            <div class="btn-group dropdown">
              <i class="fas fa-ellipsis-v text-primary text-sm btn btn-red text-white btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><button class="dropdown-item" type="button" onclick="openNav()">Tambah Barang</button></li>
                <li><button class="dropdown-item" type="button">Import xlsx</button></li>
                <li><button class="dropdown-item" type="button">Export xlsx</button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Irvan Syachrialdi</h6>
                            <p class="text-xs text-secondary mb-0">irvan@vandina-project.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">IT Staff</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/20</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Ilham</h6>
                            <p class="text-xs text-secondary mb-0">ilham@vandina-project.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Owner</p>
                        <p class="text-xs text-secondary mb-0">CEO</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
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
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Projects table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama barang</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stok</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Terigu Segitiga</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">25 Kg</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">Ready</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">60%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Blue band</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">30 Kg</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">Ready</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">80%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Tepung beras</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">100 Kg</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">Ready</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">50%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-dark" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Selai Kacang</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">20 Kg</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">Ready</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">70%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-light" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3">
        <div class="container-fluid mb-2">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-4 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-black text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                with <i class="fa fa-heart text-danger"></i>
                <a href="https://www.irvan-syachrialdi.com/vandina-project" class="font-weight-bold text-black" target="_blank">Vandina Project</a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.irvan-syachrialdi.com/vandina-project" class="nav-link text-black" target="_blank">Tentang kami</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.irvan-syachrialdi.com/vandina-project" class="nav-link text-black" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.irvan-syachrialdi.com/license" class="nav-link pe-0 text-black" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
@stop