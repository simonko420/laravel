/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Addtodo from "./components/Addtodo";

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('todos', require('./components/Todos.vue').default);
Vue.component('Addtodo', require('./components/Addtodo.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

let app = new Vue({

    el: '#app',
    data(){
        return{
            todos:[
                {
                id : 1,
                title: "Todo one",
                completed: false
                },
                {
                 id: 2,
                 title: "todo two",
                 completed: true
                },
                {
                id: 3,
                title: "todo three",
                completed:true
                }
            ]
        }
    },
    methods:{
        deleteTodo(id){
            this.todos = this.todos.filter(todo => todo.id !== id);
        },
        addTodo(newTodo){
            const {title, completed} = newTodo;


            axios.post('https://jsonplaceholder.typicode.com/todos', {
                title,
                completed
            })
                .then(this.todos = [...this.todos, res.data])
                .catch(err => console.log(err))
        }
    },
    created(){
        axios.get('https://jsonplaceholder.typicode.com/todos?_limit=10')
            .then(res => this.todos = res.data)
            .catch(err => console.log(err));

    }


});
