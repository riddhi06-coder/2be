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
                <div class="col-6">
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">

                    <div class="d-flex justify-content-between align-items-start mb-4">

                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('manage-disposal-details.index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Disposal Details
                                </li>
                            </ol>
                        </nav>

                        <!-- Right Controls -->
                        <div class="d-flex align-items-center gap-2">

                            <!-- Export CSV -->
                            <a href="{{ route('manage-disposal-details.export', ['year' => request('year')]) }}"
                            class="btn btn-sm btn-success mb-3">
                                Export
                            </a>

                            <!-- Export PDF -->
                            <a href="#"
                            class="btn btn-sm btn-danger mb-3">
                                Generate PDF
                            </a>

                            <!-- Year Filter Card -->
                            <div class="card shadow-sm border-0">
                                <div class="card-body d-flex align-items-center gap-2 py-2 px-3">
                                    <span class="fw-semibold text-muted small">Year</span>

                                    <form method="GET" action="{{ route('manage-disposal-details.index') }}">
                                        <select name="year"
                                                class="form-select form-select-sm"
                                                style="width: 140px;"
                                                onchange="this.form.submit()">
                                            <option value="">All</option>
                                            @foreach($years as $year)
                                                <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                                                    {{ $year }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                            </div>

                        </div>


                    </div>



                    <div class="table-responsive custom-scrollbar">
                    
                        <table class="display" id="basic-1">
                        
                            <thead>
                                <tr>
                                    <th>#</th>

                                    <th>Date of Pickup</th>
                                    <th>Generator Name</th>
                                    <th>Waste Type</th>
                                    <th>Volume Pumped <br>(In Gallons)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($disposals as $index => $disposal)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($disposal->date_of_pickup)->format('d-m-Y') }}</td>
                                        <td>{{ $disposal->generator_name }}</td>
                                        <td>{{ $disposal->waste_type }}</td>
                                        <td>{{ $disposal->volume_pumped }}</td>
                                        <td>
                                            <a href="{{ route('manage-disposal-details.edit', $disposal->id) }}" class="btn btn-sm btn-primary">Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            
                        </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <!-- footer start-->
             @include('components.backend.footer')
      </div>
    </div>

        @include('components.backend.main-js')

</body>

</html>