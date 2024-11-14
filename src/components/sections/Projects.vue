<template>
    <div class="projects-section">
        <h1>Projects</h1>
        <div v-for="project in projects" :key="project.id" class="project">
            <h2>{{ project.name }}</h2>
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
                    tasks: [
                        { id: 1, name: 'Task One' },
                        { id: 2, name: 'Task Two' },
                    ],
                },
                {
                    id: 2,
                    name: 'Project Two',
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
.projects-section {
    padding: 20px;
}

.project {
    margin-bottom: 20px;
}

h1, h2 {
    color: #333;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    background: #f9f9f9;
    margin: 5px 0;
    padding: 10px;
    border: 1px solid #ddd;
}
</style>