<script setup>
import {ref, defineEmits} from "vue";

const emit = defineEmits(['searchQuery'])
const searchQuery = ref('')

function debounce(func, delay) {
    let debounceTimer;
    return function() {
        const context = this;
        const args = arguments;
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => func.apply(context, args), delay);
    };
}

const onInput = debounce((event) => {
    console.log('input', event)
}, 250)

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
    padding: 1rem 1.5rem;
    width: 33vw;
    border-radius: 2rem;
    font-size: 1rem;
    font-family: 'Roboto', sans-serif;
    color: dimgrey;
    border: 1px solid transparent;
    outline: none;
    box-shadow: 0 0 5px lightgray;
}

#searchQuery:focus {
    border: 1px solid transparent;
}
</style>
