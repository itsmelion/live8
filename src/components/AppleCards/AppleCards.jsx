import React, { PureComponent } from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faChevronUp } from '@fortawesome/free-solid-svg-icons';
import './AppleCards.scss';
import playIcon from './play.svg';

const cards = [
  {
    id: 0,
    videoURL: '#',
    title: 'Video Card',
    caption: 'This is suposed to be a link to an external youtube video',
  },
  {
    id: 1,
    videoURL: '#',
    title: 'Video Card',
    caption: 'This is suposed to be a link to an external youtube video',
  },
  {
    id: 3,
    videoURL: '#',
    title: 'Video Card',
    caption: 'This is suposed to be a link to an external youtube video',
  },
];

class AppleCards extends PureComponent {
  toggleDetails = e => e.target.classList.toggle('touched');

  render() {
    return (
      <section id="AppleCards" row="" align="around">
        {cards.map(card => (
          <button
            type="button"
            key={card.id}
            className="apple-card"
            onClick={this.toggleDetails}
            style={{ backgroundImage: `url(${card.image})` }}
          >
            <a href={card.videoURL} title="play">
              <img className="play-btn" src={playIcon} alt="play" />
            </a>

            <div className="center legenda">
              <FontAwesomeIcon icon={faChevronUp} alt="Swipe up" />

              <h3>{card.title}</h3>
              <p>{card.caption}</p>
            </div>
          </button>
        ))}
      </section>
    );
  }
}

export default AppleCards;
