import domready from 'domready';

import initVideo from './modules/video';

domready(() => {
  const videos = Array.from(document.querySelectorAll('.js-video'));
  videos.forEach(video => initVideo(video));
});
