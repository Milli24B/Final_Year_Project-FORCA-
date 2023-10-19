
{{-- <script>
    $(document).ready(function () {
    $('#categoryDropdown').on('change', function() {
        console.log("click");
        var categoryId = $(this).val();
       
        if (categoryId) {
            $.get('/get-products-by-category/' + categoryId, function(data) {
                $('#productDropdown').empty();
                $.each(data, function(key, value) {
                    $('#productDropdown').append('<option value="' + value.id + '">' + value
                        .name + '</option>');
                });
            });
        } else {
            $('#productDropdown').empty();
        }
    });
});


</script> --}}
{{-- <script>
    $(document).ready(function () {
        $('.category-item').on('click', function (e) {
            e.preventDefault();

            var categoryId = $(this).data('category-id');
            console.log(categoryId);

            if (categoryId) {
                $.get('/get-products-by-category/' + categoryId, function (data) {
                    $('#productDropdown').empty();
                    $.each(data, function (key, value) {
                        $('#productDropdown').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                });
            } else {
                $('#productDropdown').empty();
            }
        });
    });
</script>
    
    <script>
    $(document).ready(function () {
        $('.category-item').on('click', function (e) {
            e.preventDefault();

            var categoryId = $(this).data('category-id');
            console.log(categoryId);

            if (categoryId) {
                $.ajax({
                    url: '/get-products-by-category/' + categoryId,
                    type: 'GET',
                    success: function (data) {
                        $('#productDropdown').empty();
                        $.each(data, function (key, value) {
                            $('#productDropdown').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                        // Handle the error here
                    }
                });
            } else {
                $('#productDropdown').empty();
            }
        });
    });

</script> --}}

