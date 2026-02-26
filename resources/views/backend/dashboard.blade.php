<!doctype html>
<html lang="en">
    
<head>
    @include('components.backend.head')

</head>
	   
		@include('components.backend.header')

	  <!--start sidebar wrapper-->	
	  @include('components.backend.sidebar')
	  <!--end sidebar wrapper-->



      <div class="page-body"> 
          <div class="container-fluid">            
            <div class="page-title"> 
              <div class="row">
                
                
              </div>
            </div>
          </div>


          <!-- Container-fluid starts -->
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-xl-3 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-project border-b-primary border-2"><span class="f-light f-w-500 f-14">Total Project</span>
                        <div class="project-details"> 
                          <div class="project-counter"> 
                            <h2 class="f-w-600">1,523</h2><span class="f-12 f-w-400">(This month)</span>
                          </div>
                          <div class="product-sub bg-primary-light">
                            <svg class="invoice-icon">
                              <use href="{{ asset('admin/assets/svg/icon-sprite.svg#color-swatch') }}"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles">
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-3 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-Progress border-b-warning border-2"> <span class="f-light f-w-500 f-14">In Progress</span>
                        <div class="project-details">
                          <div class="project-counter">
                            <h2 class="f-w-600">836</h2><span class="f-12 f-w-400">(This month) </span>
                          </div>
                          <div class="product-sub bg-warning-light"> 
                            <svg class="invoice-icon">
                              <use href="{{ asset('admin/assets/svg/icon-sprite.svg#tick-circle') }}"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles">
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-Complete border-b-secondary border-2"><span class="f-light f-w-500 f-14">Complete</span>
                        <div class="project-details">
                          <div class="project-counter">
                            <h2 class="f-w-600">475</h2><span class="f-12 f-w-400">(This month) </span>
                          </div>
                          <div class="product-sub bg-secondary-light"> 
                            <svg class="invoice-icon">
                              <use href="{{ asset('admin/assets/svg/icon-sprite.svg#add-square') }}"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles"> 
                          <li class="bubble"> </li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"> </li>
                          <li class="bubble"></li>
                          <li class="bubble"> </li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Upcoming</span>
                        <div class="project-details"> 
                          <div class="project-counter">
                            <h2 class="f-w-600">189</h2><span class="f-12 f-w-400">(This month) </span>
                          </div>
                          <div class="product-sub bg-light-light"> 
                            <svg class="invoice-icon">
                              <use href="{{ asset('admin/assets/svg/icon-sprite.svg#edit-2') }}"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles"> 
                          <li class="bubble"> </li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
             
            </div>
          </div>


          <div class="container-fluid my-5">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="action-bg text-center">
                          <h3 class="mb-4 fw-bold text-white">
                              Quick Actions
                          </h3>

                          <div class="d-flex justify-content-center gap-4 flex-wrap">
                              <a href="{{ route( 'frontend.log_waste_disposal' ) }}" class="btn action-btn waste-btn" target="__blank">
                                  ♻ Log a Waste Disposal
                              </a>

                              <a href="#"
                                class="btn action-btn report-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#monthlyReportModal">
                                  📊 Generate Monthly Report
                              </a>

                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <!-- Container-fluid Ends -->
          </div>
        <!-- footer start-->
        @include('components.backend.footer')
      </div>
      
    </div>


    <div class="modal fade" id="monthlyReportModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content border-0 shadow-lg">

              <!-- Modal Header -->
              <div class="modal-header bg-light">
                  <h5 class="modal-title fw-bold">
                      Generate Monthly Source Report
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal Body -->
              <form method="POST" action="{{ route('generate.monthly.report') }}" id="monthlyReportForm">
                  @csrf

                  <div class="modal-body">
                      <div class="row g-3">


                          @php
                              $availableMonths = DB::table('waste_disposal_details')
                                  ->selectRaw('YEAR(date_of_pickup) as year, MONTH(date_of_pickup) as month')
                                  ->groupBy('year', 'month')
                                  ->orderBy('year', 'desc')
                                  ->orderBy('month', 'desc')
                                  ->get();
                          @endphp

                          <!-- Year -->
                          <div class="col-md-6">
                              <label class="form-label">Year</label>
                              <select name="year" id="yearSelect" class="form-select" required>
                                  <option value="">Select Year</option>

                                  @foreach($availableMonths->pluck('year')->unique() as $year)
                                      <option value="{{ $year }}">{{ $year }}</option>
                                  @endforeach

                              </select>
                          </div>

                          <!-- Month -->
                          <div class="col-md-6">
                            <label class="form-label">Month</label>
                            <select name="month" id="monthSelect" class="form-select" required disabled>
                                <option value="">Select Month</option>

                                @foreach($availableMonths as $item)
                                    <option value="{{ $item->month }}"
                                            data-year="{{ $item->year }}">
                                        {{ \Carbon\Carbon::createFromDate($item->year, $item->month, 1)->format('F') }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                          <!-- SOH DOH Registration -->
                          <div class="col-md-6">
                              <label class="form-label">SOH DOH Registration Number</label>
                              <input type="text"
                                    name="soh_doh_registration"
                                    class="form-control"
                                    placeholder="Enter SOH DOH Registration #"
                                    required>
                          </div>

                          <!-- COH Permit -->
                          <div class="col-md-6">
                              <label class="form-label">COH Permit #</label>
                              <input type="text"
                                    name="coh_permit"
                                    class="form-control"
                                    placeholder="Enter COH Permit #"
                                    required>
                          </div>

                          <!-- Signed By -->
                          <div class="col-md-6">
                              <label class="form-label">Signed By</label>
                              <input type="text"
                                    name="signed_by"
                                    class="form-control"
                                    placeholder="Full Name"
                                    required>
                          </div>

                          <!-- Title -->
                          <div class="col-md-6">
                              <label class="form-label">Title</label>
                              <input type="text"
                                    name="title"
                                    class="form-control"
                                    placeholder="Title / Position"
                                    required>
                          </div>

                          <!-- Date -->
                          <div class="col-md-6">
                              <label class="form-label">Date</label>
                              <input type="date"
                                    name="signed_date"
                                    class="form-control"
                                    value="{{ now()->toDateString() }}"
                                    required>
                          </div>

                      </div>
                  </div>

                  <!-- Modal Footer -->
                  <div class="modal-footer bg-light">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Cancel
                      </button>
                      <button type="submit" class="btn btn-primary" id="generateBtn">
                          Generate PDF Report
                      </button>
                  </div>

              </form>

          </div>
      </div>
    </div>

        
    
    @include('components.backend.main-js')

    <!---- SUbmit button validations---->
    <script>
      document.getElementById('monthlyReportForm').addEventListener('submit', function () {

          let btn = document.getElementById('generateBtn');

          btn.disabled = true;
          btn.innerHTML = 'Generating...';

          // Reload page after 3 seconds
          setTimeout(function () {
              window.location.reload();
          }, 3000);

      });
    </script>

    
    <!---- Dynamic month fetching as per the year---->
    <script>
      document.getElementById('yearSelect').addEventListener('change', function () {

          let selectedYear = this.value;
          let monthSelect = document.getElementById('monthSelect');
          let options = monthSelect.querySelectorAll('option');

          monthSelect.value = "";
          monthSelect.disabled = true;

          options.forEach(function(option) {

              if (option.value === "") return;

              if (option.getAttribute('data-year') === selectedYear) {
                  option.style.display = "block";
                  monthSelect.disabled = false;
              } else {
                  option.style.display = "none";
              }
          });

      });
    </script>

        
</body>

</html>