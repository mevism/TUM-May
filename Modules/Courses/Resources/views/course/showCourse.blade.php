@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h4 class="h3 fw-bold mb-2">
                    COURSES
                </h4>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Courses</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        View courses
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div>
  <form action="/searchCourse" method = "POST" accept-charset=utf8>
    <input type="search" name = 'search-courses'>
    <button type = 'submit'>Search</button>
</form>
</div>

 <!-- Main Container -->
 <main id="main-container">
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
        <div class="flex-grow-1">
          <h1 class="h3 fw-bold mb-2">
            DataTables
          </h1>
          <h2 class="fs-base lh-base fw-medium text-muted mb-0">
            Tables transformed with dynamic features.
          </h2>
        </div>
        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-alt">
            <li class="breadcrumb-item">
              <a class="link-fx" href="javascript:void(0)">Tables</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
              DataTables
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">

    <!-- Dynamic Table Responsive -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">
          Dynamic Table <small>DataTables Responsive Mode</small>
        </h3>
      </div>
      <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
          <thead>
            <tr>
              <th class="text-center"></th>
              <th>Name</th>
              <th>Email</th>
              <th style="width: 15%;">Access</th>
              <th style="width: 15%;">Registered</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center fs-sm">1</td>
              <td class="fw-semibold fs-sm">Danielle Jones</td>
              <td class="fs-sm">customer1@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td>
                <span class="text-muted fs-sm">10 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">2</td>
              <td class="fw-semibold fs-sm">Henry Harrison</td>
              <td class="fs-sm">customer2@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">5 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">3</td>
              <td class="fw-semibold fs-sm">Thomas Riley</td>
              <td class="fs-sm">customer3@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">10 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">4</td>
              <td class="fw-semibold fs-sm">Alice Moore</td>
              <td class="fs-sm">customer4@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">9 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">5</td>
              <td class="fw-semibold fs-sm">Wayne Garcia</td>
              <td class="fs-sm">customer5@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td>
                <span class="text-muted fs-sm">8 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">6</td>
              <td class="fw-semibold fs-sm">David Fuller</td>
              <td class="fs-sm">customer6@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
              </td>
              <td>
                <span class="text-muted fs-sm">6 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">7</td>
              <td class="fw-semibold fs-sm">Betty Kelley</td>
              <td class="fs-sm">customer7@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">10 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">8</td>
              <td class="fw-semibold fs-sm">Brian Cruz</td>
              <td class="fs-sm">customer8@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">10 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">9</td>
              <td class="fw-semibold fs-sm">Adam McCoy</td>
              <td class="fs-sm">customer9@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">9 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">10</td>
              <td class="fw-semibold fs-sm">Jack Estrada</td>
              <td class="fs-sm">customer10@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">3 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">11</td>
              <td class="fw-semibold fs-sm">Marie Duncan</td>
              <td class="fs-sm">customer11@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
              </td>
              <td>
                <span class="text-muted fs-sm">7 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">12</td>
              <td class="fw-semibold fs-sm">Betty Kelley</td>
              <td class="fs-sm">customer12@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">5 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">13</td>
              <td class="fw-semibold fs-sm">Carol Ray</td>
              <td class="fs-sm">customer13@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">5 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">14</td>
              <td class="fw-semibold fs-sm">Marie Duncan</td>
              <td class="fs-sm">customer14@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td>
                <span class="text-muted fs-sm">3 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">15</td>
              <td class="fw-semibold fs-sm">Judy Ford</td>
              <td class="fs-sm">customer15@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">9 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">16</td>
              <td class="fw-semibold fs-sm">Betty Kelley</td>
              <td class="fs-sm">customer16@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">7 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">17</td>
              <td class="fw-semibold fs-sm">Danielle Jones</td>
              <td class="fs-sm">customer17@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">4 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">18</td>
              <td class="fw-semibold fs-sm">Marie Duncan</td>
              <td class="fs-sm">customer18@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td>
                <span class="text-muted fs-sm">6 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">19</td>
              <td class="fw-semibold fs-sm">Lori Moore</td>
              <td class="fs-sm">customer19@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">3 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">20</td>
              <td class="fw-semibold fs-sm">Amanda Powell</td>
              <td class="fs-sm">customer20@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
              </td>
              <td>
                <span class="text-muted fs-sm">9 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">21</td>
              <td class="fw-semibold fs-sm">Brian Cruz</td>
              <td class="fs-sm">customer21@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">6 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">22</td>
              <td class="fw-semibold fs-sm">Marie Duncan</td>
              <td class="fs-sm">customer22@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
              </td>
              <td>
                <span class="text-muted fs-sm">4 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">23</td>
              <td class="fw-semibold fs-sm">Jeffrey Shaw</td>
              <td class="fs-sm">customer23@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">3 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">24</td>
              <td class="fw-semibold fs-sm">Lori Grant</td>
              <td class="fs-sm">customer24@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">10 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">25</td>
              <td class="fw-semibold fs-sm">Marie Duncan</td>
              <td class="fs-sm">customer25@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">8 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">26</td>
              <td class="fw-semibold fs-sm">Megan Fuller</td>
              <td class="fs-sm">customer26@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">5 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">27</td>
              <td class="fw-semibold fs-sm">Alice Moore</td>
              <td class="fs-sm">customer27@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td>
                <span class="text-muted fs-sm">9 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">28</td>
              <td class="fw-semibold fs-sm">Thomas Riley</td>
              <td class="fs-sm">customer28@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">9 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">29</td>
              <td class="fw-semibold fs-sm">Barbara Scott</td>
              <td class="fs-sm">customer29@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td>
                <span class="text-muted fs-sm">9 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">30</td>
              <td class="fw-semibold fs-sm">Danielle Jones</td>
              <td class="fs-sm">customer30@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
              </td>
              <td>
                <span class="text-muted fs-sm">4 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">31</td>
              <td class="fw-semibold fs-sm">Alice Moore</td>
              <td class="fs-sm">customer31@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td>
                <span class="text-muted fs-sm">9 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">32</td>
              <td class="fw-semibold fs-sm">Jose Parker</td>
              <td class="fs-sm">customer32@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">3 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">33</td>
              <td class="fw-semibold fs-sm">Lori Grant</td>
              <td class="fs-sm">customer33@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">9 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">34</td>
              <td class="fw-semibold fs-sm">Laura Carr</td>
              <td class="fs-sm">customer34@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td>
                <span class="text-muted fs-sm">5 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">35</td>
              <td class="fw-semibold fs-sm">Lori Moore</td>
              <td class="fs-sm">customer35@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
              </td>
              <td>
                <span class="text-muted fs-sm">4 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">36</td>
              <td class="fw-semibold fs-sm">Lori Grant</td>
              <td class="fs-sm">customer36@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td>
                <span class="text-muted fs-sm">8 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">37</td>
              <td class="fw-semibold fs-sm">Susan Day</td>
              <td class="fs-sm">customer37@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">5 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">38</td>
              <td class="fw-semibold fs-sm">Carl Wells</td>
              <td class="fs-sm">customer38@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td>
                <span class="text-muted fs-sm">2 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">39</td>
              <td class="fw-semibold fs-sm">Wayne Garcia</td>
              <td class="fs-sm">customer39@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
              </td>
              <td>
                <span class="text-muted fs-sm">4 days ago</span>
              </td>
            </tr>
            <tr>
              <td class="text-center fs-sm">40</td>
              <td class="fw-semibold fs-sm">Jose Parker</td>
              <td class="fs-sm">customer40@example.com</td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
              </td>
              <td>
                <span class="text-muted fs-sm">6 days ago</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Dynamic Table Responsive -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->


@endsection