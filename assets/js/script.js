$(document).ready(function() {
    var loading = $(".loading");
    $(window).on('beforeunload', function() {
        loading.show();
    });
    loading.delay(loading.attr("delay-hide")).slideUp();
});

//------- Global Navigation -------//
! function(o) {
    "use strict";
    o("body").on("input propertychange", ".floating-label-form-group", function(i) { o(this).toggleClass("floating-label-form-group-with-value", !!o(i.target).val()) }).on("focus", ".floating-label-form-group", function() { o(this).addClass("floating-label-form-group-with-focus") }).on("blur", ".floating-label-form-group", function() { o(this).removeClass("floating-label-form-group-with-focus") });
    if (992 < o(window).width()) {
        var s = o("#mainNav").height();
        o(window).on("scroll", { previousTop: 0 }, function() {
            var i = o(window).scrollTop();
            i < this.previousTop ? 0 < i && o("#mainNav").hasClass("is-fixed") ? o("#mainNav").addClass("is-visible") : o("#mainNav").removeClass("is-visible is-fixed") : i > this.previousTop && (o("#mainNav").removeClass("is-visible"), s < i && !o("#mainNav").hasClass("is-fixed") && o("#mainNav").addClass("is-fixed")), this.previousTop = i
        })
    }
}(jQuery);


//------- Night Mode -------//
function nightMode() {
    var checkBox = document.getElementById("btnDarkMode");
    if (checkBox.checked == true) {
        $("#main-body").addClass("bg-dark");
        $("#main").addClass("bg-dark");
        $("#main").addClass("text-light");
        $("#text-colour").addClass("text-light");
        $(".accordion").addClass("text-light");
        $(".accordion-content").addClass("text-light");
        $("body").addClass("bg-dark");
    } else {
        $("#main-body").removeClass("bg-dark");
        $("#main").removeClass("bg-dark");
        $("#main").removeClass("text-light");
        $("#text-colour").removeClass("text-light");
        $(".accordion").removeClass("text-light");
        $(".accordion-content").removeClass("text-light");
        $("body").removeClass("bg-dark");
    }
}

function filterCollapse() {
    var checkBox = document.getElementById("btnFilter");
    if (checkBox.checked == false) {
        $("#mainItem").addClass("col-xl-12 col-lg-12 col-md-12 col-sm-12");
        $("[name='productlist']").removeClass("col-xl-4 col-lg-6 col-md-12 col-sm-6 col-6");
        $("[name='productlist']").addClass("col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6");
    } else {
        $("#mainItem").removeClass("col-xl-12 col-lg-12 col-md-12 col-sm-12");
        $("[name='productlist']").removeClass("col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6");
        $("[name='productlist']").addClass("col-xl-4 col-lg-6 col-md-12 col-sm-6 col-6");
    }
}

//------- Product Navigation -------//
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navProduct").style.top = "0";
    } else {
        document.getElementById("navProduct").style.top = "-300px";
    }
    prevScrollpos = currentScrollPos;
}

//------- Accordion -------//
$(".accordion").on("click", ".accordion-header", function() {
    $(this).toggleClass("active").next().slideToggle();
});

//------- Custom Togle -------//
document.getElementsByClassName("navbar-toggler")[0].addEventListener("click", toogleClass);

function toogleClass() {
    document.getElementsByClassName("hamburger-menu")[0].classList.toggle('open')
}

//------- Copy text -------//
function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}

//------- Same Value -------//
$(document).ready(function() {
    $("#bt1").click(function() {
        var value = $("#sst").val();
        $("#sst2").val(value);
    });
    $("#bt2").click(function() {
        var value = $("#sst").val();
        $("#sst2").val(value);
    });
});


// This function will show the image in the lightbox
var zoomImg = function() {
    // Create evil image clone
    var clone = this.cloneNode();
    clone.classList.remove("zoomD");

    // Put evil clone into lightbox
    var lb = document.getElementById("lb-img");
    lb.innerHTML = "";
    lb.appendChild(clone);

    // Show lightbox
    lb = document.getElementById("lb-back");
    lb.classList.add("show");
};

window.addEventListener("load", function() {
    // Attach on click events to all .zoomD images
    var images = document.getElementsByClassName("zoomD");
    if (images.length > 0) {
        for (var img of images) {
            img.addEventListener("click", zoomImg);
        }
    }

    // Click event to hide the lightbox
    document.getElementById("lb-back").addEventListener("click", function() {
        this.classList.remove("show");
    })
});

//------- Photo Profile Preview -------//
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#file").change(function() {
    readURL(this);
});

// Alert Timer
setTimeout(function() {
    $(".alert-timer").slideUp(300, function() { $(this).remove(); });
}, 3000);

//------- Auto Submit -------//
$(document).ready(function() {
    $('button[name = "up"]').click(function() {
        $("#updateForm").submit();
    });
    $('button[name = "down"]').click(function() {
        $("#updateForm").submit();
    });
    $('input[name = "qty"]').input(function() {
        $("#updateForm").submit();
    });
});

/* show file value after file select */
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("order_bukti").files[0].name;
    var nextSibling = e.target.nextElementSibling;
    nextSibling.innerText = fileName;
});

function tambahKeranjang(id, url, user) {
    if (user) {
        var btn = '#addBtn' + id;
        $(btn).prop('disabled', true);
        $('i[name="addIcn"]').removeClass("fa-plus").addClass("fa-spinner").addClass("fa-pulse");
        $.ajax({
            type: 'POST',
            url: url,
            data: 'product_id=' + id,
            success: function(data) {
                $('div[name="tambahStatus"]').html(data).show();
                setTimeout(
                    function() {
                        $('div[name="tambahStatus"]').html(data).fadeOut(2000, function() {
                            $(this).hide();
                        });
                        $(btn).prop('disabled', false);
                        $('i[name="addIcn"]').addClass("fa-plus").removeClass("fa-spinner").removeClass("fa-pulse");
                    }, 1000);
            }
        });
    } else {
        $('#formLogin').submit();
    }
}