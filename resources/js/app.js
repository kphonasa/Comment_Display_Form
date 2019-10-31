/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue);


require('./bootstrap');

window.Vue = require('vue');


Vue.component('comment-form', require('./components/commentForm.vue').default);

const app = new Vue({
    el: '#app',
    methods : {
        postStatus : function (e) {
            e.preventDefault();
            console.log('Posted: '+this.post+ '. Token: '+this.token);
            $.ajax({
                url         :   '/posts',
                type        :   'post',
                dataType    :   'json',
                data        :   {
                    'body'  :   this.post,
                    '_token':   this.token,
                }
            });
        }
    },
});
