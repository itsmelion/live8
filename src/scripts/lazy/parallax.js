$(window).on('load', () => {
  // Start Parallax

  /* detect touch */
  if ('ontouchstart' in window) {
    document.documentElement.className = `${document.documentElement.className} touch`;
  }
  if (!$('html').hasClass('touch')) {
    /* background fix */
    $('.parallax').css('background-attachment', 'fixed');
  }

  /* resize background images */
  function backgroundResize() {
    const windowH = $(window).height();
    $('.background').each(function parallax(i) {
      const path = $(this);
      // variables
      const contW = path.width();
      const contH = path.height();
      let imgW = path.attr('data-img-width');
      let imgH = path.attr('data-img-height');
      const ratio = imgW / imgH;
      // overflowing difference
      let diff = parseFloat(path.attr('data-diff'));
      diff = diff || 0;
      // remaining height to have fullscreen image only on parallax
      let remainingH = 0;
      if (path.hasClass('parallax') && !$('html').hasClass('touch')) {
        const maxH = contH > windowH ? contH : windowH;
        remainingH = windowH - contH;
      }
      // set img values depending on cont
      imgH = contH + remainingH + diff;
      imgW = imgH * ratio;
      // fix when too large
      if (contW > imgW) {
        imgW = contW;
        imgH = imgW / ratio;
      }
      //
      path.data('resized-imgW', imgW);
      path.data('resized-imgH', imgH);
      path.css('background-size', `${imgW}px ${imgH}px`);
    });
  }
  $(window).resize(backgroundResize);
  $(window).focus(backgroundResize);
  backgroundResize();

  /* set parallax background-position */
  function parallaxPosition(e) {
    const heightWindow = $(window).height();
    const topWindow = $(window).scrollTop();
    const bottomWindow = topWindow + heightWindow;
    const currentWindow = (topWindow + bottomWindow) / 2;
    $('.parallax').each(function displace(i) {
      const path = $(this);
      const height = path.height();
      let top = path.offset().top;
      let bottom = top + height;
      // only when in range
      if (bottomWindow > top && topWindow < bottom) {
        const imgW = path.data('resized-imgW');
        const imgH = path.data('resized-imgH');
        // min when image touch top of window
        const min = 0;
        // max when image touch bottom of window
        const max = -imgH + heightWindow;
        // overflow changes parallax
        const overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
        top -= overflowH;
        bottom += overflowH;
        // value with linear interpolation
        const value = min + ((max - min) * (currentWindow - top)) / (bottom - top);
        // set background-position
        let orizontalPosition = path.attr('data-oriz-pos');
        orizontalPosition = orizontalPosition || '50%';
        $(this).css('background-position', `${orizontalPosition} ${value}px`);
      }
    });
  }
  if (!$('html').hasClass('touch')) {
    $(window).resize(parallaxPosition);
    // $(window).focus(parallaxPosition);
    $(window).scroll(parallaxPosition);
    parallaxPosition();
  }
});
