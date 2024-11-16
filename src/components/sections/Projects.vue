<template>
    <div class="projects-section">
        <span class="page-title">Projects</span>
        <div v-for="project in projects" :key="project.id" class="project">
            <span class="list-element list-title">{{ project.name }}</span>
            <span class="list-element list-detail">{{ project.description }}</span>
            <span class="list-element list-date">{{ project.duration }}</span>
            <span class="content-header">Tasks</span>
            <ul>
                <li v-for="task in project.tasks" :key="task.id">{{ task.name }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Projects',
    data() {
        return {
            projects: [
                {
                    id: 1,
                    name: 'Project One',
                    description: 'This is a description of Project One',
                    duration: 'January',
                    tasks: [
                        { id: 1, name: 'Task One' },
                        { id: 2, name: 'Task Two' },
                    ],
                },
                {
                    id: 2,
                    name: 'Project Two',
                    description: 'This is a description of Project Two',
                    duration: 'February',
                    tasks: [
                        { id: 3, name: 'Task Three' },
                        { id: 4, name: 'Task Four' },
                    ],
                },
            ],
        };
    },
};
</script>

<style scoped>
</style>