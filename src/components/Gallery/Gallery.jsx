import React, { PureComponent } from 'react';
import './Gallery.scss';

const gallery = [];

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

        <section id="Gallery">
          {gallery.map(image => (
            <article
              className="swipe-card"
              style={{ backgroundImage: `url(${image.medium})` }}
            >
              <img
                src={image.medium}
                data-original-src={image.full}
                data-original-src-width={image.width}
                data-original-src-height={image.height}
                alt=""
              />
            </article>
          ))}
        </section>
      </>
    );
  }
}

export default Gallery;
