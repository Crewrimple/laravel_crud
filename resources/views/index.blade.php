{{ view('layouts.header') }}

<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-8">
                    <h1 class="m-0">@lang('menu.Manage User Profiles')</h1>
                </div>
                
                <div class="col-4 text-right">
                    <a href="{{ route('user.profile.create') }}" class="add-btn">
                        <i class="fa fa-user-plus"></i>
                        <br> @lang('menu.Add New')
                    </a>
                </div>
               <div class="row mb-2">
                <div class="col-sm-12">
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item">@lang('menu.Home')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="site-nav__toggle">
        <select class="site-nav-btns__toggle" onchange="changeLang(this)">
            <option value="uz" {{ session('locale') == 'uz' ? 'selected' : '' }}>Uz</option>
            <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>En</option>
            <option value="ru" {{ session('locale') == 'ru' ? 'selected' : '' }}>Ru</option>
        </select>
    </div>
</div>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@lang('menu.Users Profiles')</h3>
                    </div>
                    <div class="card-body">
                        <table id="user_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>@lang('menu.Sr')</th>
                                    <th>@lang('menu.Profile Photo')</th>
                                    <th>@lang('menu.Title')</th>
                                    <th>@lang('menu.First Name')</th>
                                    <th>@lang('menu.Last Name')</th>
                                    <th>@lang('menu.Email')</th>
                                    <th>@lang('menu.Actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($users_data as $user)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>
                                            <img class="profile box-image-preview img-fluid img-circle elevation-2" src="{{ isset($user['personal_info']['image_path']) && !empty($user['personal_info']['image_path']) ? asset('assets/images/'. $user['personal_info']['image_path'])  : asset('assets/images/user-thumb.jpg') }}"
                                            alt="" style="height:40px; width:40px;" />
                                        </td>
                                        <td>{{ $user['personal_info']['profile_title'] }}</td>
                                        <td>{{ $user['personal_info']['first_name'] }}</td>
                                        <td>{{ $user['personal_info']['last_name'] }}</td>
                                        <td>{{ $user['contact_info']['email'] }}</td>
                                        <td align="center">
                                            <div class="d-flex flex-row justify-content-around">
                                              <a class="edit_btn"
                                                    href="{{ route('edit', $user['personal_info']['id']) }}"
                                                    title="@lang('menu.Edit Profile')">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('destroy', $user['personal_info']['id']) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    <a href="javascript::void(0)" onclick="confirm_form_delete(this)"
                                                        class="del_btn" title="@lang('menu.Delete Profile')">
                                                        <i class="fas fa-user-minus text-danger"></i>
                                                    </a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            </tbody>
                      
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>

{{ view('layouts.footer') }}
