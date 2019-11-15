<template>
    <div>
        <form @submit="addTodo">
            <input class="mr-3" type="text" v-model="title" name="title" placeholder="Add todo">
            <input type="submit" value="submit" class="btn btn-success">
        </form>
    </div>
</template>

<script>
    export default {
        name:"Addtodo",
        data() {
            return{
                title: ''
            }
        },
        methods:{
            addTodo(e){
                e.preventDefault();
                const newTodo = {
                    title: this.title,
                    completed: false
                }
                //send up to parent by emiting the event
                this.$emit('add-todo', newTodo);
                this.title = ''
            }
        }
    }
</script>

<style scoped>
    form {
        display: flex;
    }
    input[type="text"] {
        flex: 10;
        padding: 5px;
    }
    input[type="submit"] {
        flex: 2;
    }
</style>
