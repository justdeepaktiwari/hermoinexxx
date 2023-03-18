$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
$("body").on("click", ".addToCart", function (e) {
    e.preventDefault();
    let buttonPosition = $(this);
    let addCartUrl = buttonPosition.attr("data-addCartUrl");
    let addCartType = buttonPosition.attr("data-addCartType");
    let itemId = buttonPosition.attr("data-itemId");
    let quantity = 1;
    $.ajax({
        type: "POST",
        url: addCartUrl,
        data: { addCartType: addCartType, itemId: itemId, quantity: quantity },
        success: function (data) {
            console.log(data.success);
        },
    });
});
