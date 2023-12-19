{{ view('layouts.header') }}

<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <h1 class="m-0">User Profile</h1>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('index') }}" class="add-btn">
                        <i class="fa fa-home"></i>
                        <br> Home
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item">User profiles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <h3 class="card-title">
                            {{ isset($information['personal_info']['first_name']) ? $information['personal_info']['first_name'] : 'Empty' }}
                            {{ isset($information['personal_info']['last_name']) ? $information['personal_info']['last_name'] : '' }}'s
                            Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid wrapper">
                            <div class="row">
                                <div class="sidebar-wrapper col-4">
                                    <div class="profile-container">
                                        <img class="profile box-image-preview img-fluid img-circle elevation-2" src="{{ isset($information['personal_info']['image_path']) && !empty($information['personal_info']['image_path']) ? asset('assets/images/'. $information['personal_info']['image_path'])  : asset('assets/images/user-thumb.jpg') }}"
                                            alt="" style="height:200px; width:200px;" />
                                        <h1 class="name">
                                            {{ isset($information['personal_info']['first_name']) ? $information['personal_info']['first_name'] : '' }}
                                            {{ isset($information['personal_info']['last_name']) ? $information['personal_info']['last_name'] : '' }}
                                        </h1>
                                        <h3 class="tagline">
                                            {{ isset($information['personal_info']['profile_title']) ? $information['personal_info']['profile_title'] : '' }}
                                        </h3>
                                    </div>
                                    <!--//profile-container-->

                                    <div class="contact-container container-block">
                                        <ul class="list-unstyled contact-list">
                                            @if (!empty($information['contact_info']['email']))
                                                <li class="email"><i class="fa-solid fa-envelope"></i>
                                                    <a class="ms-3"
                                                        href="mailto: {{ isset($information['contact_info']['email']) ? $information['contact_info']['email'] : 'yourmail@example.com' }}">{{ isset($information['contact_info']['email']) ? $information['contact_info']['email'] : '' }}</a>
                                                </li>
                                            @endif
                                            @if (!empty($information['contact_info']['phone_number']))
                                                <li class="phone"><i class="fa-solid fa-phone"></i>
                                                    <a class="ms-3"
                                                        href="tel:{{ isset($information['contact_info']['phone_number']) ? $information['contact_info']['phone_number'] : '' }}">{{ isset($information['contact_info']['phone_number']) ? $information['contact_info']['phone_number'] : '' }}</a>
                                                </li>
                                      
                                        </ul>
                                    </div>
                                    <!--//contact-container-->
                                  </div>
                                <!--//main-body-->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>

{{ view('layouts.footer') }}
