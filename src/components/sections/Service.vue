<template>
    <div class="service-section">
        <span class="page-title">Volunteering Positions</span>
        <ul>
            <li v-for="position in volunteeringPositions" :key="position.id">
                <h3 class="list-element list-title">{{ position.title }}</h3>
                <p class="list-element list-detail">{{ position.organization }}</p>
                <p class="list-element list-detail">{{ position.description }}</p>
                <p class="list-element list-date">{{ position.dates }}</p>
                <span class="list-element list-date">
                    <a :href="position.href" target="_blank" class="list-date">View Event</a>
                </span>
            </li>
        </ul>
    </div>
</template>

<script>
import BASE_URL from '../../api.js';

export default {
    name: 'ServiceSection',
    data() {
        fetch(BASE_URL + 'service')
            .then(response => response.json())
            .then(data => {
                this.volunteeringPositions = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        return {
            volunteeringPositions: [
            ]
        };
    }
};
</script>

<style scoped>
</style>