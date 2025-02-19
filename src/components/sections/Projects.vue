<template>
    <div class="projects-section">
        <span class="page-title">Projects</span>
        <div v-for="project in projects" :key="project.id" class="project">
            <span class="list-element list-title">{{ project.name }}</span>
            <span class="list-element list-date">{{ project.duration }}</span>
            <span class="list-element list-detail">
                <b>Technologies</b>: {{ project.technologies }}
            </span>
            <span class="list-element list-detail">{{ project.description }}</span>
            <span class="content-header" v-if="project.tasks.length !=0">Tasks</span>
            <ul v-if="project.tasks.length !=0">
                <li v-for="task in project.tasks" :key="task.id">{{ task.name }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
import BASE_URL from '../../api.js';

export default {
    name: 'Projects',
    data() {
        fetch(BASE_URL + 'projects')
            .then(response => response.json())
            .then(data => {
                this.projects = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        return {
            projects: [
            ],
        };
    },
};
</script>

<style scoped>
</style>