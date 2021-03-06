$(document).ready(function(){
$('#carousel-sends').owlCarousel({
	items: 3,
	dots: false,
	loop: true,
	nav: true,
	navText: ["<",">"],
	 responsive:{
        0: {
        	items:1,
        	nav: false
        },
        500:{
            items:1
        },
        760:{
        	items:2
        },
        1000:{
            items:3
        }
    }
});

$('#carousel-resultat').owlCarousel({
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    navText: ["",""]
    });

$('#carousel-reviews').owlCarousel({
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    navText: ["<",">"]
    });

$('#bs-carousel').owlCarousel({
    items: 4,
    dots: false,
    loop: true,
    nav: true,
    navText: ["",""]
    });


$('#tarifs-carousel').owlCarousel({
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    navText: ["<",">"]
    });

$("#carousel-seo").owlCarousel({
    items: 3,
    dots: true,
    loop: false,
    responsive: {
        320: {
            items: 1,
            loop: true
        },
        990: {
            items: 3,
            loop: false
        }
    }
});


$("#price-seo-1").click(function() {
    (".pr_t").toggleClass("active-block active-block");
});


$("#ok").click(function(){
    var count = $("#count").val();

    if (count < 20) {

    var amount = count * 2000;
    var price = 2000;
    }

    if (count >= 20 && count <=40) {

        var amount = count * 1800;
        var price = 1800;
    }

    if (count >= 40) {

        var amount = count * 1500;
        var price = 1500;
    }

  document.getElementById("amount").innerHTML = amount;
  document.getElementById("price-count").innerHTML = price + " руб/мес";
   // console.log(amount);
});


});