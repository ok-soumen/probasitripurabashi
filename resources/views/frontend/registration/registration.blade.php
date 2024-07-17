@extends('frontend.index')
@section('content')
<section class="register-sec">
    <div class="register-box">

        <form action="{{ route('Add.registration') }}" method="post" name="test-form" id="regForm">
           @csrf
          
            <div style="text-align:center;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>

            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <div class="register-title">
                    <h2>Stage 1: Personal Details</h2>
                    <p><span>*</span>Please fill out all fields for successful submission of the form.</p>
                </div>
                <input type="hidden" name="randomid" id="">
             

                <div class="register-grid">
                    <div class="register-grid-field">
                        <label for=""> Name<span>*</span></label>
                        <input type="text" name="name" id="" placeholder="Enter full name" oninput="this.className = ''"
                            required>

                    </div>
                    <div class="register-grid-field">
                        <label for="id_type"> Phone<span>*</span></label>
                        <!---  <input type="number" name="phone" id="id_type" placeholder="Enter phone number">-->
                        <input type="number" name="phone" id="name" placeholder="phone number" autocomplete="off"
                            required>

                    </div>

                    <div class="register-grid-field">
                        <label for=""> Email<span>*</span></label>
                        <input type="email" name="email" id="" placeholder="Enter Email" oninput="this.className = ''"
                            required>
                            @error('email')
                            <script>
            if (confirm('The email is already in use. Please choose another email. Click OK to proceed to registration.')) {
                window.location.href = '{{ route('registration') }}'; 
            }
        </script>
                            @enderror

                    </div>
                    <div class="register-grid-field">
                        <label for="gender"> Gender<span>*</span></label>
                        <select name="gender" id="gender" oninput="this.className = ''" required>
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>

                    </div>
                </div>
                <h6>Current Address / Residential / Work Address*</h6>
                <div class="register-grid">
                    <div class="register-grid-field">
                        <label for="">Current address<span>*</span></label>
                        <input type="text" name="address" id="" placeholder="Enter current address"
                            oninput="this.className = ''" required>


                    </div>
                    <div class="register-grid-field">

                        <label for="">Country<span>*</span></label>
                        <!--- <input type="tel" name="country" id="" placeholder="Enter your Country"
                                            oninput="this.className = ''">-->
                        <select id="country" name="country" oninput="this.className = ''"></select>

                    </div>


                    <div class="register-grid-field">
                        <label for="id_type"> State<span>*</span></label>
                        <!--- <select name="id_type" id="id_type" required oninput="this.className = ''">
                                        </select>--->
                        <select name="state" id="state" oninput="this.className = ''"></select>

                    </div>
                    <div class="register-grid-field">
                        <label for="">District<span>*</span></label>
                        <input type="text" name="district" id="" placeholder="Enter your district"
                            oninput="this.className = ''" required>

                    </div>

                    <div class="register-grid-field">
                        <label for="">City<span>*</span></label>
                        <input type="text" name="city" id="" placeholder="Enter your City" oninput="this.className = ''"
                            required>

                    </div>
                    <div class="register-grid-field">
                        <label for="">Pin/Zip<span>*</span></label>
                        <input type="number" name="pin" id="" placeholder="Enter pincode"
                            oninput="this.className = ''" required>

                    </div>
                </div>

                <h6>Applicant’s Address in Tripura*</h6>
                <div class="register-grid">
                    <div class="register-grid-field">
                        <label for=""> Tripura address<span>*</span></label>
                        <input type="text" name="current_address" id="" placeholder="Enter tripura address"
                            oninput="this.className = ''" required>

                    </div>
                    <div class="register-grid-field">
                        <label for="">District<span>*</span></label>
                        <input type="text" name=" current_district" id="" placeholder="Enter your district"
                            oninput="this.className = ''" required>

                    </div>
                    <div class="register-grid-field">
                        <label for="">City<span>*</span></label>
                        <input type="text" name="current_city" id="" placeholder="Enter your City"
                            oninput="this.className = ''" required>

                    </div>
                    <div class="register-grid-field">
                        <label for="">Pin<span>*</span></label>
                        <input type="number" name="current_pin" id="" placeholder="Enter pincode"
                            oninput="this.className = ''" required>

                    </div>
                </div>

                <h5>Instructions :</h5>
                <ol>
                    <li>Please fill out all fields for successful submission of  the form.</li>
                </ol>



            </div>
            <div class="tab">
                <div class="register-title">
                    <h2>Stage 2: Questionnaire</h2>
                    <p><span>*</span>Please fill out all fields for successful submission of the form.</p>
                </div>
                <div class="register-grid">

                    <div class="register-grid-field">
                        <label for="id_type"> Roots (family) present in Tripura?<span>*</span></label>
                        <select name="roots" id="id_type" required oninput="this.className = ''">
                            <option value=""> Do you still have any roots (family) present in Tripura?</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>

                    </div>
                    <div class="register-grid-field">
                        <label for="id_type"> Current occupation status<span>*</span></label>
                        <select name="occupation" id="id_type" oninput="this.className = ''" required>
                            <option value=""> Choose</option>
                            <option value="employee">Employee</option>
                            <option value="student">Student</option>
                            <option value="business">Business</option>
                            <option value="others">Others</option>
                        </select>

                    </div>
                    <div class="register-grid-field">
                        <label for="id_type"> Nature of occupation<span>*</span></label>
                        <select name="nature_occupation" id="id_type" oninput="this.className = ''" required>
                            <option value=""> Choose</option>
                            <option value="permanent">permanent</option>
                            <option value="temporary">temporary</option>
                        </select>

                    </div>
                    <div class="register-grid-field">
                        <label for=""> Industry of occupation<span>*</span></label>
                        <input type="text" name="industry_occupation" id=""
                            placeholder="Enter Industry of occupation" oninput="this.className = ''">

                    </div>
                    <div class="register-grid-field">
                        <label for=""> Your last visit to the state<span>*</span></label>
                        <input type="number" name="last_visited" id="" placeholder="Enter Year"
                            oninput="this.className = ''">

                    </div>
                    <div class="register-grid-field">
                        <label for="id_type"> Reason for moving out of the state<span>*</span></label>
                        <select name="reason_moving" id="id_type" required
                            oninput="this.className = ''">
                            <option value=""> Choose</option>
                            <option value="job">Job</option>
                            <option value="study">Study</option>
                            <option value="others">Others</option>
                        </select>

                    </div>
                    <div class="register-grid-field">
                        <label for=""> Best time of the year, you wish to visit Tripura<span>*</span></label>
                        <select name="time_visit" id="id_type" required
                            oninput="this.className = ''">
                            <option value=""> Choose</option>
                            <option value="Spring(March, April, May)">Spring(March, April, May)</option>
                            <option value="Summer(June, July, August)">Summer(June, July, August)</option>
                            <option value="Monsoon(June, July, August,September)">Monsoon(June, July,
                                August,September)</option>
                            <option value="Autumn(September, October, November)">Autumn(September, October,
                                November)</option>
                            <option value="Winter(December, January, February)">Winter(December, January, February)
                            </option>
                        </select>

                    </div>
                </div>
                <h5>Instructions :</h5>
                <ol>
                    <li>Please fill out all fields for successful submission of  the form.</li>
                </ol>
            </div>
            <div class="tab">
                <div class="register-title">
                    <h2>Stage 3: Suggestions</h2>
                    <p><span>*</span>Please fill out all fields for successful submission of the form.</p>
                </div>
                <div class="register-grid">


                    <div class="register-grid-field">
                        <label for=""> Which areas government should work on?<span>*</span></label>
                        <input type="text" name="govt_should" id="id_type"
                            placeholder="Enter which areas government should work on">

                    </div>
                    <div class="register-grid-field">
                        <label for=""> Any suggestion to solve an existing problem in Tripura?<span>*</span></label>
                        <input type="text" name="solve_existing"
                            placeholder="Any suggestion to solve an existing problem in Tripura" id="id_type" required>

                    </div>
                    <div class="register-grid-field">
                        <label for=""> What are the things of Tripura which you
                            can refer to friends outside of the state?<span>*</span></label>
                        <input type="text"
                            name="things_refer_outside"
                            placeholder="Enter best things of Tripura" id="id_type" required>

                    </div>

                </div>
                <h5>Instructions :</h5>
                <ol>
                    <li>Please fill out all fields for successful submission of  the form.</li>
                    <li>You will be redirected to the "Confirmation Page" after successful submission
                        of the application.</li>
                </ol>
            </div>

            <div style="overflow:auto;">
                <div>
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="submit" name="submit " id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>

        </form>
    </div>
</section>
<script language="javascript">
    populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
        populateCountries("country2");
        populateCountries("country2");
</script>
{{---<script>

        document.getElementById('regForm').addEventListener('submit', function () {
            document.getElementById('randomID').value = generateRandomID();
        });

        function generateRandomID() {
            return Date.now().toString(32) + Math.random().toString(32).substr(2);
        }

</script>---}}

<!---------------------------- form wizerd Js ------------------------------->

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n);
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName("tab");

        // Validate the current tab before proceeding to the next one:
        if (n == 1 && !validateForm()) return;

        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab += n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields in the current tab
        var x, y, i, valid = true, emailValid = true, phoneValid = true, pinValid = true;

        // Get the current tab
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");

        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].hasAttribute("required") && y[i].value === "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }

        // Check every select field in the current tab:
        var selects = x[currentTab].getElementsByTagName("select");
        for (i = 0; i < selects.length; i++) {
            // If a select is not selected...
            if (selects[i].hasAttribute("required") && selects[i].value === "") {
                // add an "invalid" class to the select container:
                selects[i].parentNode.className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }

        // Specific validation for the email field in Step 1
        if (currentTab === 0) {
            var emailField = document.querySelector('input[name="email"]');
            if (emailField && !validateEmail(emailField.value)) {
                emailField.className += " invalid";
                emailValid = false;
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Email',
                    text: 'Please enter a valid email address.',
                });
                valid = false; // Update valid status if email validation fails
            }
        }

        // Specific validation for the phone number field in Step 1
        if (currentTab === 0) {
            var phoneField = document.querySelector('input[name="phone"]');
            if (phoneField && phoneField.value.length !== 10) {
                phoneField.className += " invalid";
                phoneValid = false;
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Phone Number',
                    text: 'Phone number must be exactly 10 digits long.',
                });
                valid = false; // Update valid status if phone number validation fails
            }
        }

        // Specific validation for the pin field in Step 1 (Pin/Zip)
        if (currentTab === 0) {
            var pinField = document.querySelector('input[name="pin"]');
            if (pinField && pinField.value.length !== 6) {
                pinField.className += " invalid";
                pinValid = false;
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Pin/Zip',
                    text: 'Pin/Zip code must be exactly 6 digits long.',
                });
                valid = false; // Update valid status if pin validation fails
            }
        }

        // Specific validation for the pin field in Step 1 (Pin)

        if (currentTab === 0) {
            var currentPinField = document.querySelector('input[name="current_pin"]');
            if (currentPinField && currentPinField.value.length !== 6) {
                currentPinField.className += " invalid";
                pinValid = false;
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Pin',
                    text: 'Pin must be exactly 6 digits long.',
                });
                valid = false; // Update valid status if pin validation fails
            }
        }

        // Show SweetAlert2 alert if form is invalid and email, phone number, pin, and select options are valid
        if (!valid && emailValid && phoneValid && pinValid) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'All fields are required before proceeding!',
            });
        }

        return valid && emailValid && phoneValid && pinValid; // return the valid status
    }

    function validateEmail(email)
 {
        // Regular expression for basic email validation
        var re = /\S+@\S+\.\S+/;
        return re.test(email)
;
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length;  i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>
@endsection
