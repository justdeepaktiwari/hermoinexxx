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
    buttonPosition.html("Adding...");
    $.ajax({
        type: "POST",
        url: addCartUrl,
        data: { addCartType: addCartType, itemId: itemId, quantity: quantity },
        success: function (data) {
            console.log(data.success);
            buttonPosition.html("ADD CART");
        },
    });
});
$("body").on("click", ".removeToCart", function (e) {
    e.preventDefault();
    let buttonPosition = $(this);
    let removeCartUrl = buttonPosition.attr("data-removeCartUrl");
    let removeCartType = buttonPosition.attr("data-removeCartType");
    let itemId = buttonPosition.attr("data-itemId");
    let quantity = 1;
    swal({
        title: "Are you sure?",
        text: "Once Remove, you will not be able to recover.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: "POST",
                url: removeCartUrl,
                data: {
                    removeCartType: removeCartType,
                    itemId: itemId,
                    quantity: quantity,
                },
                success: function (data) {
                    buttonPosition.parents(".itemcontainer").remove();
                    $(".totalCartCount").html(data.cart_count);
                    // swal("Poof! Your imaginary file has been deleted!", {
                    //     icon: "success",
                    // });
                    console.log(data.success);
                },
            });
        } else {
            swal("Your imaginary file is safe!");
        }
    });
});
