// -------------------------------------
// Grunt ftpush
// -------------------------------------

module.exports = {

  // ----- Mirror child theme to server ----- //

  init_deploy_child: {
    auth: {
      host: '178.18.94.73',
      port: 21,
      authKey: 'lokaalgevonden'
    },
    src: 'dist/child',
    dest: '/wp-content/themes/slate-<%= package.version %>_<%= projectName %>',
    simple: true,
    useList: true
  },

  deploy_child: {
    auth: {
      host: '178.18.94.73',
      port: 21,
      authKey: 'lokaalgevonden'
    },
    src: 'dist/child',
    dest: '/wp-content/themes/slate-<%= package.version %>_<%= package.name %>',
    simple: true,
    useList: true
  },

  // ----- Mirror parent theme to server ----- //

  deploy_parent: {
    auth: {
      host: '178.18.94.73',
      port: 21,
      authKey: 'lokaalgevonden'
    },
    src: 'dist/parent',
    dest: '/wp-content/themes/slate-<%= package.version %>',
    simple: true,
    useList: true
  }
};
