import copy from 'rollup-plugin-cpy';
import postcss from 'rollup-plugin-postcss';

export default {
  plugins: [
    copy({
      files: [
        './theme/static/fonts/**/*'
      ],
      dest: './theme/dist/',
      options: {
        verbose: true
      }
    }),

    postcss({
      extract: true,
      plugins: []
    })
  ],

  output: {
    name: 'test'
  }
};
