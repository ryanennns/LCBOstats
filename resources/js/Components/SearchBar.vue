<script setup>
import {ref, defineEmits} from "vue";

const emit = defineEmits(['searchQuery'])
const searchQuery = ref('')

const onInput = (data) => {
    console.log(data.target.value)
    emit('searchQuery', data)
}
</script>

<template>
    <div class="search-wrapper">
        <input type="text" v-model="searchQuery" id="searchQuery" placeholder="Search..." @input="onInput">
    </div>
</template>

<style scoped>
.search-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
    margin-bottom: 1rem;
}

#searchQuery {
    padding: 1rem 1.5rem; /* Increased horizontal padding */
    width: 33vw;
    border-radius: 2rem;
    font-size: 1rem;
    font-family: 'Roboto', sans-serif;
    color: dimgrey;
    border: 1px solid transparent; /* Ensure there is a border to change on focus */
    outline: none;
    box-shadow: 0 0 5px lightgray; /* Optional: adds a subtle shadow for better focus indication */
}

#searchQuery:focus {
    border: 1px solid transparent;
}
</style>
