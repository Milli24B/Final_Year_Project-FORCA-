<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FORCA. | Forcast</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img\logo.jpg') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Vendor CSS Files -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body>
    {{-- @dump($categories) --}}
    <!-- ======= Header ======= -->
    @include('common_componets.header(predict)')
    <!-- End Header -->

    <main id="main">


        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Try a Prediction</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li><a href="/Dashboard">Dashboard</a></li>
                        <li>Prediction</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

    </main>
    <!-- End #main -->



    <!--  ======= Prediction section =======  -->
    <section id="prediction" class="prediction">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Prediction</h2>
                <p>Predict Sales</p>
            </div>

            <div class="row mt-5" data-aos="fade-up" data-aos-delay="150">
                <div class="col-md-5">
                    <div class="card h-100">
                        <div class="card-body" style="height: 415px;">
                            <p class="text-right"><b>Try out a product prediction here...</b></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12 mt-3">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Category
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" data-category-id="">Select
                                                        Category</a></li>
                                                @foreach ($categories as $category)
                                                    <li><a class="dropdown-item category-item" href="#"
                                                            data-category-id="{{ $category->id }}">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <select id="productDropdown" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <option value="">Select Product</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Rating_counter -->
                                <div class="col-md-12 mt-3">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number"
                                                data-type="minus">Rating :
                                            </button>
                                        </span>
                                        <input type="number" class="form-control input-number proRate" value="1.0"
                                            min="1.0" max="5.0" step="0.1">
                                        {{-- <span class="input-group-btn"><button type="button" class="btn btn-default btn-number" data-type="plus">+</button></span> --}}
                                    </div>
                                </div>

                                <!-- Rating counting -->

                                <div class="col-md-12 mt-3">
                                    <input type="text" class="form-control proCount" placeholder="Rating count">
                                </div>

                                <!-- Actual price -->

                                <div class="col-md-12 mt-3">
                                    <input type="text" class="form-control proPrice" placeholder="Product price">
                                </div>



                                <!-- Predict Button trigger modal -->
                                <div class="col-md-12 mt-4">
                                    <button type="button" class="proceed-btn" data-bs-toggle="modal"
                                        data-bs-target="#myModal">
                                        Proceed
                                    </button>

                                    <div class="modal fade" id="myModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true"
                                        data-bs-backdrop="false">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> <b>DISCLAIMER </b>
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Modal content goes here -->
                                                    <p>The output is only a prediction with a <b>90.2%</b> accuracy
                                                        !<br>Click <b>PREDICT</b> to countinue.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="dismiss-btn"
                                                        data-bs-dismiss="modal">CLOSE</button>
                                                        <button type="button" class="get-prediction-btn" data-bs-toggle="modal"
                                                        data-bs-target="#myModal">
                                                        PREDICT
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card h-100">

                        <div class="card-body">
                            <b>PREDICTION OUTPUT</b>
                            <div id="prediction-output"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Prediction section -->

        <!-- ======= Contact Section ======= -->
        @include('componets.contact')
        <!-- End Contact Section -->

        <!-- ======= Footer ======= -->
        @include('common_componets.footer')
        <!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>



        <!-- CDN JS Files -->

        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}


        <!-- Template Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- JQuery -->
        <script>
            var token = $("[name='csrf-token']").attr('content');
            $(document).ready(function() {
                $('.category-item').on('click', function(e) {
                    e.preventDefault();

                    var categoryId = $(this).data('category-id');


                    if (categoryId) {
                        console.log(categoryId);


                        $.ajax({
                            url: '{{ route('products') }}',
                            type: 'GET',
                            data: {
                                _token: token,
                                id: categoryId
                            },
                            dataType: 'json',
                            success: function(data) {
                                console.log(data);
                                $('#productDropdown').empty();
                                $.each(data, function(key, value) {
                                    $('#productDropdown').append("<option value=" + value
                                        .id + " class='pro-select'>" + value.name +
                                        "</option>");
                                });
                            },
                            error: function(xhr, status, error) {
                                console.log(xhr);
                                // Handle the error here
                            }
                        });
                    } else {
                        $('#productDropdown').empty();
                    }
                });
            });

            $(document).on('click', '#productDropdown', function() {
                var id = $('#productDropdown').val();
                $.ajax({
                    url: '{{ route('show') }}',
                    type: 'GET',
                    data: {
                        _token: token,
                        id: id,
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('.proRate').val(data.rating);
                        $('.proCount').val(data.rating_count);
                        $('.proPrice').val(data.current_price);



                    },
                    error: function(xhr, status, error) {
                        console.log(xhr);
                        // Handle the error here
                    }
                });
            });

            $(".get-prediction-btn").click(function() {
            var rating = $('.proRate').val();
            var ratingCount = $('.proCount').val();
            var price = $('.proPrice').val();

            // Perform the prediction and handle it as needed

            
            fetch('http://127.0.0.1:8001/predict', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    rating: rating,
                    rating_count: ratingCount,
                    current_price: price
                })
            })
            .then(response => response.json())
            .then(data => {
                var prediction = data.prediction;
                console.log("Prediction:", prediction);

                // Update the prediction output in your HTML
                // Replace 'prediction-output' with the ID or class of your output element
                $("#prediction-output").text("Prediction: " + prediction);

                // Additional code to update other elements or perform actions
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    
        </script>


</body>

</html>
