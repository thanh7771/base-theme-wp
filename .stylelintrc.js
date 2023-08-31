module.exports = {
  'extends': 'stylelint-config-standard',
  'ignoreFiles': [
    "src/sass/vendors/**/*.scss",
    "src/sass/abstracts/mixins/*.scss"
  ],
  'rules': {
    'no-empty-source': null,
    'string-quotes': 'double',
    'block-no-empty': true,
    'indentation': 4,
    'at-rule-no-unknown': [
      true,
      {
        'ignoreAtRules': [
          'extend',
          'at-root',
          'debug',
          'warn',
          'error',
          'if',
          'else',
          'for',
          'each',
          'while',
          'mixin',
          'include',
          'content',
          'return',
          'function',
          'tailwind',
          'apply',
          'responsive',
          'variants',
          'screen',
        ],
      },
    ],
  },
};
