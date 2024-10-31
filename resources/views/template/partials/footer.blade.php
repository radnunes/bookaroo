<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/simplebar.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker.js') }}"></script>
<script src="{{ asset('js/jquery.stickOnScroll.js') }}"></script>
<script src="{{ asset('js/tinycolor-min.js') }}"></script>
<script src="{{ asset('js/config.js') }}"></script>
<script src="{{ asset('js/d3.min.js') }}"></script>
<script src="{{ asset('js/topojson.min.js') }}"></script>
<script src="{{ asset('js/datamaps.all.min.js') }}"></script>
<script src="{{ asset('js/datamaps-zoomto.js') }}"></script>
<script src="{{ asset('js/datamaps.custom.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>

<script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
</script>
<script src="{{ asset('js/gauge.min.js') }}"></script>
<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/apexcharts.custom.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.js') }}"></script>
<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script src="{{ asset('js/uppy.min.js') }}"></script>
<script src="{{ asset('js/quill.min.js') }}"></script>

<script>
    $('.select2').select2(
        {
            theme: 'bootstrap4',
        });
    $('.select2-multi').select2(
        {
            multiple: true,
            theme: 'bootstrap4',
        });
    $('.time-input').timepicker(
        {
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
        });
    /** date range picker */
    if ($('.datetimes').length)
    {
        $('.datetimes').daterangepicker(
            {
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale:
                    {
                        format: 'M/DD hh:mm A'
                    },
            });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end)
    {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker(
        {
            startDate: start,
            endDate: end,
            ranges:
                {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
        }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000",
        {
            placeholder: "__/__/____"
        });
    $('.input-zip').mask('00000-000',
        {
            placeholder: "____-___"
        });
    $('.input-money').mask("#.##0,00",
        {
            reverse: true
        });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
        {
            translation:
                {
                    'Z':
                        {
                            pattern: /[0-9]/,
                            optional: true
                        }
                },
            placeholder: "___.___.___.___"
        });
    // editor
    var editor = document.getElementById('editor');
    if (editor)
    {
        var toolbarOptions = [
            [
                {
                    'font': []
                }],
            [
                {
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [
                {
                    'header': 1
                },
                {
                    'header': 2
                }],
            [
                {
                    'list': 'ordered'
                },
                {
                    'list': 'bullet'
                }],
            [
                {
                    'script': 'sub'
                },
                {
                    'script': 'super'
                }],
            [
                {
                    'indent': '-1'
                },
                {
                    'indent': '+1'
                }], // outdent/indent
            [
                {
                    'direction': 'rtl'
                }], // text direction
            [
                {
                    'color': []
                },
                {
                    'background': []
                }], // dropdown with defaults from theme
            [
                {
                    'align': []
                }],
            ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
            {
                modules:
                    {
                        toolbar: toolbarOptions
                    },
                theme: 'snow'
            });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function()
    {
        'use strict';
        window.addEventListener('load', function()
        {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form)
            {
                form.addEventListener('submit', function(event)
                {
                    if (form.checkValidity() === false)
                    {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
    var uptarg = document.getElementById('drag-drop-area');
    if (uptarg)
    {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
            {
                inline: true,
                target: uptarg,
                proudlyDisplayPoweredByUppy: false,
                theme: 'dark',
                width: 770,
                height: 210,
                plugins: ['Webcam']
            }).use(Uppy.Tus,
            {
                endpoint: 'https://master.tus.io/files/'
            });
        uppy.on('complete', (result) =>
        {
            console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
    }
</script>
<script src="{{ asset('js/apps.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="{{ asset('https://www.googletagmanager.com/gtag/js?id=UA-56159088-1')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag()
    {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
    document.querySelector('.nav-link').addEventListener('click', function(e) {
        e.preventDefault(); // This will stop the link from working
    });
</script>
<script>
    // Initialize pageLoaded flag
    let pageLoaded = false;

    // Select the checkbox and the date pickers
    const toggleCheckbox = document.getElementById("toggleSingleDate");
    const singleDatePicker = document.getElementById("singleDatePicker");
    const startDatePicker = document.getElementById("startDatePicker");
    const endDatePicker = document.getElementById("endDatePicker");

    // Select date input fields
    const startingDateInput = document.getElementById("startingDate");
    const endingDateInput = document.getElementById("endingDate");
    const singleDateInput = document.getElementById("singleDate");

    /*
    document.querySelector("button[type='reset']").addEventListener("click", function() {
        // Clear Select2 fields
        $(".select2, .select2-multi").val(null).trigger("change");

        // Clear text fields, date inputs, and checkboxes
        document.getElementById("filterText").value = '';
        document.getElementById("filterISBN").value = '';
        document.getElementById("filterMin").value = '';
        document.getElementById("filterMax").value = '';
        document.getElementById("singleDate").value = '';
        document.getElementById("startingDate").value = '';
        document.getElementById("endingDate").value = '';
        document.getElementById("toggleSingleDate").checked = false;

        // Hide single date picker and show range date picker
        document.getElementById("singleDatePicker").style.display = 'none';
        document.getElementById("startDatePicker").style.display = 'block';
        document.getElementById("endDatePicker").style.display = 'block';
    });
    */


    document.getElementById("filterForm").addEventListener("reset", function(event) {
        // Use setTimeout to ensure this code runs after the form reset
        setTimeout(function() {
            // Clear Select2 fields
            $(".select2, .select2-multi").val(null).trigger("change");

            // Clear text fields, date inputs, and checkboxes
            document.getElementById("filterText").value = '';
            document.getElementById("filterISBN").value = '';
            document.getElementById("filterMin").value = '';
            document.getElementById("filterMax").value = '';
            document.getElementById("singleDate").value = '';
            document.getElementById("startingDate").value = '';
            document.getElementById("endingDate").value = '';
            // Hide single date picker and show range date picker
            document.getElementById("singleDatePicker").style.display = 'none';
            document.getElementById("startDatePicker").style.display = 'block';
            document.getElementById("endDatePicker").style.display = 'block';
        }, 0);
    });

    // Function to check which date input should be displayed
    function setDatePickerVisibility() {
        const singleDateValue = singleDateInput.value; // Check the value of the single date input
        const startDateValue = startingDateInput.value;
        const endDateValue = endingDateInput.value;

        // Check if single date has a value
        if (singleDateValue) {
            singleDatePicker.style.display = "block";  // Show single date picker
            startDatePicker.style.display = "none";    // Hide start date picker
            endDatePicker.style.display = "none";      // Hide end date picker
            toggleCheckbox.checked = true;             // Check the checkbox
        } else if (startDateValue || endDateValue) {
            singleDatePicker.style.display = "none";   // Hide single date picker
            startDatePicker.style.display = "block";   // Show start date picker
            endDatePicker.style.display = "block";     // Show end date picker
            toggleCheckbox.checked = false;            // Uncheck the checkbox
        } else {
            singleDatePicker.style.display = "none";   // Hide single date picker
            startDatePicker.style.display = "block";   // Show start date picker
            endDatePicker.style.display = "block";     // Show end date picker
            toggleCheckbox.checked = false;            // Uncheck the checkbox
        }
    }

    // Add event listener to toggle visibility on checkbox change
    toggleCheckbox.addEventListener("change", function() {
        if (this.checked) {
            singleDatePicker.style.display = "block";  // Show single date picker
            startDatePicker.style.display = "none";    // Hide start date picker
            endDatePicker.style.display = "none";      // Hide end date picker
        } else {
            singleDatePicker.style.display = "none";   // Hide single date picker
            startDatePicker.style.display = "block";   // Show start date picker
            endDatePicker.style.display = "block";     // Show end date picker
        }
    });

    // Function to clear date if invalid
    function checkDateValidity() {
        const startDateValue = startingDateInput.value;
        const endDateValue = endingDateInput.value;

        const startDate = new Date(startDateValue);
        const endDate = new Date(endDateValue);

        // If starting date is selected
        if (startDateValue) {
            // Only clear ending date if it's selected and start date is after end date
            if (endDateValue && startDate > endDate) {
                endingDateInput.value = "";  // Clear ending date
            }
        }

        // If ending date is selected
        if (endDateValue) {
            // Only clear starting date if it's selected and end date is before start date
            if (startDateValue && endDate < startDate) {
                startingDateInput.value = ""; // Clear starting date
            }
        }
    }

    // Function to reset dates based on input changes
    function resetOtherDates(inputChanged) {
        if (inputChanged === 'single') {
            // If single date changes, reset start and end date
            startingDateInput.value = "";
            endingDateInput.value = "";
        } else if (inputChanged === 'range') {
            // If starting or ending date changes, reset single date
            singleDateInput.value = "";
        }
        // Re-evaluate which date picker should be shown
        setDatePickerVisibility();
    }

    // Add event listeners for date inputs
    startingDateInput.addEventListener("change", function() {
        if (pageLoaded) {
            checkDateValidity();
            resetOtherDates('range');
        }
    });

    endingDateInput.addEventListener("change", function() {
        if (pageLoaded) {
            checkDateValidity();
            resetOtherDates('range');
        }
    });

    singleDateInput.addEventListener("change", function() {
        if (pageLoaded) {
            resetOtherDates('single');
        }
    });

    // Call the function on page load to set the initial visibility
    window.onload = function() {
        setDatePickerVisibility();
        pageLoaded = true; // Set flag to true after page has loaded
    }; // Ensure this runs when the page loads
</script>




