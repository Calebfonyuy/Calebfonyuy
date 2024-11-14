<template>
    <div class="teaching-experiences">
        <h2>Teaching Experiences</h2>
        <ul>
            <li v-for="experience in experiences" :key="experience.id">
                <h3>{{ experience.title }}</h3>
                <p>{{ experience.institution }}</p>
                <p>{{ experience.duration }}</p>
                <p>{{ experience.description }}</p>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Teaching',
    data() {
        return {
            experiences: [
                {
                    id: 1,
                    title: 'Introduction to Computer Science',
                    institution: 'University of Example',
                    duration: 'Jan 2020 - Dec 2020',
                    description: 'Taught the basics of computer science to undergraduate students.'
                },
                {
                    id: 2,
                    title: 'Advanced JavaScript',
                    institution: 'Tech Academy',
                    duration: 'Mar 2021 - Present',
                    description: 'Conducted workshops on advanced JavaScript topics.'
                }
                // Add more experiences as needed
            ]
        };
    }
};
</script>

<style scoped>
.teaching-experiences {
    padding: 20px;
}

.teaching-experiences h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.teaching-experiences ul {
    list-style-type: none;
    padding: 0;
}

.teaching-experiences li {
    margin-bottom: 20px;
}

.teaching-experiences h3 {
    font-size: 20px;
    margin: 0;
}

.teaching-experiences p {
    margin: 5px 0;
}
</style>