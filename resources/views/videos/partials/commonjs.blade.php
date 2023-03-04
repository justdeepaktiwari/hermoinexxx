<script>
        $(document).ready(function() {
        $(".toogle-btn span").click(function(e) {

            if($(window).width() < 600){
                $(".small-size-screen-sidebar").slideDown("easing");
                return;
            }
            
            if ($(this).hasClass("active")) {
                $(".toggle-with-button").animate({
                    width: "100px"
                })

                $(".toggle-with-button").find("div span")
                    .addClass("d-none").parent()
                    .addClass("justify-content-center")
                    .removeClass("justify-content-start");

                $(this).removeClass("active");
            } else {
                $(".toggle-with-button").animate({
                    width: "200px"
                })

                $(".toggle-with-button").find("div span")
                    .removeClass("d-none").parent()
                    .addClass("justify-content-start")
                    .removeClass("justify-content-center");

                $(this).addClass("active");
            }
        });
    });

    function slideUp() {
        $(".small-size-screen-sidebar").slideUp("easing");
        return;
    }
    
    function changeText(elem) {
        $("#on-focus-show").val(elem);
        window.location.href = '{{ route("user-videos.search") }}?search=' + elem;
    }

    function removeItem(elem) {
        let parent_elem = $(elem).parent();
        
        $.ajax({
            type: "GET",
            url: "{{ route('user-videos.search') }}",
            data: {
                delete: parent_elem.find(".selected-elem").find("span").text()
            },
            dataType: "JSON",
            success: function(response) {
                if(parent_elem.siblings().length > 1){
                    parent_elem.remove();
                }else{
                    parent_elem.parent().remove();
                }
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

        let position = $(".user-tab").position().top;
        $(".top-change").css("top", position+2);
    });

    $(window).resize(function () { 
        let position = $(".user-tab").position().top;
        $(".top-change").css("top", position+2);
    });
</script>