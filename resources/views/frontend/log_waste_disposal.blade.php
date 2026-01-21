<!doctype html>
<html lang="en">
    
<head>
    @include('components.frontend.head')

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>


 <section class="header-wrap">
    <div class="container-fluid text-center">
      <div class="header-img-box">
        <img src="{{ asset('frontend/assets/images/logo.webp') }}" class="img-responsive">
        <h1>2BE Pumping Log</h1>
      </div>
    </div>
  </section>

 <section class="log-btn-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-0"></div>
      <div class="col-md-8 col-sm-12">
        <div class="form-box">
          <h2>Log Waste Disposal Details</h2>

          <form action="#">
            <div class="row">

              <!-- Date of Pickup -->
              <div class="form-group col-md-4">
                <label>Date of Pickup/Pumping</label>
                <div class="input-group">
                  <input type="text"
                         id="date_of_pickup"
                         class="form-control"
                         placeholder="MM/DD/YYYY"
                         required>
                  <span class="input-group-text custom-icon" id="calendar-icon-pickup">
                    <i class="fa-solid fa-calendar-days"></i>
                  </span>
                </div>
              </div>

              <!-- Generator Name -->
              <div class="form-group col-md-4">
                <label>Facility/Owner Name </label>
                <input type="text"
                       class="form-control"
                       name="generator_name"
                       id="generator_name"
                       placeholder="Enter Facility/Owner name"
                       required>
              </div>

              <!-- Waste Type -->
              <div class="form-group col-md-4">
                <label>Waste Type</label>
                <input type="text"
                       class="form-control"
                       name="waste_type"
                       id="waste_type"
                       placeholder="e.g. Septage, Grease"
                       required>
              </div>

              <!-- Generator Address -->
              <div class="form-group col-md-6">
                <label>Address</label>
                <textarea class="form-control"
                          name="address"
                          id="generator_address"
                          placeholder="Street, City, State, ZIP"
                          required></textarea>
              </div>

              <!-- Volume Pumped -->
              <div class="form-group col-md-6">
                <label>Volume Pumped</label>
                <input type="number"
                       class="form-control"
                       name="volume_pumped"
                       id="volume_pumped"
                       placeholder="Enter volume (gallons)"
                       required>
              </div>

              <!-- Date of Discharge -->
              <div class="form-group col-md-6">
                <label>Date of Discharge</label>
                <div class="input-group">
                  <input type="text"
                         id="date_of_discharge"
                         class="form-control"
                         placeholder="MM/DD/YYYY"
                         required>
                  <span class="input-group-text custom-icon" id="calendar-icon-discharge">
                    <i class="fa-solid fa-calendar-days"></i>
                  </span>
                </div>
              </div>

              <!-- Discharge Site -->
              <div class="form-group col-md-6">
                <label>Discharge Site</label>
                <select class="form-select"
                        name="discharge_site"
                        id="discharge_site"
                        required>
                  <option value="" disabled selected>Select discharge site</option>
                  <option value="Hilo">Hilo</option>
                  <option value="Kona">Kona</option>
                </select>
              </div>

              <!-- Transporter Name -->
              <div class="form-group col-md-6">
                <label>Driver’s Initials</label>
                <input type="text"
                       class="form-control"
                       name="transporter_name"
                       id="transporter_name"
                       placeholder="Enter Driver’s Initials"
                       required>
              </div>

              <!-- Disposal Facility Name -->
              <!-- <div class="form-group col-md-6">
                <label>Disposal Facility Name</label>
                <input type="text"
                       class="form-control"
                       name="disposal_facility_name"
                       id="disposal_facility_name"
                       placeholder="Enter facility name"
                       required>
              </div> -->

              <!-- Transporter Registration Number -->
              <div class="form-group col-md-6">
                <label>Vehicle License Number</label>
                <input type="text"
                       class="form-control"
                       name="Vehicle License Number"
                       id="transporter_registration_number"
                       placeholder="License number"
                       required>
              </div>

              <!-- Disposal Facility Address -->
              <!-- <div class="form-group col-md-12">
                <label>Disposal Facility Address</label>
                <textarea class="form-control"
                          name="disposal_facility_address"
                          id="disposal_facility_address"
                          placeholder="Street, City, State, ZIP"
                          required></textarea>
              </div> -->
 
            </div>

            <div class="btn-center text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>



    @include('components.frontend.footer')


    @include('components.frontend.main-js')

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


     <script>
      flatpickr("#date_of_pickup", {
        dateFormat: "m/d/Y",
        allowInput: true
      });
    
      document.getElementById('calendar-icon').addEventListener('click', function () {
        document.getElementById('date_of_pickup')._flatpickr.open();
      });
    </script>
    
      <script>
      flatpickr("#date_of_discharge", {
        dateFormat: "m/d/Y",
        allowInput: true
      });
    
      document.getElementById('calendar-icon').addEventListener('click', function () {
        document.getElementById('date_of_discharge')._flatpickr.open();
      });
    </script>

</body>

</html>