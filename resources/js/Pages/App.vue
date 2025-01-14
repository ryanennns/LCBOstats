<script setup>
import AlcoholCard from '@/Components/AlcoholCard.vue';
import {ref, watchEffect} from 'vue';
import SearchBar from "../Components/SearchBar.vue";
import PageHeader from "../Components/PageHeader.vue";
import NavBar from "../Components/NavBar.vue";

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

let lastApiQuery = null;
const filteredAlcohol = ref([]);

watchEffect(async () => {
    console.log('Fetching data');
    let filtered = props.alcohol.data.filter(a => a.title.toLowerCase().includes(searchQueryRef.value.toLowerCase()));

    if (filtered.length < 1 && lastApiQuery !== searchQueryRef.value) {
        lastApiQuery = searchQueryRef.value;
        filtered = await queryApi(searchQueryRef.value);
    }

    filteredAlcohol.value = filtered; // Update the reactive property
});
const queryApi = async (searchQuery) => {
    const response = await fetch('/api/alcohol?' + new URLSearchParams({
        thing: 'thing',
    }).toString(), {
        method: 'GET',
    })

    const thing = await response.json();
    return thing.data;
}

</script>

<template>
    <div class="container">
        <NavBar />
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
</style>
