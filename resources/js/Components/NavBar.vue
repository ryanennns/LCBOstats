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
    justify-content: space-between;
    margin-left: 2rem;
    margin-right: 2rem;
}


.start, .end {
    width: 15rem;
}

.end {
    background-color: darkblue;
}

@media (max-width: 1000px) {
    .start, .end {
        display: none;
    }

    .navbar-container {
        justify-content: center;
    }
}

</style>
