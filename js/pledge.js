define(["plugins/validate"], function (require) {
jQuery(document).ready(function ($) {

var form = $("form"),
    amount = $("#entry_2"),
    freq = $("#entry_3"),
    total = $(".total"),
    output = $(".total .output");

// Update the total based on input
var updateTotal = function (event) {
    var a = parseFloat(amount.val());

    if (isFinite(a)) {
        switch (freq.val()) {
        case "Weekly": a = a * 52; break;
        case "Monthly": a = a * 12; break;
        default: break;
        }
        output.html(a.toFixed(2));
        total.show();
    } else { total.hide(); }
};

// Do stuff and watch for events
updateTotal();
form.validate();
amount.bind("keyup", updateTotal);
freq.bind("change", updateTotal).bind("click", updateTotal);

});
});
