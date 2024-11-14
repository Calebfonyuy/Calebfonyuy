<template>
    <div class="professional-experience">
        <h2>Professional Experience</h2>
        <ul>
            <li v-for="experience in experiences" :key="experience.id">
                <h3>{{ experience.title }}</h3>
                <p>{{ experience.company }}</p>
                <p>{{ experience.duration }}</p>
                <p>{{ experience.description }}</p>
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
                },
                {
                    id: 2,
                    title: 'Frontend Developer',
                    company: 'Web Solutions',
                    duration: 'Jun 2018 - Dec 2019',
                    description: 'Creating responsive and interactive user interfaces.'
                }
                // Add more experiences as needed
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