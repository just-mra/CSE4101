$("button").click(function() {
    // How many to be checked?
    var must_check = 5;
    // Count checkboxes
    var checkboxes = $(".checkboxes input").size();
    // Check random checkboxes until "must_check" limit reached
    while ($(".checkboxes input:checked").size() < must_check) {
        // Pick random checkbox
        var random_checkbox = Math.floor(Math.random() * checkboxes) + 1;
        // Check it
        $(".checkboxes input:nth-child(" + random_checkbox + ")").prop("checked", true);
    }
});