import domready from 'domready';

import initMenu from './modules/menu';
import initVideo from './modules/video';

domready(() => {
  const videos = Array.from(document.querySelectorAll('.js-video'));
  videos.forEach(video => initVideo(video));

  const menu = document.querySelector('.js-menu');
  initMenu(menu);
});
