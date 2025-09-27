$(document).ready(function ($) {
    
    $(".response-menu-header .menu-item-has-children ul").hide();
    $(".response-menu-header .menu-item-has-children > a").click(function () {
        $(this).next("ul").toggle('slow');
        return false;
    });

    /*-------------------- Review js ----------------*/
    $('.testimonial-carousel').owlCarousel({
        loop:false,
        margin:20,
        nav:false,
        dots:true,
        dotsEach: true,
        autoplay:false,
        autoplayTimeout:4000,
        responsive:{
            0:{ 
                items:1,
                dots:false, 
            },
            768:{ items:2 }
        }
    });
    
    /*----------------- Form js -----------------------*/

    let $form = $("#cform");
    let $inputs = $form.find("input, textarea");
    let $submitBtn = $("#cformsubmit");

function checkFields() {
    let allFilled = true;
    let anyFilled = false;

    $inputs.each(function () {
        if ($(this).val().trim() === "") {
            allFilled = false;
        } else {
            anyFilled = true;
        }
    });

    if (!anyFilled) {
        $submitBtn.prop("disabled", true).addClass("disabled-btn");
    } else {
        $submitBtn.prop("disabled", false).removeClass("disabled-btn");
    }
}


$("input[name='name']").on("input", function () {
    let name = $(this).val().trim();
    if (name !== "") {
        $("textarea[name='Message']").val("Hi, my name is " + name);
    } else {
        $("textarea[name='Message']").val("");
    }
    checkFields();
});

$inputs.on("input blur", function () {
    if ($(this).val().trim() !== "") {
        let tooltip = bootstrap.Tooltip.getInstance(this);
        if (tooltip) {
            tooltip.dispose();
            $(this).removeAttr("data-bs-toggle data-bs-title");
        }
    }
    checkFields();
});

$form.on("submit", function (e) {
    let hasError = false;

    $inputs.each(function () {
        if ($(this).val().trim() === "") {
            hasError = true;

            $(this)
                .attr("data-bs-toggle", "tooltip")
                .attr("data-bs-placement", "top")
                .attr("data-bs-title", "This field is required");

            bootstrap.Tooltip.getInstance(this)?.dispose();
            new bootstrap.Tooltip(this, { trigger: "manual" }).show();
        }
    });

    if (hasError) {
        e.preventDefault();
    }
});

checkFields();


/*-----------------------Direct checkout page js------------------*/
 $('body').on('click', '.shop-now-btn', function(e){
        e.preventDefault();
        var $btn = $(this);
        var product_id = $btn.data('product-id');
        if (!product_id) {
            window.location.href = '/shop/';
            return;
        }

        $btn.addClass('loading');

        $.post(mythemeShopNow.ajax_url, {
            action: 'mytheme_direct_add_to_cart',
            product_id: product_id,
            quantity: 1,
            nonce: mythemeShopNow.nonce
        }, function(response){
            $btn.removeClass('loading');
            if (response.success && response.data.checkout_url) {
                window.location.href = response.data.checkout_url;
            } else {
                alert(response.data && response.data.message ? response.data.message : 'Error adding to cart');
            }
        }).fail(function(){
            $btn.removeClass('loading');
            alert('Request failed. Please try again.');
        });
    });
});












