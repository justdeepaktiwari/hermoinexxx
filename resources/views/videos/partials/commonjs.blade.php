<script>
    function changeText(elem) {
        $("#on-focus-show").val(elem);
        window.location.href = '{{ route("user-videos.search") }}?search=' + elem;
    }

    function removeItem(elem) {
        $.ajax({
            type: "GET",
            url: "{{ route('user-videos.search') }}",
            data: {
                delete: $(elem).parent().find(":first-child").find("span").text()
            },
            dataType: "JSON",
            success: function(response) {
                if (!$(elem.parentElement.parentElement).siblings().length) {
                    elem.parentElement.parentElement.parentElement.remove();
                }
                elem.parentElement.parentElement.remove();
            }
        });
    }

    $(document).ready(function() {
        $("#on-focus-show").keyup(function(e) {
            if ($("#on-focus-show").val().length > 3) {
                $.ajax({
                    type: "GET",
                    url: "{{ route('search.query') }}",
                    data: {
                        search: $("#on-focus-show").val()
                    },
                    dataType: "JSON",
                    success: function(response) {
                        var search_text = "";
                        $.each(response, function(indexInArray, valueOfElement) {
                            search_text += `<div class="my-2">
                                                <div class="tags p-1 rounded-1 border text-white d-inline-block mx-2" role="button"  onclick="changeText(this.innerText)">${valueOfElement}</div>
                                            </div>`;
                        });
                        if (search_text) {
                            $(".search-bar-desc").html(search_text);
                        } else {
                            $(".search-bar-desc").html("No Result Found!");
                        }
                    }
                });
            }
        });
    });

    $(window).resize(function () { 
        let position = $(".user-tab").position().top;
        $(".top-change").css("top", position+2);
    });

    let position = $(".user-tab").position().top;
    $(".top-change").css("top", position+2);
</script>