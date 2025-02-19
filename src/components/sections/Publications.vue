<template>
    <div class="publications">
        <span class="page-title">Scientific Publications</span>
        <ul>
            <li v-for="publication in publications" :key="publication.id">
                <span class="list-element list-title">{{ publication.title }}</span>
                <span class="list-element list-detail">{{ publication.authors }}</span>
                <span class="list-element list-detail">{{ publication.journal }}</span>
                <span class="list-element list-date">{{ publication.year }}</span>
                <span class="list-element list-date">
                    <a :href="publication.href" target="_blank" class="list-date">View Publication</a>
                </span>
            </li>
        </ul>
    </div>
</template>

<script>
import BASE_URL from '../../api.js';

export default {
    name: 'Publications',
    data() {
        fetch(BASE_URL + 'publications')
            .then(response => response.json())
            .then(data => {
                this.publications = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        return {
            publications: [
            ]
        };
    }
};
</script>

<style scoped>
</style>