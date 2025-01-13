<script setup>
const props = defineProps({
    text: {
        required: true,
        type: String,
    },
    i: {
        required: false,
        type: Boolean
    },
    b: {
        required: false,
        type: Boolean
    },
    u: {
        required: false,
        type: Boolean
    },
})
</script>

<template>
    <div class="header-container">
        <div class="inner">
            <h1>
                {{ props.text }}
            </h1>
        </div>
    </div>
</template>

<style scoped>
.header-container {
    display: flex;
    justify-content: center;
}

h1 {
    margin: 0;
    padding: 0.75rem;
    font-size: 3rem;
    font-family: 'Arial', serif;
    color: #262626;
}

.inner {
    display: flex;
    justify-content: center;
    flex-grow: 1;
}

h1:hover {
    cursor: default;
}
</style>
