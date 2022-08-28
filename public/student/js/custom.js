// CONSULTANT PROFILE

$('input[type=radio][name=course]').change(function () {
    $("#selected-course").html(this.nextElementSibling.innerHTML);
});

$('input[type=radio][name=order]').change(function () {
    $("#selected-order").html(this.nextElementSibling.innerHTML);
});

$('input[type=radio][name=payment-method]').change(function () {
    $("#selected-payment-method").html(this.nextElementSibling.innerHTML);
});

// FIND CONSULTANT PAGE

$("course-selector").change(function () {
    console.log(this.value);
});

$(document).ready(function () {
    $('input[type="radio"]').click(function () {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".payform").not(targetBox).hide();
        $(targetBox).show();
        $("input").attr("required", true);
    });
});

// Only allow numeric characters in the credict card input field

$(".number").add(".month").add(".year").add(".cvc").keyup(function () {
    this.value = this.value.replace(/[^0-9]/g, '');
});

// Limit the length of the credit card input field
$(".number").attr("maxlength", "16");
$(".month").attr("maxlength", "2");
$(".year").attr("maxlength", "2");
$(".cvc").attr("maxlength", "3");

// check the month is not greater than 12
$(".month").keyup(function () {
    if (this.value > 12) {
        this.value = "";
        toastr.error("Please enter a valid expiry month");
    }
});

// Check the expire year is greater than the current year and year should be 2 digits
$(".year").keyup(function () {
    if (this.value < new Date().getFullYear().toString().substr(-2) && this.value.length == 2) {
        this.value = "";
        toastr.error("Please enter a valid expiry year");
    }
});