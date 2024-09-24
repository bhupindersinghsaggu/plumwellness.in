<?php
include('web/header.php');
?>


<div class="col-xl-6 col-lg-6 mt-4 mt-xl-0">
    <div class="appoinment-box">
        <form action="#" class="pq-applyform" novalidate="">
            <div class="pq-appointment">
                <div class="row">
                    <div class="col-lg-12">
                        <label>
                            <span class="pq-appointment-title"> Select Department </span>
                            <span class="form-control-wrap your-country">
                                <select name="your-country" class="form-select" aria-invalid="false">
                                    <option value="Nutrition">Nutrition</option>
                                    <option value="sports Nutrition">sports Nutrition</option>
                                    <option value="Dietetics">Dietetics</option>
                                </select>
                            </span>
                        </label>
                    </div>

                    <div class="col-lg-12">
                        <input type="text" id="patient-name" name="Patient"
                            class="form-control pq-bg-white paitent-name-field" placeholder="Patient Name" required="">
                    </div>
                    <div class="col-lg-12">
                        <input type="text" id="phone-number" name="Phone"
                            class="form-control pq-bg-white phone-number-field" aria-invalid="false" placeholder="Phone"
                            required="">
                        <div data-lastpass-icon-root=""
                            style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <textarea cols="40" id="message" rows="10" aria-invalid="false" class="form-control pq-bg-white"
                            placeholder="Type Appintment Note" autocomplete="off" spellcheck="false"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <a class="pq-button form-btn" href="appointment.html">
                            <div class="pq-button-block">
                                <span class="pq-button-text me-0">Book Appointment</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<html>

<head>
</head>
<style>
* {
    font-family: Arial, sans-serif;
}

form {
    margin: 15px 5px;
    width: 100%;
    font-size: 16px;
}

form h1 {
    text-align: center;
}

form label {
    display: block;
    margin-bottom: 5px;
}

form input,
form textarea {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
    resize: vertical;
}

form button {
    background: #4CAF50;
    color: white;
    padding: 10px 15px;
    margin-top: 5px;
    border: none;
    cursor: pointer;
}

form button:hover {
    background: green;
}
</style>

<body>
    <form>
        <h1>Send Data To WhatsApp</h1>
        <label for="">Name</label>
        <input type="text" class="name">

        <label for="">Email</label>
        <input type="text" class="email">

        <label for="">Country</label>
        <input type="text" class="country">

        <label for="">Message</label>
        <textarea class="message"></textarea>
        <button type="button" onclick="sendwhatsapp();">Send Via WhatsApp</button>
    </form>

    <script>
    function sendwhatsapp() {
        var phonenumber = "+919877800150";

        var name = document.querySelector(".name").value;
        var email = document.querySelector(".email").value;
        var country = document.querySelector(".country").value;
        var message = document.querySelector(".message").value;

        var url = "https://wa.me/" + phonenumber + "?text=" +
            "*Name :* " + name + "%0a" +
            "*Email :* " + email + "%0a" +
            "*Country:* " + country + "%0a" +
            "*Message :* " + message +
            "%0a%0a" +
            "This is an example of send HTML form data to WhatsApp";

        window.open(url, '_blank').focus();
    }
    </script>
</body>

</html>


<?php
include('web/footer.php');
?>