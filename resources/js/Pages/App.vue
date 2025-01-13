<script setup>
import AlcoholCard from '@/Components/AlcoholCard.vue';
import {onMounted, ref, computed} from 'vue';
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

const searchQueryRef = ref('')
const filterResults = (searchQuery) => searchQueryRef.value = searchQuery

const hittingApi = ref(false);
const filteredAlcohol = computed(() => {
    let filtered = props
        .alcohol
        .data
        .filter(
            a => a.title.toLowerCase().includes(searchQueryRef.value.toLowerCase())
        );

    if (filtered.length < 1) {
        hittingApi.value = true;
        searchApi(searchQueryRef.value)
    }

    return filtered;
});
const searchApi = (searchQuery) => {
    console.log(hittingApi.value)

    setTimeout(() => 1, 3000)

    console.log(hittingApi.value)
    hittingApi.value = false;

    return [];
}

</script>

<template>
    <div class="container">
        <PageHeader text="lcbostats"/>
        <SearchBar @search-query="filterResults"/>
        <div class="alcohol-card-group">
            <AlcoholCard
                v-for="alcohol in filteredAlcohol"
                :key="alcohol.permanent_id"
                :alcohol="alcohol"
                @click="handleCardClick"
            />
        </div>
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
