
$(document).ready(function() {
    $("#registrationForm").submit(function(event) {
        var name = $("#fullname").val().trim();
        var phone = $("#phone").val();

        if (name == "" || !/^[0-9]{10}$/.test(phone)) {
            alert(name == "" ? "Please enter your full name." : "Please enter a valid 10 digit phone number.");
            event.preventDefault();
            return;
        }

        alert("Your registration has been submitted successfully!");
    });
});
