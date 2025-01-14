<script setup>

import PageHeader from "./PageHeader.vue";
import SearchBar from "./SearchBar.vue";
</script>

<template>
    <div class="navbar-container">
        <div class="start">
            <PageHeader text="lcbostats"/>
        </div>
        <div class="center">
            <SearchBar/>
        </div>
        <div class="end">
            <p>SomeContent</p>
        </div>
    </div>
</template>

<style scoped>
.navbar-container {
    display: flex;
    flex-direction: row;
    align-content: center;
    @media (max-width: 1000px) {
        justify-content: center;
    }
    justify-content: space-between;
    margin-left: 2rem;
    margin-right: 2rem;
}

.start {
    @media (max-width: 1000px) {
        display: none;
    }
    width: 15rem;
}

.end {
    @media (max-width: 1000px) {
        display: none;
    }
    width: 15rem;
    background-color: darkblue;
}


</style>
