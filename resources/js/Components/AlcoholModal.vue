<script setup>
import {onMounted, onUnmounted, ref, watch, useTemplateRef} from 'vue';
import {Chart, registerables} from 'chart.js';

const props = defineProps({
    alcohol: {
        type: Object,
        required: true
    },
    show: {
        type: Boolean,
        default: false
    }
});

const emit = defineEmits(['close']);
const priceHistoryChart = ref(null);
const canvas = useTemplateRef('canvas');
watch(() => props.alcohol, (changed) => {
    createPriceChart()
})

Chart.register(...registerables);

const handleEscape = (event) => {
    if (event.key === 'Escape') {
        emit('close');
    }
};

onMounted(() => {
    document.addEventListener('keydown', handleEscape);
});

onUnmounted(() => {
    document.removeEventListener('keydown', handleEscape);
    if (priceHistoryChart.value) {
        priceHistoryChart.value.destroy();
    }
});

const createPriceChart = () => {
    return;
    const ctx = document.getElementById('canvas').getContext('2d');
    if (priceHistoryChart.value) {
        priceHistoryChart.value.destroy();
    }
    priceHistoryChart.value = new Chart(ctx, {
        type: 'line',
        data: {
            labels: props.alcohol.price_changes.map(change => new Date(change.created_at).toLocaleDateString()),
            datasets: [{
                label: 'Price Over Time',
                data: props.alcohol.price_changes.map(change => change.price),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false
                }
            },
            responsive: true,
            maintainAspectRatio: false
        }
    });
};

const formatPrice = (price) => {
    return new Intl.NumberFormat('en-CA', {
        style: 'currency',
        currency: 'CAD'
    }).format(price);
};
</script>


<template>
    <Transition name="modal">
        <div v-if="show" class="modal-overlay" @click="emit('close')">
            <div class="modal-content" @click.stop>
                <button class="close-button" @click="emit('close')">&times;</button>
                <div class="modal-body">
                    <div class="modal-image">
                        <img
                            :src="alcohol.image_url"
                            :alt="alcohol.title"
                            @error="$event.target.src = '/images/placeholder.jpg'"
                        >
                    </div>
                    <div class="modal-details">
                        <h2>{{ alcohol.title }}</h2>
                        <div class="price-section">
                            <span class="price">{{ formatPrice(alcohol.price) }}</span>
                            <span class="volume">{{ alcohol.volume }}L</span>
                        </div>
                        <div class="details-section">
                            <p><strong>Alcohol Content:</strong> {{ alcohol.alcohol_content }}%</p>
                            <p><strong>Rating:</strong> {{ alcohol.rating ?? 'N/A' }} ★</p>
                            <p v-if="alcohol.out_of_stock" class="out-of-stock">Currently Out of Stock</p>
                        </div>
                    </div>
<!--                    <div class="chart-container">-->
<!--                        <canvas id="canvas" ref="canvas"></canvas>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </Transition>
</template>

<style scoped>
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.modal-content {
    background: white;
    border-radius: 8px;
    padding: 20px;
    max-width: 800px;
    width: 90%;
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    border: none;
    background: none;
    font-size: 24px;
    cursor: pointer;
    padding: 5px;
}

.modal-body {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.modal-image {
    flex: 1;
    min-width: 300px;
}

.modal-image img {
    width: 100%;
    height: auto;
    border-radius: 4px;
}

.modal-details {
    flex: 1;
    min-width: 300px;
}

.price-section {
    margin: 20px 0;
}

.price {
    font-size: 24px;
    color: #4CAF50;
    font-weight: bold;
    margin-right: 10px;
}

.volume {
    color: #666;
}

.details-section {
    line-height: 1.6;
}

.out-of-stock {
    color: red;
    font-weight: bold;
}

</style>
