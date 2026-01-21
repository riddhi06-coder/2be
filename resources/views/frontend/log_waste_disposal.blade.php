<!doctype html>
<html lang="en">
    
<head>
    @include('components.frontend.head')

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

      <style>
        .error-text {
            color: #bd414d;
            font-size: 15px;
            margin-bottom: 20px;
        }
      </style>

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
                    <label>Date of Pickup/Pumping <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="text"
                            id="date_of_pickup"
                            class="form-control"
                            placeholder="MM/DD/YYYY"
                            >
                      <span class="input-group-text custom-icon" id="calendar-icon-pickup">
                        <i class="fa-solid fa-calendar-days"></i>
                      </span>
                    </div>
                  </div>

                  <!-- Generator Name -->
                  <div class="form-group col-md-4">
                    <label>Facility/Owner Name <span class="text-danger">*</span> </label>
                    <input type="text"
                          class="form-control"
                          name="generator_name"
                          id="generator_name"
                          placeholder="Enter Facility/Owner name"
                          >
                  </div>

                  <!-- Waste Type -->
                  <div class="form-group col-md-4">
                    <label>Waste Type <span class="text-danger">*</span> </label>
                    <input type="text"
                          class="form-control"
                          name="waste_type"
                          id="waste_type"
                          placeholder="e.g. Septage, Grease"
                          >
                  </div>

                  <!-- Generator Address -->
                  <div class="form-group col-md-6">
                    <label>Address <span class="text-danger">*</span> </label>
                    <textarea class="form-control"
                              name="address"
                              id="generator_address"
                              placeholder="Street, City, State, ZIP"
                              ></textarea>
                  </div>

                  <!-- Volume Pumped -->
                  <div class="form-group col-md-6">
                    <label>Volume Pumped <span class="text-danger">*</span> </label>
                    <input type="number"
                          class="form-control"
                          name="volume_pumped"
                          id="volume_pumped"
                          placeholder="Enter volume (gallons)"
                          >
                  </div>


                  <div class="form-group col-md-6">
                    <label>Unit <span class="text-danger">*</span>  </label>
                    <input type="text"
                        class="form-control"
                        name="Unit"
                        id="unit"
                        placeholder="Unit (e.g. A-12 / 3B)">

                  </div>



                  <div class="form-group col-md-6">
                    <label>Zip <span class="text-danger">*</span> </label>
                    <input type="text"
                        class="form-control"
                        name="zip"
                        id="zip"
                        maxlength="10"
                        placeholder="ZIP Code"
                        oninput="this.value = this.value.replace(/[^0-9\-]/g,'')">

                  </div>

                  <!-- Date of Discharge -->
                  <div class="form-group col-md-6">
                    <label>Date of Discharge <span class="text-danger">*</span> </label>
                    <div class="input-group">
                      <input type="text"
                            id="date_of_discharge"
                            class="form-control"
                            placeholder="MM/DD/YYYY"
                            >
                      <span class="input-group-text custom-icon" id="calendar-icon-discharge">
                        <i class="fa-solid fa-calendar-days"></i>
                      </span>
                    </div>
                  </div>

                  <!-- Discharge Site -->
                  <div class="form-group col-md-6">
                    <label>Discharge Site <span class="text-danger">*</span> </label>
                    <select class="form-select"
                            name="discharge_site"
                            id="discharge_site"
                            >
                      <option value="" disabled selected>Select discharge site</option>
                      <option value="Hilo">Hilo</option>
                      <option value="Kona">Kona</option>
                    </select>
                  </div>

                  <!-- Transporter Name -->
                  <div class="form-group col-md-6">
                    <label>Driver’s Initials <span class="text-danger">*</span> </label>
                    <input type="text"
                          class="form-control"
                          name="transporter_name"
                          id="transporter_name"
                          placeholder="Enter Driver’s Initials"
                          >
                  </div>

                  <!-- Transporter Registration Number -->
                  <div class="form-group col-md-6">
                    <label>Vehicle License Number <span class="text-danger">*</span> </label>
                    <input type="text"
                          class="form-control"
                          name="Vehicle License Number"
                          id="transporter_registration_number"
                          placeholder="License number"
                          >
                  </div>

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


      <!---- for js validations---->
      <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();

            let isValid = true;

            // Remove old errors
            document.querySelectorAll('.error-text').forEach(el => el.remove());

            // Helpers
            const showError = (element, message) => {
                const error = document.createElement('div');
                error.className = 'error-text';
                error.innerText = message;
                element.closest('.form-group').appendChild(error);
                isValid = false;
            };

            const today = new Date();
            today.setHours(0,0,0,0);

            const lettersOnly = /^[A-Za-z\s]+$/;
            const initialsPattern = /^[A-Z]{2,3}$/;
            const usLicensePattern = /^[A-Z0-9]{5,8}$/;
            const unitPattern = /^[A-Za-z0-9\s\-\/]+$/;
            const usZipPattern = /^\d{5}(-\d{4})?$/;


            // Date of Pickup
            const pickupInput = document.getElementById('date_of_pickup');
            const pickupDate = new Date(pickupInput.value);
            if (!pickupInput.value) {
                showError(pickupInput, "Date of Pickup is required.");
            } else if (pickupDate > today) {
                showError(pickupInput, "Date of Pickup cannot be in the future.");
            }

            // Facility / Owner Name
            const generatorName = document.getElementById('generator_name');
            if (!generatorName.value.trim()) {
                showError(generatorName, "Facility/Owner Name is required.");
            } else if (!lettersOnly.test(generatorName.value.trim())) {
                showError(generatorName, "Only letters and spaces allowed.");
            }

            // Waste Type
            const wasteType = document.getElementById('waste_type');
            if (!wasteType.value.trim()) {
                showError(wasteType, "Waste Type is required.");
            } else if (!lettersOnly.test(wasteType.value.trim())) {
                showError(wasteType, "Only letters and spaces allowed.");
            }

            // Address
            const address = document.getElementById('generator_address');
            if (!address.value.trim()) {
                showError(address, "Address is required.");
            }

            // Volume Pumped
            const volume = document.getElementById('volume_pumped');
            if (!volume.value) {
                showError(volume, "Volume Pumped is required.");
            } else if (isNaN(volume.value) || Number(volume.value) < 0) {
                showError(volume, "Must be a non-negative number.");
            }

            // Date of Discharge
            const dischargeInput = document.getElementById('date_of_discharge');
            const dischargeDate = new Date(dischargeInput.value);
            if (!dischargeInput.value) {
                showError(dischargeInput, "Date of Discharge is required.");
            } else if (dischargeDate > today) {
                showError(dischargeInput, "Date of Discharge cannot be in the future.");
            }

            // Discharge Site
            const dischargeSite = document.getElementById('discharge_site');
            if (!dischargeSite.value) {
                showError(dischargeSite, "Please select a discharge site.");
            }

            // Driver’s Initials
            const driverInitials = document.getElementById('transporter_name');
            driverInitials.value = driverInitials.value.toUpperCase();
            if (!driverInitials.value.trim()) {
                showError(driverInitials, "Driver’s Initials are required.");
            } else if (!initialsPattern.test(driverInitials.value)) {
                showError(driverInitials, "Use 2–3 uppercase letters only.");
            }

            // Vehicle License Number
            const license = document.getElementById('transporter_registration_number');
            license.value = license.value.toUpperCase();
            if (!license.value.trim()) {
                showError(license, "Vehicle License Number is required.");
            } else if (!usLicensePattern.test(license.value)) {
                showError(license, "Invalid US license number format.");
            }


            // Unit
            const unit = document.getElementById('unit');
            if (!unit.value.trim()) {
                showError(unit, "Unit is required.");
            } else if (!unitPattern.test(unit.value.trim())) {
                showError(unit, "Unit can contain letters, numbers, - or / only.");
            }

            // ZIP Code
            const zip = document.getElementById('zip');
            if (!zip.value.trim()) {
                showError(zip, "ZIP code is required.");
            } else if (!usZipPattern.test(zip.value.trim())) {
                showError(zip, "Enter a valid US ZIP (12345 or 12345-6789).");
            }



            // Submit if valid
            if (isValid) {
                this.submit();
            }
        });
      </script>




</body>

</html>