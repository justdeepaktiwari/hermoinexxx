$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
$("body").on("click", ".addToCart", function (e) {
    e.preventDefault();
    let buttonPosition = $(this);
    let productKey = buttonPosition.attr("data-productKey");
    let addCartUrl = buttonPosition.attr("data-addCartUrl");
    let addCartType = buttonPosition.attr("data-addCartType");
    let itemId = buttonPosition.attr("data-itemId");
    let quantity = $("." + productKey + "quantity").val();
    let productSize = $("." + productKey + "size").val();
    let productColor = $("." + productKey + "color").val();
    buttonPosition.html("Adding...");
    $.ajax({
        type: "POST",
        url: addCartUrl,
        data: {
            addCartType: addCartType,
            itemId: itemId,
            quantity: quantity,
            productSize: productSize,
            productColor: productColor,
        },
        success: function (data) {
            buttonPosition.html("ADD CART");
            $(".totalCart").html(data.cart_count);
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
                    $(".totalCart").html(data.cart_count);
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

$("body").on("change", ".updateCart", function (e) {
    e.preventDefault();
    let buttonPosition = $(this);
    let productKey = buttonPosition.attr("data-productKey");
    let addCartUrl = buttonPosition.attr("data-addCartUrl");
    let addCartType = buttonPosition.attr("data-addCartType");
    let itemId = buttonPosition.attr("data-itemId");
    let quantity = $("." + productKey + "quantity").val();
    let productSize = $("." + productKey + "size").val();
    let productColor = $("." + productKey + "color").val();
    console.log("Cart change");
    $.ajax({
        type: "POST",
        url: addCartUrl,
        data: {
            addCartType: addCartType,
            itemId: itemId,
            quantity: quantity,
            productSize: productSize,
            productColor: productColor,
        },
        success: function (data) {
            $(".totalCart").html(data.cart_count);
            $("." + productKey + "totalPrice").html(data.price);
        },
    });
});
$("body").on("click", ".updateCartQuantity", function (e) {
    e.preventDefault();
    let btnPosition = $(this);
    let buttonPosition = $("." + btnPosition.attr("data-updateCartClass"));
    let productKey = buttonPosition.attr("data-productKey");
    let addCartUrl = buttonPosition.attr("data-addCartUrl");
    let addCartType = buttonPosition.attr("data-addCartType");
    let itemId = buttonPosition.attr("data-itemId");
    let quantity = $("." + productKey + "quantity").val();
    let productSize = $("." + productKey + "size").val();
    let productColor = $("." + productKey + "color").val();
    console.log("Cart change");
    $.ajax({
        type: "POST",
        url: addCartUrl,
        data: {
            addCartType: addCartType,
            itemId: itemId,
            quantity: quantity,
            productSize: productSize,
            productColor: productColor,
        },
        success: function (data) {
            $(".totalCart").html(data.cart_count);
            $("." + productKey + "totalPrice").html(data.price);
        },
    });
});

$("body").on("click", ".proceedToCheckOut", function (e) {
    e.preventDefault();

    let proceedToCheckOutUrl = $(this).attr("data-proceedToCheckOutUrl");
    let addressid = $('input[name="addressid"]').val();
    $.ajax({
        type: "POST",
        url: proceedToCheckOutUrl,
        data: {
            addressid: addressid,
        },
        success: function (data) {
            $(".productCheckOutCard").html(data.checkoutform);
            $(".add-card").addClass("hide");
            $(".payment-card").removeClass("hide");
        },
    });
});
$("body").on("click", ".checkout", function (e) {
    e.preventDefault();
    console.log("Click");
    let form = $("#" + $(this).attr("data-formId"))[0];
    let formData = new FormData(form);
    let afterPaymentredirectUrl = $(this).attr("data-afterPaymentredirectUrl");
    console.log(afterPaymentredirectUrl);
    $(".payment-error").remove();
    $.ajax({
        type: "POST",
        url: $(this).attr("data-checkoutUrl"),
        data: formData,
        dataType: "JSON",
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            // tata.success("Success!", "Payment completed successfullly!");
            window.location.href = afterPaymentredirectUrl;
        },
        error: function (err, xhr) {
            console.log(err);
            if (err.responseJSON.message === undefined) {
                // tata.error("Error!", err.responseJSON);
            } else {
                // tata.error("Error!", err.responseJSON.message);
            }

            var errors = err.responseJSON.errors;

            $.each(errors, function (indexInArray, valueOfElement) {
                console.log(indexInArray);
                $("[name='" + indexInArray + "']").after(
                    `<div class="small text-danger payment-error">${valueOfElement[0]}</div>`
                );
            });
        },
    });
});
