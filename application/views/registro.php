
<head>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <script src="<?=base_url()?>assets\js\function.js"></script>

    <title>Form Validation</title>
</head>

<body>
    <div class="form-container animate__animated animate__fadeInUp">
        <form id="form" class="form-section">
            <h2>CREATE ACCOUNT</h2>
            <div class="form-input">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" />
                <small>Error message</small>
            </div>
            <div class="form-input">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter Email" />
                <small>Error message</small>
            </div>
            <div class="form-input">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter Password" />
                <small>Error message</small>
            </div>
            <div class="form-input">
                <label for="password2">Confirm Password</label>
                <input type="password" id="password2" placeholder="Enter Password again" />
                <small>Error message</small>
            </div>
            <div class="form-submit">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>


<style>
@import url("https://fonts.googleapis.com/css?family=Varela+Round&display=swap");

        :root {
            --success-color: #2ecc71;
            --error-color: #e74c3c;
        }

        * {
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
            /* Hide scrollbars */
            background: #20002c;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #cbb4d4, #20002c);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #cbb4d4, #20002c);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            font-family: "Varela Round", sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin: 0 0 20px;
        }

        .form-section {
            padding: 30px 40px;
        }

        .form-input {
            margin-bottom: 10px;
            padding-bottom: 20px;
            position: relative;
        }

        .form-input label {
            color: #777;
            display: block;
            margin-bottom: 5px;
        }

        .form-input input {
            border: solid 2px #f0f0f0;
            border-radius: 4px;
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 14px;
            outline: none;
        }

        .form-input input:focus {
            outline: 0;
            border-color: #777;
        }

        .form-input.success input {
            border-color: var(--success-color);
        }

        .form-input.error input {
            border-color: var(--error-color);
        }

        .form-input small {
            color: var(--error-color);
            position: absolute;
            bottom: 0;
            left: 0;
            visibility: hidden;
        }

        .form-input.error small {
            visibility: visible;
        }

        .form-submit button {
            cursor: pointer;
            background-color: #7f45b9;
            border: 2px solid #7f45b9;
            border-radius: 20px;
            color: #fff;
            display: block;
            font-size: 16px;
            padding: 10px;
            margin-top: 20px;
            width: 100%;
            outline: none;
        }
</style>
        

<script>
        const form = document.getElementById('form');
        const usernameInput = document.getElementById('username');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password2');

        // Show input error message
        function showInputError(input, message) {
            const formControl = input.parentElement;
            formControl.className =
                'form-input error animate__animated animate__headShake';
            const small = formControl.querySelector('small');
            small.innerText = message;
            setTimeout(function () {
                formControl.className = 'form-input error';
            }, 500);
        }

        // Show success outline
        function showInputSuccess(input) {
            const formControl = input.parentElement;
            formControl.className =
                'form-input success animate__animated animate__bounceIn ';
        }

        // Check email validity
        function checkEmailValidity(input) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (re.test(input.value)) {
                showInputSuccess(input);
            } else {
                showInputError(input, 'Email is not valid');
            }
        }

        // Check required fields
        function checkRequiredFields(inputArr) {
            inputArr.forEach(function (input) {
                if (input.value.trim() === '') {
                    showInputError(input, `${getFieldName(input)}` + ' is required');
                } else {
                    showInputSuccess(input);
                }
            });
        }

        // Check input length
        function checkInputLength(input, min, max) {
            if (input.value.length < min) {
                showInputError(
                    input,
                    `${getFieldName(input)} must be at least ${min} characters`
                );
            } else if (input.value.length > max) {
                showInputError(
                    input,
                    `${getFieldName(input)} must be less than ${max} characters`
                );
            } else {
                showInputSuccess(input);
            }
        }

        // Check Username
        function checkUsername(input) {
            const usr = /^[0-9a-zA-Z]+$/;
            if (!usr.test(input.value)) {
                showInputError(input, 'Username can only contain letters or numbers');
            }
        }

        // Check passwords match
        function checkPasswordMatch(input1, input2) {
            if (input1.value !== input2.value) {
                showInputError(input2, 'Password does not match');
            }
        }
        // Make fieldname first letter uppercase
        function getFieldName(input) {
            return input.id.charAt(0).toUpperCase() + input.id.slice(1);
        }
        // Event Listeners
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            checkRequiredFields([usernameInput, emailInput, passwordInput, confirmPasswordInput]);
            checkInputLength(usernameInput, 3, 15);
            checkInputLength(passwordInput, 6, 25);
            checkInputLength(confirmPasswordInput, 6, 25);
            checkEmailValidity(emailInput);
            checkPasswordMatch(passwordInput, confirmPasswordInput);
            checkUsername(usernameInput);
        });
    </script>