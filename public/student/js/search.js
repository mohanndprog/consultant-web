//Pagination with no URL Change + Search

$(document).on("click", ".pagination a", function (e) {
    e.preventDefault();
    var page = $(this).attr("href").split("page=")[1];
    getData(page);
});

$("#search").keyup(function () {
    getData(1);
});

$("#findCourse").change(function () {
    getData(1);
});

$("#findCountry").change(function () {
    getData(1);
});

$("#findGender").change(function () {
    getData(1);
});

$("#filterSortBy").change(function () {
    getData(1);
});

$("#filterPrice").change(function () {
    getData(1);
});

$("#filterAvailability").change(function () {
    getData(1);
});

function getData(
    page,
    search,
    findCourse,
    findCountry,
    findGender,
    filterSortBy,
    filterPrice,
    filterAvailability
) {
    var search = $("#search").val();
    var findCourse = $("#findCourse option:selected").val();
    var findCountry = $("#findCountry option:selected").val();
    var findGender = $("#findGender option:selected").val();
    var filterSortBy = $("#filterSortBy option:selected").val();
    var filterPrice = $("#filterPrice option:selected").val();
    var filterAvailability = $("#filterAvailability option:selected").val();
    $.ajax({
        url: "?page=" + page,
        data: {
            search: search,
            findCourse: findCourse,
            findCountry: findCountry,
            findGender: findGender,
            filterSortBy: filterSortBy,
            filterPrice: filterPrice,
            filterAvailability: filterAvailability,
        },
        success: function (data) {
            $(".listing-cover").html(data);
        },
    });
}
