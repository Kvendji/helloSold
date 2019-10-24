// sticky_menu
$(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 30) { //
      $("#header").addClass("stickytop");
    } else {
      $("#header").removeClass("stickytop");
    }
  });
});
// $(function() {
//   $('td:first-child').addClass("firstChild");
//   $("table tbody tr").each(function() {
//       $(this).find('td:eq(1)').addClass("secondChild");
//       $(this).find('td:eq(2)').addClass("thirdChild");
//   });
// });



// swiper

var mySwiper = new Swiper('#dealObjectswiper', {
  speed: 100,
  spaceBetween: 0,
  loop: true,
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',
  },
});

// end swiper


$(".design-flyers__wrapper-progress-line").click(function() {
  $(this).addClass('active');
})

// datepicker
if($('#datepicker').length) {
  $( function() {
    $("#datepicker").datepicker();
  });
}
// check-active
$(".check__block").click(function() {
  $(this).toggleClass('checked');
})


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// 

$('.deals-object-page-main__right-column table td, .design-flyers__text-info').each(function(){

  let lenghtBlock = $(this).text().length;

  if (lenghtBlock < 1) {
    $(this).addClass('psevdo-text');
  } 
});

// 

// var a = $('.numberA').text();
// var b = $('.numberB').text();
// var x = a / b * 100;
// console.log(x);
// document.getElementById('progress-line').style.width = x + "%";

// 
// $('.design-flyers__text-info').each(function(){

//   let lenghtBlock = $(this).text().length;

//   if (lenghtBlock < 1) {
//     $(this).addClass('psevdo-text');
//   } 
// });


//
    // g2 = new Dygraph(
    //     document.getElementById("graphdiv2"),
    //     "chart-data.csv",
    //     {
    //         labels: ['X', 'Novozymes', 'OMXC25CAP'],
    //         valueRange: [200, 600],
    //         rollPeriod: 2,
    //         strokeWidth: 4,  
    //         strokeBorderWidth: 0,
    //         highlightCircleSize: 7,
    //         axisLabelFontSize:12,
    //         axes : {
    //             x : {
    //                 drawGrid: false,
    //                 drawAxis : true,
    //                 pixelsPerLabel: 40,
                    
    //             },
    //             y : {
    //                 drawGrid: true,
    //                 drawAxis : true,
                   
    //             }
    //         },
    //     series: {
    //         Novozymes: {
    //             color:"#2DCA73"
		// 	},
    //         OMXC25CAP: {
    //             color:"#E4E8EB"
		// 	}
    // 		}

		// }
    // );

