<x-layout title="User Management">
    <x-slot:head>
        <x-default-head></x-default-head>
    </x-slot:head>
    <x-slot:content>
        <x-wrapper page="Users">
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
                                            aria-controls="DataTables_Table_0" type="button"><span><i
                                                    class="bx bx-plus me-0 me-sm-2"></i><span
                                                    class="d-none d-sm-inline-block">Add New User</span></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="datatables-users table border-top dataTable no-footer dtr-column"
                            id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1390px;">
                            <thead>
                                <tr>
                                    <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                        style="width: 0px; display: none;" aria-label=""></th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 50px;"
                                        aria-label="Id">Id</th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 428px;" aria-sort="descending"
                                        aria-label="User: activate to sort column ascending">User</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" style="width: 401px;"
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
                                            <div class="d-inline-block text-nowrap"><button
                                                    class="btn btn-sm btn-icon edit-record" data-id="95"
                                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><i
                                                        class="bx bx-edit"></i></button><button
                                                    class="btn btn-sm btn-icon delete-record" data-id="95"><i
                                                        class="bx bx-trash"></i></button><button
                                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end m-0"><a
                                                        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                                                        class="dropdown-item">View</a><a href="javascript:;"
                                                        class="dropdown-item">Suspend</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    No users yet...
                                @endforelse
                            </tbody>
                        </table>
                        <div class="row mx-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                    aria-live="polite">Showing 1 to 10 of 11 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers"
                                    id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="DataTables_Table_0_previous"><a href=""
                                                aria-controls="DataTables_Table_0" data-dt-idx="previous"
                                                tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href=""
                                                aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href=""
                                                aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                                class="page-link">2</a></li>
                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a
                                                href="" aria-controls="DataTables_Table_0" data-dt-idx="next"
                                                tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                    {{ $users->onEachSide(2)->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Offcanvas to add new user -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                    aria-labelledby="offcanvasAddUserLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mx-0 flex-grow-0">
                        <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm"
                            novalidate="novalidate">
                            <input type="hidden" name="id" id="user_id">
                            <div class="mb-3 fv-plugins-icon-container">
                                <label class="form-label" for="add-user-fullname">Full Name</label>
                                <input type="text" class="form-control" id="add-user-fullname"
                                    placeholder="John Doe" name="name" aria-label="John Doe">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="mb-3 fv-plugins-icon-container">
                                <label class="form-label" for="add-user-email">Email</label>
                                <input type="text" id="add-user-email" class="form-control"
                                    placeholder="john.doe@example.com" aria-label="john.doe@example.com"
                                    name="email">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="mb-3 fv-plugins-icon-container">
                                <label class="form-label" for="add-user-contact">Contact</label>
                                <input type="text" id="add-user-contact" class="form-control phone-mask"
                                    placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com"
                                    name="userContact">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="mb-3 fv-plugins-icon-container">
                                <label class="form-label" for="add-user-company">Company</label>
                                <input type="text" id="add-user-company" name="company" class="form-control"
                                    placeholder="Web Developer" aria-label="jdoe1">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="country">Country</label>
                                <div class="position-relative"><select id="country"
                                        class="select2 form-select select2-hidden-accessible"
                                        data-select2-id="country" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="2">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="1" style="width: 352px;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false"
                                                aria-labelledby="select2-country-container"><span
                                                    class="select2-selection__rendered" id="select2-country-container"
                                                    role="textbox" aria-readonly="true"><span
                                                        class="select2-selection__placeholder">Select
                                                        Country</span></span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="user-role">User Role</label>
                                <select id="user-role" class="form-select">
                                    <option value="subscriber">Subscriber</option>
                                    <option value="editor">Editor</option>
                                    <option value="maintainer">Maintainer</option>
                                    <option value="author">Author</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="user-plan">Select Plan</label>
                                <select id="user-plan" class="form-select">
                                    <option value="basic">Basic</option>
                                    <option value="enterprise">Enterprise</option>
                                    <option value="company">Company</option>
                                    <option value="team">Team</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                            <button type="reset" class="btn btn-label-secondary"
                                data-bs-dismiss="offcanvas">Cancel</button>
                            <input type="hidden">
                        </form>
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
    </x-slot:scripts>
</x-layout>
