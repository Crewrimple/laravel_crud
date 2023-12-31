{{ view('layouts.header') }}

<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <h1 class="m-0">@lang('userprofile.edit_user_profile')</h1>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('index') }}" class="add-btn">
                        <i class="fa fa-home"></i>
                        <br> @lang('userprofile.home')
                    </a>
                    <button onclick="saverecord()" class="save-btn">
                        <i class="fa fa-save"></i>
                        <br> @lang('userprofile.save')
                    </button>
                </div>
              </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('userprofile.home')</a></li>
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item">@lang('userprofile.edit_user_profile')</li>
                    </ul>
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
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <h3 class="card-title">@lang('userprofile.edit_profile')</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 p-md-5 p-sm-4 p-3">
                                <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Personal Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">@lang('userprofile.personal_information')</h2>
                                            <div class="form-outline mb-4">
                                                <input type="hidden" id="user_id" name="user_id" class="form-control"
                                                    value="{{ isset($information['personal_info']['id']) ? $information['personal_info']['id'] : '' }}" />
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-12">
                                                            <div class="col-12">
                                                                <div class="form-outline mb-4">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">@lang('userprofile.first_name')</label>
                                                                    <input type="text" id="first_name"
                                                                        name="first_name" placeholder="@lang('userprofile.first_name')"
                                                                        class="form-control"
                                                                        value="{{ isset($information['personal_info']['first_name']) ? $information['personal_info']['first_name'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">@lang('userprofile.last_name')</label>
                                                                    <input type="text" id="last_name"
                                                                        name="last_name" placeholder="@lang('userprofile.last_name')"
                                                                        class="form-control"
                                                                        value="{{ isset($information['personal_info']['last_name']) ? $information['personal_info']['last_name'] : '' }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-12">
                                                            <div class="profile_picture text-center">
                                                                <input type="file" name="image_path"
                                                                    accept="image/png, image/jpeg, image/jpg"
                                                                    onchange="display_image(this);"
                                                                    class="d-none upload-box-image">
                                                                <img class="box-image-preview img-fluid img-circle elevation-2"
                                                                    src="{{ isset($information['personal_info']['image_path']) && !empty($information['personal_info']['image_path']) ? asset('assets/images/' . $information['personal_info']['image_path']) : asset('assets/images/user-thumb.jpg') }}"
                                                                    alt="Profile picture"
                                                                    onclick="$(this).closest('.profile_picture').find('input').click();"
                                                                    style="height:150px; width:150px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">@lang('userprofile.profile_title')</label>
                                                <input type="text" id="profile_title" name="profile_title"
                                                    class="form-control" placeholder="@lang('userprofile.profile_title')"
                                                    value="{{ isset($information['personal_info']['profile_title']) ? $information['personal_info']['profile_title'] : '' }}" />
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">@lang('userprofile.about')</label>
                                                <textarea class="form-control" placeholder="@lang('userprofile.about')" id="about_me" name="about_me" rows="4">{{ isset($information['personal_info']['about_me']) ? $information['personal_info']['about_me'] : '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Contact Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">@lang('userprofile.contact_information')</h2>
                                            @foreach ($information['contact_info'] as $contact_info)
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">@lang('userprofile.email')</label>
                                                                    <input type="email" id="email"
                                                                        name="email" placeholder="@lang('userprofile.email')"
                                                                        class="form-control"
                                                                        value="{{ isset($contact_info['email']) ? $contact_info['email'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">@lang('userprofile.phone_number')</label>
                                                                    <input type="number" id="phone_number"
                                                                        name="phone_number" placeholder="@lang('userprofile.phone_number')"
                                                                        class="form-control"
                                                                        value="{{ isset($contact_info['phone_number']) ? $contact_info['phone_number'] : '' }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="1"
                                            id="verify" name="verify" required />
                                        <label for="verify" class="form-check-label text-dark">@lang('userprofile.verify_message')</label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" id="submitbtn" class="btn btn-lg btn-success w-100">@lang('userprofile.save_changes')</button>
                                </form>
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
<script>
    function changeLang(lang) {
        let urls = '/locale/' + lang.value;
        window.location.href = urls;
    }
</script>
{{ view('layouts.footer') }}
