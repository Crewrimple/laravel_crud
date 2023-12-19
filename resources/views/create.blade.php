{{ view('layouts.header') }}

<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <h1 class="m-0">@lang('userprofile.manage_user_profiles')</h1>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('index') }}" class="add-btn">
                        <i class="fa fa-home"></i>
                        <br> @lang('userprofile.home')
                    </a>
                    <button onclick="saverecord()" class="save-btn">
                        <i class="fa fa-save"></i>
                        <br> @lang('userprofile.create_profile_button')
                    </button>
                </div>
            </div>
            <div class="site-nav__toggle">
                <select class="site-nav-btns__toggle" onchange="changeLang(this)">
                    <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>En</option>
                    <option value="uz" {{ session('locale') == 'uz' ? 'selected' : '' }}>Uz</option>
                    <option value="ru" {{ session('locale') == 'ru' ? 'selected' : '' }}>Ru</option>
                </select>
            </div>
        </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('userprofile.home')</a></li>
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item">@lang('userprofile.create_user_profile')</li>
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
                        <h3 class="card-title">@lang('userprofile.create_user_profile')</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 p-md-5 p-sm-4 p-3">
                                <form action="{{ route('store') }}" id="createform" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Personal Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">@lang('userprofile.personal_information')</h2>
                                            <div class="form-outline mb-4">
                                                <input type="hidden" id="user_id" name="user_id" class="form-control" />
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-6 col-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label fw-bold text-secondary">@lang('userprofile.first_name')</label>
                                                                <input type="text" id="first_name" name="first_name" placeholder="@lang('userprofile.first_name')" class="form-control" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-outline">
                                                                <label class="form-label fw-bold text-secondary">@lang('userprofile.last_name')</label>
                                                                <input type="text" id="last_name" name="last_name" placeholder="@lang('userprofile.last_name')" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <div class="profile_picture text-center">
                                                        <input type="file" name="image_path" accept="image/png, image/jpeg, image/jpg" onchange="display_image(this);" class="d-none upload-box-image">
                                                        <img class="box-image-preview img-fluid img-circle elevation-2" src="{{ asset('assets/images/user-thumb.jpg') }}" alt="Profile picture" onclick="$(this).closest('.profile_picture').find('input').click();" style="height:150px; width:150px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">@lang('userprofile.profile_title')</label>
                                                <input type="text" id="profile_title" name="profile_title" class="form-control" placeholder="@lang('userprofile.profile_title')" required />
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">@lang('userprofile.about')</label>
                                                <textarea class="form-control" placeholder="@lang('userprofile.about')" id="about_me" name="about_me" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Contact Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">@lang('userprofile.contact_information')</h2>
                                            <div class="row mb-4">
                                                <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label fw-bold text-secondary">@lang('userprofile.email')</label>
                                                        <input type="email" id="email" name="email" placeholder="@lang('userprofile.email')" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label fw-bold text-secondary">@lang('userprofile.phone_number')</label>
                                                        <input type="number" id="phone_number" name="phone_number" placeholder="@lang('userprofile.phone_number')" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox" value="1" id="verify" name="verify" required />
                                                <label for="verify" class="form-check-label text-dark">
                                                    @lang('userprofile.verify_message')
                                                </label>
                                            </div>

                                            <button type="submit" id="submitbtn" class="btn btn-lg btn-primary w-100">
                                                @lang('userprofile.create_profile_button')
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function changeLang(lang) {
        let urls = '/locale/' + lang.value;
        window.location.href = urls;
    }
</script>

{{ view('layouts.footer') }}
