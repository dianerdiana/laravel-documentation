@extends('layouts.app')

@section('content')
  <section class="app-user-list">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="card">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <h3 class="fw-bolder mb-75">21,459</h3>
              <span>Total Users</span>
            </div>
            <div class="avatar bg-light-primary p-50">
              <span class="avatar-content">
                <i data-feather="user" class="font-medium-4"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <h3 class="fw-bolder mb-75">4,567</h3>
              <span>Paid Users</span>
            </div>
            <div class="avatar bg-light-danger p-50">
              <span class="avatar-content">
                <i data-feather="user-plus" class="font-medium-4"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <h3 class="fw-bolder mb-75">19,860</h3>
              <span>Active Users</span>
            </div>
            <div class="avatar bg-light-success p-50">
              <span class="avatar-content">
                <i data-feather="user-check" class="font-medium-4"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <h3 class="fw-bolder mb-75">237</h3>
              <span>Pending Users</span>
            </div>
            <div class="avatar bg-light-warning p-50">
              <span class="avatar-content">
                <i data-feather="user-x" class="font-medium-4"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- list and filter start -->
    <div class="card">
      <div class="card-body border-bottom">
        <h4 class="card-title">Search & Filter</h4>
        <div class="row">
          <div class="col-md-4 user_role"></div>
          <div class="col-md-4 user_plan"></div>
          <div class="col-md-4 user_status"></div>
        </div>
      </div>
      <div class="card-datatable table-responsive pt-0">
        <table class="server-side-table table">
          <thead class="table-light">
            <tr>
              <th></th>
              <th>Name</th>
              <th>Role</th>
              <th>Plan</th>
              <th>Billing</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
      <!-- Modal to add new user starts-->
      <div id="modals-slide-in" class="modal modal-slide-in new-user-modal fade">
        <div class="modal-dialog">
          <form class="add-new-user modal-content pt-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
              <h5 id="exampleModalLabel" class="modal-title">Add User</h5>
            </div>
            <div class="modal-body flex-grow-1">
              <div class="mb-1">
                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                <input id="basic-icon-default-fullname" type="text" class="form-control dt-full-name" placeholder="John Doe"
                  name="user-fullname" />
              </div>
              <div class="mb-1">
                <label class="form-label" for="basic-icon-default-uname">Username</label>
                <input id="basic-icon-default-uname" type="text" class="form-control dt-uname" placeholder="Web Developer"
                  name="user-name" />
              </div>
              <div class="mb-1">
                <label class="form-label" for="basic-icon-default-email">Email</label>
                <input id="basic-icon-default-email" type="text" class="form-control dt-email" placeholder="john.doe@example.com"
                  name="user-email" />
              </div>
              <div class="mb-1">
                <label class="form-label" for="basic-icon-default-contact">Contact</label>
                <input id="basic-icon-default-contact" type="text" class="form-control dt-contact"
                  placeholder="+1 (609) 933-44-22" name="user-contact" />
              </div>
              <div class="mb-1">
                <label class="form-label" for="basic-icon-default-company">Company</label>
                <input id="basic-icon-default-company" type="text" class="form-control dt-contact" placeholder="PIXINVENT"
                  name="user-company" />
              </div>
              <div class="mb-1">
                <label class="form-label" for="country">Country</label>
                <select id="country" class="select2 form-select">
                  <option value="Australia">USA</option>
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
                </select>
              </div>
              <div class="mb-1">
                <label class="form-label" for="user-role">User Role</label>
                <select id="user-role" class="select2 form-select">
                  <option value="subscriber">Subscriber</option>
                  <option value="editor">Editor</option>
                  <option value="maintainer">Maintainer</option>
                  <option value="author">Author</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
              <div class="mb-2">
                <label class="form-label" for="user-plan">Select Plan</label>
                <select id="user-plan" class="select2 form-select">
                  <option value="basic">Basic</option>
                  <option value="enterprise">Enterprise</option>
                  <option value="company">Company</option>
                  <option value="team">Team</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
              <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
      <!-- Modal to add new user Ends-->
    </div>
    <!-- list and filter end -->
  </section>
@endsection

@section('vendor-css')
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
  <!-- END: Vendor CSS-->

  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
@endsection

@section('page-vendor-js')
  @include('plugins.datatable')
  @include('plugins.forms')
@endsection

@section('js')
  <script>
    $(function() {
      ('use strict');

      var dtServerSide = $('.server-side-table'),
        newUserSidebar = $('.new-user-modal'),
        newUserForm = $('.add-new-user'),
        select = $('.select2'),
        dtContact = $('.dt-contact'),
        statusObj = {
          1: {
            title: 'Pending',
            class: 'badge-light-warning'
          },
          2: {
            title: 'Active',
            class: 'badge-light-success'
          },
          3: {
            title: 'Inactive',
            class: 'badge-light-danger'
          }
        };

      select.each(function() {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>');
        $this.select2({
          // the following code is used to disable x-scrollbar when click in select input and
          // take 100% width in responsive also
          dropdownAutoWidth: true,
          width: '100%',
          dropdownParent: $this.parent()
        });
      });

      // Users List datatable
      if (dtServerSide.length) {
        dtServerSide.DataTable({
          serverSide: true,
          processing: true,
          ajax: {
            url: "{{ route('server-side.index') }}",
            dataSrc: function(data) {
              console.log(data)
              return data.data;
            }
          },
          {{-- blade-formatter-disable --}}
          columns: [
            // columns according to JSON
            { data: '' },
            { data: 'name' },
            { data: 'role_id' },
            { data: 'plan_id' },
            { data: 'billing' },
            { data: 'is_status' },
            { data: '' }
          ],
          columnDefs: [
            {
              // For Responsive
              className: 'control',
              orderable: false,
              responsivePriority: 2,
              targets: 0,
              render: function(data, type, full, meta) {
                return '';
              }
            },
            {
              // User full name and username
              targets: 1,
              responsivePriority: 4,
              render: function(data, type, full, meta) {
                var $name = full['name'],
                  $email = full['email'],
                  $image = full['avatar'];

                if ($image) {
                  // For Avatar image
                  var $output =
                    '<img src="' + $image + '" alt="Avatar" height="32" width="32">';
                } else {
                  // For Avatar badge
                  var stateNum = Math.floor(Math.random() * 6) + 1;
                  var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
                  var $state = states[stateNum],
                    $name = full['name'],
                    $initials = $name.match(/\b\w/g) || [];
                  $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
                  $output = '<span class="avatar-content">' + $initials + '</span>';
                }

                var colorClass = $image === '' ? ' bg-light-' + $state + ' ' : '';

                // Creates full output for row
                var $row_output =
                `
                  <div class="d-flex justify-content-left align-items-center">
                    <div class="avatar-wrapper">
                      <div class="avatar ${colorClass} me-1">
                        ${$output}
                      </div>
                    </div>
                    <div class="d-flex flex-column">
                      <a href="#" class="user_name text-truncate text-body">
                        <span class="fw-bolder">${$name}</span>
                      </a>
                      <small class="emp_post text-muted">
                        ${$email}
                      </small>
                    </div>
                  </div>
                `
                return $row_output;
              }
            },
            {
              // User Role
              targets: 2,
              render: function(data, type, full, meta) {
                var $role = full['role'];
                var $icon = feather
                  .icons[$role.icon]
                  .toSvg({ class: $role.class });

                return `<span class='text-truncate align-middle'>${$icon} ${$role.name}</span>`;
              }
            },
            {
              targets: 3,
              render: function(data, type, full, meta) {
                var $plan = full['plan'];

                return `<span class="text-nowrap">${$plan.name}</span>`;
              }
            },
            {
              targets: 4,
              render: function(data, type, full, meta) {
                var $billing = full['billing'];

                return `<span class="text-nowrap">${$billing}</span>`;
              }
            },
            {
              // User Status
              targets: 5,
              render: function(data, type, full, meta) {
                var $status = full['is_status'];

                return (
                  '<span class="badge rounded-pill ' +
                  statusObj[$status].class +
                  '" text-capitalized>' +
                  statusObj[$status].title +
                  '</span>'
                );
              }
            },
            {
              // Actions
              targets: -1,
              title: 'Actions',
              orderable: false,
              render: function(data, type, full, meta) {
                return (
                  '<div class="btn-group">' +
                  '<a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' +
                  feather.icons['more-vertical'].toSvg({
                    class: 'font-small-4'
                  }) +
                  '</a>' +
                  '<div class="dropdown-menu dropdown-menu-end">' +
                  '<a href="#" class="dropdown-item">' +
                  feather.icons['file-text'].toSvg({
                    class: 'font-small-4 me-50'
                  }) +
                  'Details</a>' +
                  '<a href="javascript:;" class="dropdown-item delete-record">' +
                  feather.icons['trash-2'].toSvg({
                    class: 'font-small-4 me-50'
                  }) +
                  'Delete</a></div>' +
                  '</div>' +
                  '</div>'
                );
              }
            }
          ],
          order: [[1, 'desc']],
          {{-- blade-formatter-enable --}}
          dom: '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
            '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
            '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
            '>t' +
            '<"d-flex justify-content-between mx-2 row mb-1"' +
            '<"col-sm-12 col-md-6"i>' +
            '<"col-sm-12 col-md-6"p>' +
            '>',
          language: {
            sLengthMenu: 'Show _MENU_',
            search: 'Search',
            searchPlaceholder: 'Search..'
          },
          // Buttons with Dropdown
          buttons: [{
              extend: 'collection',
              className: 'btn btn-outline-secondary dropdown-toggle me-2',
              text: feather.icons['external-link'].toSvg({
                class: 'font-small-4 me-50'
              }) + 'Export',
              buttons: [{
                  extend: 'print',
                  text: feather.icons['printer'].toSvg({
                    class: 'font-small-4 me-50'
                  }) + 'Print',
                  className: 'dropdown-item',
                  exportOptions: {
                    columns: [1, 2, 3, 4, 5]
                  }
                },
                {
                  extend: 'csv',
                  text: feather.icons['file-text'].toSvg({
                    class: 'font-small-4 me-50'
                  }) + 'Csv',
                  className: 'dropdown-item',
                  exportOptions: {
                    columns: [1, 2, 3, 4, 5]
                  }
                },
                {
                  extend: 'excel',
                  text: feather.icons['file'].toSvg({
                    class: 'font-small-4 me-50'
                  }) + 'Excel',
                  className: 'dropdown-item',
                  exportOptions: {
                    columns: [1, 2, 3, 4, 5]
                  }
                },
                {
                  extend: 'pdf',
                  text: feather.icons['clipboard'].toSvg({
                    class: 'font-small-4 me-50'
                  }) + 'Pdf',
                  className: 'dropdown-item',
                  exportOptions: {
                    columns: [1, 2, 3, 4, 5]
                  }
                },
                {
                  extend: 'copy',
                  text: feather.icons['copy'].toSvg({
                    class: 'font-small-4 me-50'
                  }) + 'Copy',
                  className: 'dropdown-item',
                  exportOptions: {
                    columns: [1, 2, 3, 4, 5]
                  }
                }
              ],
              init: function(api, node, config) {
                $(node).removeClass('btn-secondary');
                $(node).parent().removeClass('btn-group');
                setTimeout(function() {
                  $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex mt-50');
                }, 50);
              }
            },
            {
              text: 'Add New User',
              className: 'add-new btn btn-primary',
              attr: {
                'data-bs-toggle': 'modal',
                'data-bs-target': '#modals-slide-in'
              },
              init: function(api, node, config) {
                $(node).removeClass('btn-secondary');
              }
            }
          ],
          // For responsive popup
          responsive: {
            details: {
              display: $.fn.dataTable.Responsive.display.modal({
                header: function(row) {
                  var data = row.data();
                  return 'Details of ' + data['name'];
                }
              }),
              type: 'column',
              renderer: function(api, rowIdx, columns) {
                var data = $.map(columns, function(col, i) {
                  return col.columnIndex !== 6 // ? Do not show row in modal popup if title is blank (for check box)
                    ?
                    '<tr data-dt-row="' +
                    col.rowIdx +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>' :
                    '';
                }).join('');
                return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
              }
            }
          },
          language: {
            paginate: {
              // remove previous & next text from pagination
              previous: '&nbsp;',
              next: '&nbsp;'
            }
          },
          initComplete: function() {
            // Adding role filter once table initialized
            this.api()
              .columns(2)
              .every(function() {
                var column = this;
                var label = $('<label class="form-label" for="UserRole">Role</label>').appendTo('.user_role');
                var select = $(
                    '<select id="UserRole" class="form-select text-capitalize mb-md-0 mb-2"><option value=""> Select Role </option></select>'
                  )
                  .appendTo('.user_role')
                  .on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());
                    column.search(val ? '^' + val + '$' : '', true, false).draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function(d, j) {
                    select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                  });
              });
            // Adding plan filter once table initialized
            this.api()
              .columns(3)
              .every(function() {
                var column = this;
                var label = $('<label class="form-label" for="UserPlan">Plan</label>').appendTo('.user_plan');
                var select = $(
                    '<select id="UserPlan" class="form-select text-capitalize mb-md-0 mb-2"><option value=""> Select Plan </option></select>'
                  )
                  .appendTo('.user_plan')
                  .on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());
                    column.search(val ? '^' + val + '$' : '', true, false).draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function(d, j) {
                    select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                  });
              });
            // Adding status filter once table initialized
            this.api()
              .columns(5)
              .every(function() {
                var column = this;
                var label = $('<label class="form-label" for="FilterTransaction">Status</label>').appendTo(
                  '.user_status');
                var select = $(
                    '<select id="FilterTransaction" class="form-select text-capitalize mb-md-0 mb-2xx"><option value=""> Select Status </option></select>'
                  )
                  .appendTo('.user_status')
                  .on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());
                    column.search(val ? '^' + val + '$' : '', true, false).draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function(d, j) {
                    select.append(
                      '<option value="' +
                      statusObj[d].title +
                      '" class="text-capitalize">' +
                      statusObj[d].title +
                      '</option>'
                    );
                  });
              });
          }
        });
      }

      // Form Validation
      if (newUserForm.length) {
        newUserForm.validate({
          errorClass: 'error',
          rules: {
            'user-fullname': {
              required: true
            },
            'user-name': {
              required: true
            },
            'user-email': {
              required: true
            }
          }
        });

        newUserForm.on('submit', function(e) {
          var isValid = newUserForm.valid();
          e.preventDefault();
          if (isValid) {
            newUserSidebar.modal('hide');
          }
        });
      }

      // Phone Number
      if (dtContact.length) {
        dtContact.each(function() {
          new Cleave($(this), {
            phone: true,
            phoneRegionCode: 'US'
          });
        });
      }
    });
  </script>
@endsection
