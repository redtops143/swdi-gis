<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWDI-GIS</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        #loading {
            display: none;
            font-weight: bold;
            color: red;
        }
    </style>

</head>
<body>

    <h2>Generate SWDI GIS</h2>

    <form id="locationForm">
        @csrf
        <label for="province">Select Province:</label>
       
        <select name="province" id="province">
            <option value="">-- Select Province --</option>
           
            @foreach($provinces as $province)
                <option value="{{ $province->PROVINCE }}">{{ $province->PROVINCE }}</option>
            @endforeach

        </select>

        <label for="municipality">Select Municipality:</label>
        <select name="municipality" id="municipality">
            <option value="">-- Select Municipality --</option>
        </select>

        <p id="loading">Generating PDF... <span id="percentage">0%</span></p>

        <button type="submit">Submit</button>

        

    </form>

    <script>
        $(document).ready(function () {
            $('#province').change(function () {
                var provinceId = $(this).val();
                $('#municipality').html('<option value="">Loading...</option>');


                $.ajax({
                    url: "{{ route('get.municipalities') }}",
                    type: "GET",
                    data: { PROVINCE: provinceId },
                    success: function (data) {
                        $('#municipality').html('<option value="">-- Select Municipality --</option>');
                        $.each(data, function (key, municipality) {
                            $('#municipality').append('<option value="' + municipality.MUNICIPALITY + '">' + municipality.MUNICIPALITY + '</option>');
                        });
                    }
                });
            });


            $('#locationForm').submit(function (e) {
                e.preventDefault(); // Prevent default form submission
                $('#submitBtn').prop('disabled', true); // Disable button
                $('#loading').show();
                $('#percentage').text('0%');

                var percent = 0;
                var interval = setInterval(function () {
                    if (percent < 90) {
                        percent += 10;
                        $('#percentage').text(percent + '%');
                    }
                }, 500); // Simulate progress every 500ms

                // Call the PDF generation after loading starts
                $.ajax({
                    url: "{{ route('generate.pdf') }}",
                    type: "POST",
                    data: $('#locationForm').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    xhrFields: {
                        responseType: 'blob' // Handle PDF response
                    },
                    success: function (response) {
                        clearInterval(interval); // Stop progress bar updates
                        $('#percentage').text('100%'); // Set progress to 100%

                        var blob = new Blob([response], { type: 'application/pdf' });
                        var link = document.createElement('a');
                        link.href = window.URL.createObjectURL(blob);
                        link.download = 'SWDI-GIS ' + $('#province').val() + '_' + $('#municipality').val() + '.pdf';
                        link.click();

                        $('#loading').text('PDF Generated!');
                        setTimeout(() => {
                            $('#loading').hide();
                            $('#submitBtn').prop('disabled', false);
                        }, 1000);
                    },
                    error: function () {
                        alert('Error generating PDF');
                        clearInterval(interval);
                        $('#loading').hide();
                        $('#submitBtn').prop('disabled', false);
                    }
                });
            });
        });
    </script>

</body>
</html>