<template>
    <div class="professional-experience">
        <span class="page-title">Professional Experience</span>
        <ul>
            <li v-for="experience in experiences" :key="experience.id">
                <span class="list-element list-title">{{ experience.title }}</span>
                <span class="list-element list-institution">{{ experience.company }}</span>
                <span class="list-element list-date">{{ experience.duration }}</span>
                <span class="list-element list-detail">{{ experience.description }}</span>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'ProfessionalExperience',
    data() {
        return {
            experiences: [
                {
                    id: 1,
                    title: 'Software Engineer',
                    company: 'Tech Company',
                    duration: 'Jan 2020 - Present',
                    description: 'Developing and maintaining web applications.'
                }
            ]
        };
    }
};
</script>

<style scoped>
.professional-experience {
    padding: 20px;
}

.professional-experience h2 {
    margin-bottom: 20px;
}

.professional-experience ul {
    list-style-type: none;
    padding: 0;
}

.professional-experience li {
    margin-bottom: 20px;
}

.professional-experience h3 {
    margin: 0;
}

.professional-experience p {
    margin: 5px 0;
}
</style>