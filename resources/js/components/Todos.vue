<template>
    <div>
        <div v-bind:key="todo.id" v-for="todo in todos">
            <Todoitem v-bind:todo="todo" v-on:del-todo="$emit('del-todo', todo.id)"> </Todoitem>
        </div>
    </div>
</template>




<script>
 import Todoitem from "./Todoitem";



    export default {
        name: "Todos",
        components: {
            Todoitem,
        },
        props: ["todos"]
    }
</script>



<style scoped>

</style>
