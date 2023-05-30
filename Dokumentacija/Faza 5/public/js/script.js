$(document).ready(function () {

    function setPriceRadio() {
        if ($("#criteriaPrice").prop("checked") == true) {
            $("#inlineRadio1").prop("disabled", false);
            $("#inlineRadio2").prop("disabled", false);

            $("#inlineRadio2").prop("checked", true);
        } else {
            $("#inlineRadio1").prop("disabled", true);
            $("#inlineRadio2").prop("disabled", true);

            $("#inlineRadio1").prop("checked", false);
            $("#inlineRadio2").prop("checked", false);
        }
    }

    function setSpeedRadio() {
        if ($("#criteriaSpeed").prop("checked") == true) {
            $("#inlineRadio3").prop("disabled", false);
            $("#inlineRadio4").prop("disabled", false);

            $("#inlineRadio4").prop("checked", true);
        } else {
            $("#inlineRadio3").prop("disabled", true);
            $("#inlineRadio4").prop("disabled", true);

            $("#inlineRadio3").prop("checked", false);
            $("#inlineRadio4").prop("checked", false);
        }
    }

    function setQualityRadio() {
        if ($("#criteriaQuality").prop("checked") == true) {
            $("#inlineRadio5").prop("disabled", false);
            $("#inlineRadio6").prop("disabled", false);

            $("#inlineRadio6").prop("checked", true);
        } else {
            $("#inlineRadio5").prop("disabled", true);
            $("#inlineRadio6").prop("disabled", true);

            $("#inlineRadio5").prop("checked", false);
            $("#inlineRadio6").prop("checked", false);
        }
    }

    $("#criteriaPrice").on("click", setPriceRadio);

    $("#criteriaSpeed").on("click", setSpeedRadio);

    $("#criteriaQuality").on("click", setQualityRadio);

    $("#submit-btn").on("click", function () {
        $("#criteriaPrice").prop("checked", false);
        $("#criteriaSpeed").prop("checked", false);
        $("#criteriaQuality").prop("checked", false);
    });

    rowNumber = 10;
    function loadNextBatchOfResults() {
        $.ajax({
            url: "fetchNextResults",
            data: {
                rowNumber: rowNumber
            },
            success: function (result) {
                $("#searchResultsContainer").append(result);
                rowNumber += 10;
            }
        });
    }

    $(window).scroll(function () {
        if ($(document).height() - $(this).height() <= $(this).scrollTop()) {
            loadNextBatchOfResults();
        };
    });

});