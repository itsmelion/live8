import React, { PureComponent } from 'react';
import Slider from 'react-slick';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import {
  faChevronLeft,
  faChevronRight,
} from '@fortawesome/free-solid-svg-icons';
import './Gallery.scss';
import medium from '../FX/images/fxMD.jpg';
import full from '../FX/images/fxHD.jpg';

const PrevArrow = React.memo(({ className, style, onClick }) => (
  <button className={className} onClick={onClick} style={style} type="button">
    <FontAwesomeIcon icon={faChevronLeft} />
  </button>
));

const NextArrow = React.memo(({ className, style, onClick }) => (
  <button className={className} onClick={onClick} style={style} type="button">
    <FontAwesomeIcon icon={faChevronRight} />
  </button>
));

const gallery = [
  { id: 0 },
  { id: 1 },
  { id: 2 },
  { id: 3 },
  { id: 4 },
  { id: 5 },
  { id: 6 },
  { id: 7 },
];

const settings = {
  infinite: false,
  slidesToShow: 4,
  slidesToScroll: 4,
  variableWidth: true,
  adaptiveHeight: false,
  prevArrow: <PrevArrow />,
  nextArrow: <NextArrow />,
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
      breakpoint: 680,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
};

class Gallery extends PureComponent {
  constructor(props) {
    super(props);
    this.state = {};
  }

  render() {
    return (
      <>
        <div className="pswp" tabIndex="-1" role="dialog" aria-hidden="true">
          <div className="pswp__bg" />
          <div className="pswp__scroll-wrap">
            <div className="pswp__container">
              <div className="pswp__item" />
              <div className="pswp__item" />
              <div className="pswp__item" />
            </div>

            <div className="pswp__ui pswp__ui--hidden">
              <div className="pswp__top-bar">
                <div className="pswp__counter" />

                <button
                  type="button"
                  className="pswp__button pswp__button--close"
                  title="Close (Esc)"
                />

                <button
                  type="button"
                  className="pswp__button pswp__button--share"
                  title="Share"
                />

                <button
                  type="button"
                  className="pswp__button pswp__button--fs"
                  title="Toggle fullscreen"
                />

                <button
                  type="button"
                  className="pswp__button pswp__button--zoom"
                  title="Zoom in/out"
                />

                <div className="pswp__preloader">
                  <div className="pswp__preloader__icn">
                    <div className="pswp__preloader__cut">
                      <div className="pswp__preloader__donut" />
                    </div>
                  </div>
                </div>
              </div>

              <div className="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div className="pswp__share-tooltip" />
              </div>

              <button
                type="button"
                className="pswp__button pswp__button--arrow--left"
                title="Previous (arrow left)"
              />

              <button
                type="button"
                className="pswp__button pswp__button--arrow--right"
                title="Next (arrow right)"
              />

              <div className="pswp__caption">
                <div className="pswp__caption__center" />
              </div>
            </div>
          </div>
        </div>

        <Slider {...settings} id="Gallery">
          {gallery.map(image => (
            <div key={image.id}>
              <article
                className="swipe-card"
                style={{ backgroundImage: `url(${medium})` }}
              >
                <img
                  src={medium}
                  data-original-src={full}
                  data-original-src-width={image.width || '1920px'}
                  data-original-src-height={image.height || '1080px'}
                  alt=""
                />
                <span>{image.id}</span>
              </article>
            </div>
          ))}
        </Slider>
      </>
    );
  }
}

export default Gallery;
