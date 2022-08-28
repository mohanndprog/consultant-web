$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
$(function () {
    $("#addSubjectOfConsultation").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            method: $(this).attr("method"),
            data: new FormData(this),
            processData: false,
            dataType: "json",
            contentType: false,
            beforeSend: function () {
                $(document).find("span.error-text").text("");
            },
            success: function (data) {
                if (data.status == 0) {
                    $.each(data.error, function (prefix, val) {
                        $("span." + prefix + "_error").text(val[0]);
                    });
                } else {
                    alert(data.msg);
                }
            },
        });
    });

    $(".btn-subject-remove").on("click", function (e) {
        e.preventDefault();
        const id = $(this).attr("subject");
        var confirmation = confirm(
            "Are you sure you want to remove this Subject?"
        );
        if (confirmation) {
            $.ajax({
                type: "GET",
                url: "/admin/remove-subjects/" + id,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (data) {
                    $(".subject-" + id).remove();
                    alert(data.msg);
                },
                error: function (e) {
                    alert(e.msg);
                },
            });
        } else {
            return false;
        }
    });
});
