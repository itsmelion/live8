$(() => {
  // jquery goodness

  // Variables
  let clickedTab = $('.tabs > .active');
  const tabWrapper = $('.tab__content');
  const wavebg = $('.wave-bg');
  let activeTab = tabWrapper.find('.active');
  const activewavebg = wavebg.find('.active');
  let activeTabHeight = activeTab.outerHeight();

  // Show tab on page load
  activeTab.show();

  // Set height of wrapper on page load
  tabWrapper.height(activeTabHeight);

  $('.tabs > li').on('click', function tabs() {
    const el = $(this);
    const clickedtab = parseInt(el.attr('data-id'), 10);
    // Remove class from active tab
    $('.tabs > li').removeClass('active');
    wavebg.removeClass('active');

    // Add class active to clicked tab
    el.addClass('active');
    wavebg.eq(clickedtab).addClass('active');

    // Update clickedTab variable
    clickedTab = $('.tabs .active');

    // fade out active tab
    activeTab.fadeOut(150, () => {
      // Remove active class all tabs
      $('.tab__content > li').removeClass('active');

      // Get index of clicked tab
      const clickedTabIndex = clickedTab.index() + 1;

      // Add class active to corresponding tab
      $('.tab__content > li')
        .eq(clickedTabIndex)
        .addClass('active');

      // update new active tab
      activeTab = $('.tab__content > .active');

      // Update variable
      activeTabHeight = activeTab.outerHeight();

      // Animate height of wrapper to new tab height
      tabWrapper.stop().animate(
        {
          height: activeTabHeight,
        },
        300,
        () => {
          // Fade in active tab
          activeTab.fadeIn(150);
        }
      );
    });
  });

  $('.carousel').carousel({
    interval: 4000,
    pause: false,
    ride: 'carousel',
  });

  $('.card-container').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    variableWidth: true,
    adaptiveHeight: false,
    lazyLoad: 'ondemand',
    centerMode: true,
    mobileFirst: true,
    prevArrow:
      '<button type="button" class="slick-prev"><img src="http://live8.com.br/wp-content/themes/alive8/images/icons/arrow.svg" alt="Slide"/></button>',
    nextArrow:
      '<button type="button" class="slick-next"><img src="http://live8.com.br/wp-content/themes/alive8/images/icons/arrow.svg" alt="Slide"/></button>',
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $('.apple-card, .menu-open-button').click(function touched() {
    $(this).toggleClass('touched');
  });

  $('.card-container').photoSwipe();

  $('footer').css({ bottom: '-105vh' });

  $('.arrow').swipe({
    swipe(event, direction, distance, duration, fingerCount, fingerData) {
      console.log(`Swiped ${direction}`);
      if (direction === 'Up' || direction === 'Left' || direction === 'Right') {
        $('footer').animate({ bottom: '0' });
      } else if (direction === 'Down' || direction === 'Left' || direction === 'Right') {
        console.log('Down');
        $('footer').animate({ bottom: '-105vh' });
      }
    },
    allowPageScroll: 'none',
  });

  $('.arrow.down').on('click', () => {
    $('footer').animate({ bottom: '-105vh' });
  });

  $('.arrow.up').on('click', () => {
    $('footer').animate({ bottom: '0' });
  });

  console.log('actual');
});
