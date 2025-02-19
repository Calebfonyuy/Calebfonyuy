<template>
    <div class="teaching-experiences">
        <span class="page-title">Teaching Experiences</span>

        <ul>
            <li v-for="experience in experiences" :key="experience.id">
                <span class="list-element list-title">{{ experience.title }}</span>
                <span class="list-element list-institution">{{ experience.institution }}</span>
                <span class="list-element list-date">{{ experience.duration }}</span>
                <span class="list-element list-detail">{{ experience.description }}</span>
            </li>
        </ul>
    </div>
</template>

<script>
import BASE_URL from '../../api.js';
export default {
    name: 'Teaching',
    data() {
        fetch(BASE_URL + 'teaching')
            .then(response => response.json())
            .then(data => {
                this.experiences = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        return {
            experiences: [],
        };
    }
};
</script>

<style scoped>
</style>