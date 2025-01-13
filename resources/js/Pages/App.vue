<script setup>
import AlcoholCard from '@/Components/AlcoholCard.vue';
import {ref} from 'vue';
import SearchBar from "../Components/SearchBar.vue";
import PageHeader from "../Components/PageHeader.vue";

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
        <PageHeader text="lcbostats"/>
        <SearchBar/>
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

body {
    margin: 0;
    padding: 0;
}

.alcohol-card-group {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    min-width: 98vw;
}

/* ...rest of the code... */
</style>
