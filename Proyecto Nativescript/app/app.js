import Vue from 'nativescript-vue';

import vistaBloqueos from './components/vistaBloqueos';

// Uncommment the following to see NativeScript-Vue output logs
// Vue.config.silent = false;

new Vue({

    render: h => h('frame', [h(vistaBloqueos)])
    

}).$start();
