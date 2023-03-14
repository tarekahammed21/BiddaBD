$(document).ready(function () {
  
$('.header-slider').slick({
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      
    ]
  });
  /* ----------------------------------------------------------- */
  /*  Fixed header
  /* ----------------------------------------------------------- */

  // $(window).scroll(function(){
  //   if ($(window).scrollTop()>150){
  //     $('nav').addClass('sticky-nav');
  //   }else{
  //     $('nav').removeClass('sticky-nav');
  //   }
  // })
  function fixedHeader()
  {
    var windowWidth = $(window).width();

    if(windowWidth > 120 ){
      $(window).on('scroll', function(){
        if( $(window).scrollTop()>100 ){
          $('.main-nav').addClass('header-fixed animated slideInDown');
        } else {
          $('.main-nav').removeClass('header-fixed animated slideInDown');
        }
      });
    }else{
      
      $('.main-nav').addClass('fixed-menu animated slideInDown');
        
    }
  }

  fixedHeader();
  $('.students-counting').slick({
    dots: true,
    arrow: true,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 4,
    prevArrow: '<span class="previ-arrow-student"><i class="fa fa-angle-left"></i></span>',
    nextArrow: '<span class="next-arrow-student"><i class="fa fa-angle-right"></i></span>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.education-item').slick({
    dots: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.investors-item').slick({
    dots: true,
    arrow: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<span class="previ-arrow-student"><i class="fa fa-angle-left"></i></span>',
    nextArrow: '<span class="next-arrow-student"><i class="fa fa-angle-right"></i></span>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow:2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 396,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.byjus-item').slick({
    dots: false,
    arrow: true,
    infinite: true,
    speed: 300,
    fade: true,
    cssEase: 'linear',
    prevArrow: '<span class="previ-arrow-student"><i class="fa fa-angle-left"></i></span>',
    nextArrow: '<span class="next-arrow-student"><i class="fa fa-angle-right"></i></span>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.brand-item').slick({
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      
    ]
  });
  $('.students-worldwide-item').slick({
    arrow: true,
    infinite: true,
    dots: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: '<span class="previ-arrow-student"><i class="fa fa-angle-left"></i></span>',
    nextArrow: '<span class="next-arrow-student"><i class="fa fa-angle-right"></i></span>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.math-brand-item').slick({
    speed: 300,
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: false,
    // autoplaySpeed: 2000,
    arrows:false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 6,
          slidesToScroll: 1,
          infinite: true,
          
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
        
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      
    ]
  });
// student counter 
  $('.counter').counterUp({
    delay: 10,
    time: 1000
});
$('.parents-item').slick({
  dots: true,
  arrow: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: '<span class="previ-arrow-parents"><i class="fa fa-angle-left"></i></span>',
  nextArrow: '<span class="next-arrow-parents"><i class="fa fa-angle-right"></i></span>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow:1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrow: false,
      }
    },
    {
      breakpoint: 396,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrow: false,
      }
    }
  ]
});
$('.partnership-item').slick({
  dots: false,
  arrow: false,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: '<span class="previ-arrow-parents"><i class="fa fa-angle-left"></i></span>',
  nextArrow: '<span class="next-arrow-parents"><i class="fa fa-angle-right"></i></span>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow:1,
        slidesToScroll: 1,
        dots: false,
        arrow: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrow: false,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrow: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrow: false,
      }
    },
    {
      breakpoint: 396,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrow: false,
      }
    }
  ]
});
$('.music-partnership-item').slick({
  dots: true,
  arrow: true,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: '<span class="previ-arrow-student"><i class="fa-solid fa-arrow-left"></i></span>',
  nextArrow: '<span class="next-arrow-student"><i class="fa-solid fa-arrow-right"></i></span>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow:2,
        slidesToScroll: 1,
        dots: false,
        arrow: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrow: false,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrow: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrow: false,
      }
    },
    {
      breakpoint: 396,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrow: false,
      }
    }
  ]
});
});