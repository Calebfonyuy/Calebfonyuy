<template>
    <div class="presentations">
        <span class="page-title">Presentations</span>
        <ul>
            <li v-for="presentation in presentations" :key="presentation.id">
                <span class="list-element list-title">{{ presentation.title }}</span>
                <span class="list-element list-detail">{{ presentation.event }}</span>
                <span class="list-element list-date">{{ presentation.date }}</span>
                <span class="list-element list-date">
                    <a :href="presentation.href" target="_blank" class="list-date">View Presentation</a>
                </span>
            </li>
        </ul>
    </div>
</template>

<script>
import BASE_URL from '../../api.js';

export default {
    name: 'Presentations',
    data() {
        fetch(BASE_URL + 'presentations')
            .then(response => response.json())
            .then(data => {
                this.presentations = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        return {
            presentations: []
        };
    }
};
</script>

<style scoped>
</style>