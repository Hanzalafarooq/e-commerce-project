<footer>
    <!-- place footer here -->
</footer>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

<script>
    $(document).ready(function() {
        $('#category').on('change', function() {
            var cat_id = $(this).val();
            // alert(cat_id);

            $.ajax({
                url: "getsubcategories",
                type: 'GET',
                data: {
                    cat_id: cat_id
                },
                dataType: 'json', // Change this to 'xml' if the server returns XML data
                success: function(data) {
                    // console.log(data);
                    $('#subcategory').empty();

                    // Iterate through the data and add options to the sub_categories select
                    $.each(data, function(index, subcategory) {
                        $('#subcategory').append('<option value="' + subcategory
                            .id + '">' + subcategory.sub_category + '</option>');
                    });

                }
            });

        });
    });
</script>
<script src="{{ asset('js/script.js') }}"></script>



</body>

</html>
