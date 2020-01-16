
import Darkmode from 'darkmode-js';
require('./bootstrap');

window.Vue = require('vue');


Vue.component('todos', require('./components/Todos.vue').default);
Vue.component('heading', require('./components/heading.vue').default);



var app = new Vue({
    el: '#app'
});

var heading = new Vue({
    el:'#heading'
})



let options = {
    bottom: '64px', // default: '32px'
    right: 'unset', // default: '32px'
    left: '32px', // default: 'unset'
    time: '0.5s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#fff',  // default: '#fff'
    buttonColorDark: '#100f2c',  // default: '#100f2c'
    buttonColorLight: '#fff', // default: '#fff'
    saveInCookies: true, // default: true,
    autoMatchOsTheme: true // default: true
}
const darkmode = new Darkmode(options);
darkmode.showWidget();

let textWrapper = document.querySelector('.display-3');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
    .add({
        targets: '.display-3 .letter',
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration: 2250,
        delay: (el, i) => 90 * (i+1)
    })






