@extends('dashboard.layout.main')

@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('dashboard.component.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

              @include('dashboard.component.navbar')

                </nav>
                <!-- End of Topbar -->

                <!-- Content -->
            <div class="content-wrapper m-4">
                <!-- Content -->
            
                <div class="container-xxl flex-grow-1 container-p-y">
                  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>
            
                  <div class="row">
                    <div class="col-md-12">

                        
                        <ul>
                            @if($errors->any())
                            <div class="error">{{ $errors->any() }}</div>
                        @endif
                        </ul>
                   
                      <form method="post" action="/dashboard/profile/update" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                     <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <input type="hidden" name="oldImage" value="customers-images/default.jpg">
                            @if ($data->image)
                                
                            
                            <img
                              src="../storage/{{ $data->image }}"
                              alt="user-avatar"
                              class="img-fluid rounded img-preview"
                              height="100"
                              width="100"
                              
            
                            />
                            @else

                            <img
                              src="../img/undraw_profile.svg"
                              alt="user-avatar"
                              class="img-fluid rounded img-preview"
                              height="100"
                              width="100"
                              
            
                            />
                            @endif        
                            
                        <div class="button-wrapper ml-3">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" name="img" class="form-control " onchange="previewImage()" id="upload" hidden>
                          </label>
                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                      </div>
                      </div>
                    </div>
            
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                              <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Nama</label>
                                <input
                                  class="form-control  "
                                  type="text"
                                  id="name"
                                  name="name"
                                  value=" {{ $data->name }}"
                                  autofocus
                                />
                                                  </div>
            
            
                              <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input
                                  class="form-control "
                                  type="text"
                                  id="email"
                                  name="email"
                                  value="{{ $data->email }}"
                                  placeholder="Email"
                                />
                                                  </div>
            
            
                              <div class="mb-3 col-md-6">
                                <label class="form-label" for="telepon">Nomor HP.</label>
                                <div class="input-group input-group-merge">
                                  <span class="input-group-text">MY (+60)</span>
                                  <input
                                    type="text"
                                    id="telepon"
                                    name="phone"
                                    class="form-control  "
                                    value="{{ $data->phone }}"
                                    placeholder="NO.HP"
                                  />
                                </div>
                                                  </div>
            
                              <div class="mb-3 col-md-6">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control  " id="alamat" name="address" value="{{ $data->address }}" placeholder="Alamat" />
                                                  </div>
            
                              <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">Bergabung sejak</label>
                                                    <p> {{ $data->created_at->format('d/m/Y') }} | {{ $data->created_at->diffForHumans() }} </p>
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">Status member</label>
                                          <p><span class="badge bg-label-secondary me-1">{{ $data->status }}</span></p>
                                        </div>
                            </div>
                            <div class="mt-2">
                              <button type="submit" class="btn btn-primary me-2">Save changes</button>
                              <a type="reset" href="/dashboard" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                          </form>
                        </div>
                        <!-- /Account -->
                      </div>
                    </div>
                  </div>
    

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Restaurant</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ url('/logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(){
          const image = document.querySelector('#upload');
        const imgPreview = document.querySelector('.img-preview')
      
        imgPreview.style.display = 'block';
      
        const oFReader = new FileReader();
      
        oFReader.readAsDataURL(image.files[0]);
      
        oFReader.onload = function(oFREvent){
          imgPreview.src = oFREvent.target.result;
        }
      
        }
      
      </script>

    @endsection
