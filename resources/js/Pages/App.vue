<script setup>
import AlcoholCard from '@/Components/AlcoholCard.vue';

const props = defineProps({
    alcohol: {
        type: Object,
        required: true,
    }
})
</script>

<template>
    <div class="container">
        <div class="alcohol-card-group">
            <AlcoholCard
                v-for="alcohol in props.alcohol.data"
                :key="alcohol.permanent_id"
                :alcohol="alcohol"
            />
        </div>
    </div>
</template>

<style scoped>

body {
    margin: 0;
}

.alcohol-card-group {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    min-width: 100vw;
}

/* ...rest of the code... */
</style>
