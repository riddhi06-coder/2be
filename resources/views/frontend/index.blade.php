<!doctype html>
<html lang="en">
    
<head>
    @include('components.frontend.head')
</head>


    <section class="header-wrap">
        <div class="container-fluid text-center">
        <div class="header-img-box">
            <img src="{{ asset('frontend/assets/images/logo.webp') }}" class="img-responsive">
            <h1>2BE Pumping Log</h1>
        </div>
        </div>
    </section>

    <section class="log-btn-wrap log-btn-home-wrap">
        <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ms-md-3">
            <div class="log-box">
                <h2>Wastewater Pumping and Hauling Source Report</h2>
                <a href="{{  route('frontend.log_waste_disposal') }}" class="btn">Log a Waste Disposal</a>
            </div>
            </div>
        </div>
        </div>
    </section>



    @include('components.frontend.footer')


    @include('components.frontend.main-js')

</body>

</html>