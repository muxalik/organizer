<x-layout title="User Management">
    <x-slot:head>
        <x-default-head></x-default-head>
    </x-slot:head>
    <x-slot:content>
        <x-wrapper>
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Users</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h3 class="mb-0 me-2">{{ $users_count }}</h3>
                                        <small class="text-success">(100%)</small>
                                    </div>
                                    <small>Total Users</small>
                                </div>
                                <span class="badge bg-label-primary rounded p-2">
                                    <i class="bx bx-user bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Verified Users</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h3 class="mb-0 me-2">{{ $verified_users_count }}</h3>
                                        <small class="text-success">(+95%)</small>
                                    </div>
                                    <small>Recent analytics </small>
                                </div>
                                <span class="badge bg-label-success rounded p-2">
                                    <i class="bx bx-user-check bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Duplicate Users</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h3 class="mb-0 me-2">0</h3>
                                        <small class="text-success">(0%)</small>
                                    </div>
                                    <small>Recent analytics</small>
                                </div>
                                <span class="badge bg-label-danger rounded p-2">
                                    <i class="bx bx-group bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Verification Pending</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h3 class="mb-0 me-2">{{ $users_count - $verified_users_count }}</h3>
                                        <small class="text-danger">(+6%)</small>
                                    </div>
                                    <small>Recent analytics</small>
                                </div>
                                <span class="badge bg-label-warning rounded p-2">
                                    <i class="bx bx-user-voice bx-sm"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User List Table -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Search Filter</h5>
                </div>
                <div class="card-datatable table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row mx-2">
                            <div class="col-md-2">
                                <div class="me-3">
                                    <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                                name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                                class="form-select">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div
                                    class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter mx-3"><label><input
                                                type="search" class="form-control" placeholder="Search.."
                                                aria-controls="DataTables_Table_0"></label></div>
                                    <div class="dt-buttons btn-group flex-wrap">
                                        <button class="btn btn-secondary add-new btn-primary" tabindex="0"
                                            aria-controls="DataTables_Table_0" type="button">
                                            <span><i class="bx bx-plus me-0 me-sm-2"></i>
                                                <span class="d-none d-sm-inline-block">Add New
                                                    User</span>
                                            </span>
                                        </button>
                                        <div class="modal fade" id="addModal" tabindex="-1" style="display: none;"
                                            aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                                <div class="modal-content p-3 p-md-5">
                                                    <div class="modal-body">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                        <div class="text-center mb-4">
                                                            <h3>Add New Card</h3>
                                                            <p>Add new card to complete payment</p>
                                                        </div>
                                                        <form id="addNewCCForm"
                                                            class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework"
                                                            onsubmit="return false" novalidate="novalidate">
                                                            <div class="col-12 fv-plugins-icon-container">
                                                                <label class="form-label w-100" for="modalAddCard">Card
                                                                    Number</label>
                                                                <div
                                                                    class="input-group input-group-merge has-validation">
                                                                    <input id="modalAddCard" name="modalAddCard"
                                                                        class="form-control credit-card-mask"
                                                                        type="text" placeholder="1356 3215 6548 7898"
                                                                        aria-describedby="modalAddCard2">
                                                                    <span class="input-group-text cursor-pointer p-1"
                                                                        id="modalAddCard2"><span
                                                                            class="card-type"></span></span>
                                                                </div>
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <label class="form-label"
                                                                    for="modalAddCardName">Name</label>
                                                                <input type="text" id="modalAddCardName"
                                                                    class="form-control" placeholder="John Doe">
                                                            </div>
                                                            <div class="col-6 col-md-3">
                                                                <label class="form-label"
                                                                    for="modalAddCardExpiryDate">Exp. Date</label>
                                                                <input type="text" id="modalAddCardExpiryDate"
                                                                    class="form-control expiry-date-mask"
                                                                    placeholder="MM/YY">
                                                            </div>
                                                            <div class="col-6 col-md-3">
                                                                <label class="form-label" for="modalAddCardCvv">CVV
                                                                    Code</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="modalAddCardCvv"
                                                                        class="form-control cvv-code-mask"
                                                                        maxlength="3" placeholder="654">
                                                                    <span class="input-group-text cursor-pointer"
                                                                        id="modalAddCardCvv2"><i
                                                                            class="bx bx-help-circle text-muted"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            aria-label="Card Verification Value"
                                                                            data-bs-original-title="Card Verification Value"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="switch">
                                                                    <input type="checkbox" class="switch-input">
                                                                    <span class="switch-toggle-slider">
                                                                        <span class="switch-on"></span>
                                                                        <span class="switch-off"></span>
                                                                    </span>
                                                                    <span class="switch-label">Save card for future
                                                                        billing?</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-12 text-center">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-sm-3 me-1 mt-3">Submit</button>
                                                                <button type="reset"
                                                                    class="btn btn-label-secondary btn-reset mt-3"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close">Cancel</button>
                                                            </div>
                                                            <input type="hidden">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="datatables-users table border-top dataTable no-footer dtr-column"
                            id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                            style="width: 1390px;">
                            <thead>
                                <tr>
                                    <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                        style="width: 0px; display: none;" aria-label=""></th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 50px;"
                                        aria-label="Id">Id</th>
                                    <th class="sorting sorting_desc" tabindex="0"
                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        style="width: 428px;" aria-sort="descending"
                                        aria-label="User: activate to sort column ascending">User</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 401px;"
                                        aria-label="Email: activate to sort column ascending">Email</th>
                                    <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 131px;"
                                        aria-label="Verified: activate to sort column ascending">Verified</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 166px;"
                                        aria-label="Actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td><span>{{ $user->id }}</span></td>
                                        <td class="sorting_1">
                                            <div class="d-flex justify-content-start align-items-center user-name">
                                                <div class="avatar-wrapper">
                                                    <div class="avatar avatar-sm me-3"><span
                                                            class="avatar-initial rounded-circle bg-label-primary">JD</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column"><a
                                                        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                                                        class="text-body text-truncate"><span
                                                            class="fw-semibold">{{ $user->name }}</span></a></div>
                                            </div>
                                        </td>
                                        <td><span class="user-email">{{ $user->email }}</span></td>
                                        <td class="text-center"><i
                                                class="bx fs-4 bx-shield-x @if ($user->email_verified_at) text-success @else text-danger @endif"></i>
                                        </td>
                                        <td>
                                            <div class="d-inline-block text-nowrap">
                                                <button type="button" class="btn btn-sm btn-icon edit-record"
                                                    data-bs-toggle="modal" data-bs-target="#editUser">
                                                    <i class="bx bx-edit"></i>
                                                </button>
                                                <div class="modal fade" id="editUser" tabindex="-1"
                                                    style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                                                        <div class="modal-content p-3 p-md-5">
                                                            <div class="modal-body">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                                <div class="text-center mb-4">
                                                                    <h3>Edit User Information</h3>
                                                                </div>
                                                                <form id="editUserForm"
                                                                    class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework"
                                                                    onsubmit="return false" novalidate="novalidate">
                                                                    <div class="col-12 col-md-6 fv-plugins-icon-container"
                                                                        style="padding-left: calc(var(--bs-gutter-x)*.5)!important;">
                                                                        <label class="form-label"
                                                                            for="modalEditUserFirstName">Full
                                                                            Name</label>
                                                                        <input type="text"
                                                                            id="modalEditUserFirstName"
                                                                            name="modalEditUserFirstName"
                                                                            class="form-control"
                                                                            placeholder="John Doe">
                                                                        <div
                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-6"
                                                                        style="padding-left: calc(var(--bs-gutter-x)*.5)!important;">
                                                                        <label class="form-label"
                                                                            for="modalEditUserStatus">Status</label>
                                                                        <select id="modalEditUserStatus"
                                                                            name="modalEditUserStatus"
                                                                            class="form-select"
                                                                            aria-label="Default select example">
                                                                            <option selected="">Status</option>
                                                                            <option value="1">Active</option>
                                                                            <option value="2">Inactive
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-md-6"
                                                                        style="padding-left: calc(var(--bs-gutter-x)*.5)!important;">
                                                                        <label class="form-label"
                                                                            for="modalEditUserEmail">Email</label>
                                                                        <input type="text" id="modalEditUserEmail"
                                                                            name="modalEditUserEmail"
                                                                            class="form-control"
                                                                            placeholder="example@domain.com">
                                                                    </div>
                                                                    <div class="col-12 col-md-6"
                                                                        style="padding-left: calc(var(--bs-gutter-x)*.5)!important;">
                                                                        <label class="form-label"
                                                                            for="modalAddressCountry">Country</label>
                                                                        <select id="modalAddressCountry"
                                                                            name="modalAddressCountry"
                                                                            class="select2 form-select"
                                                                            data-allow-clear="true">
                                                                            <option value="">Select</option>
                                                                            <option value="Australia">Australia
                                                                            </option>
                                                                            <option value="Bangladesh">Bangladesh
                                                                            </option>
                                                                            <option value="Belarus">Belarus</option>
                                                                            <option value="Brazil">Brazil</option>
                                                                            <option value="Canada">Canada</option>
                                                                            <option value="China">China</option>
                                                                            <option value="France">France</option>
                                                                            <option value="Germany">Germany</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Indonesia">Indonesia
                                                                            </option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Italy">Italy</option>
                                                                            <option value="Japan">Japan</option>
                                                                            <option value="Korea">Korea, Republic of
                                                                            </option>
                                                                            <option value="Mexico">Mexico</option>
                                                                            <option value="Philippines">Philippines
                                                                            </option>
                                                                            <option value="Russia">Russian Federation
                                                                            </option>
                                                                            <option value="South Africa">South Africa
                                                                            </option>
                                                                            <option value="Thailand">Thailand</option>
                                                                            <option value="Turkey">Turkey</option>
                                                                            <option value="Ukraine">Ukraine</option>
                                                                            <option value="United Arab Emirates">United
                                                                                Arab Emirates</option>
                                                                            <option value="United Kingdom">United
                                                                                Kingdom</option>
                                                                            <option value="United States">United States
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-md-6"
                                                                        style="padding-left: calc(var(--bs-gutter-x)*.5)!important;">
                                                                        <label class="form-label"
                                                                            for="modalEditTaxID">Tax ID</label>
                                                                        <input type="text" id="modalEditTaxID"
                                                                            name="modalEditTaxID"
                                                                            class="form-control modal-edit-tax-id"
                                                                            placeholder="123 456 7890">
                                                                    </div>
                                                                    <div class="col-12 col-md-6"
                                                                        style="padding-left: calc(var(--bs-gutter-x)*.5)!important;">
                                                                        <label class="form-label"
                                                                            for="modalEditUserPhone">Phone
                                                                            Number</label>
                                                                        <div class="input-group input-group-merge">
                                                                            <span class="input-group-text">+1</span>
                                                                            <input type="text"
                                                                                id="modalEditUserPhone"
                                                                                name="modalEditUserPhone"
                                                                                class="form-control phone-number-mask"
                                                                                placeholder="202 555 0111">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <label class="form-label"
                                                                            for="modalEditUserLanguage">Language</label>
                                                                        <select id="modalEditUserLanguage"
                                                                            name="modalEditUserLanguage"
                                                                            class="select2 form-select" multiple>
                                                                            <option value="">Select</option>
                                                                            <option value="english" selected>English
                                                                            </option>
                                                                            <option value="spanish">Spanish</option>
                                                                            <option value="french">French</option>
                                                                            <option value="german">German</option>
                                                                            <option value="dutch">Dutch</option>
                                                                            <option value="hebrew">Hebrew</option>
                                                                            <option value="sanskrit">Sanskrit</option>
                                                                            <option value="hindi">Hindi</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12"
                                                                        style="padding-left: calc(var(--bs-gutter-x)*.5)!important;">
                                                                        <label class="switch">
                                                                            <input type="checkbox"
                                                                                class="switch-input">
                                                                            <span class="switch-toggle-slider">
                                                                                <span class="switch-on"></span>
                                                                                <span class="switch-off"></span>
                                                                            </span>
                                                                            <span class="switch-label">Use as a
                                                                                billing address?</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="submit"
                                                                            class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                                        <button type="reset"
                                                                            class="btn btn-label-secondary"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close">Cancel</button>
                                                                    </div>
                                                                    <input type="hidden">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-icon delete-record">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                                                    class="dropdown-item">View</a><a href="javascript:;"
                                                    class="dropdown-item">Suspend</a>
                                            </div>
                    </div>
                    </td>
                    </tr>
                @empty
                    No users yet...
                    @endforelse
                    </tbody>
                    </table>
                    {{ $users->onEachSide(2)->links('pagination') }}
                </div>
            </div>
            </div>
            <!-- / User List Taable -->
        </x-wrapper>
    </x-slot:content>
    <x-slot:scripts>
        
        <script
            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/js/laravel-user-management.js">
        </script>
        <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/ui-modals.js">
        </script>
        <script
            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/select2/select2.js">
        </script>
        <script
            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/modal-edit-user.js">
        </script>
        <script
            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/cleavejs/cleave.js">
        </script>
        <script
            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/cleavejs/cleave-phone.js">
        </script>

    </x-slot:scripts>
</x-layout>
