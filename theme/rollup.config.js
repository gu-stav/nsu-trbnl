import commonjs from 'rollup-plugin-commonjs';
import copy from 'rollup-plugin-cpy';
import postcss from 'rollup-plugin-postcss';
import resolve from 'rollup-plugin-node-resolve';

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
    }),

    resolve(),
    commonjs()
  ],

  output: {
    file: 'index.js',
    format: 'iife'
  }
};
