<script setup>
import AlcoholCard from '@/Components/AlcoholCard.vue';
import { ref } from 'vue';

const props = defineProps({
    alcohol: {
        type: Object,
        required: true,
    }
});

const selectedAlcohol = ref(null);
const showModal = ref(false);

const handleCardClick = (alcohol) => {
    selectedAlcohol.value = alcohol;
    showModal.value = true;
};
</script>

<template>
    <div class="container">
        <div class="alcohol-card-group">
            <AlcoholCard
                v-for="alcohol in props.alcohol.data"
                :key="alcohol.permanent_id"
                :alcohol="alcohol"
                @click="handleCardClick"
            />
        </div>
<!--        <AlcoholModal-->
<!--            v-if="selectedAlcohol"-->
<!--            :alcohol="selectedAlcohol"-->
<!--            :show="showModal"-->
<!--            @close="showModal = false"-->
<!--        />-->
    </div>
</template>

<style scoped>

.alcohol-card-group {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    min-width: 98vw;
}

/* ...rest of the code... */
</style>
