<template>
    <div class="technical-skills">
        <h2>Technical Skills</h2>
        <ul>
            <li v-for="skill in skills" :key="skill.name">
                <span>{{ skill.name }}</span>
                <span class="stars">
                    <i v-for="n in 5" :key="n" class="star" :class="{ filled: n <= skill.level }">★</i>
                </span>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'TechnicalSkills',
    data() {
        return {
            skills: [
                { name: 'JavaScript', level: 4 },
                { name: 'Vue.js', level: 5 },
                { name: 'HTML/CSS', level: 4 },
                { name: 'Python', level: 3 },
                { name: 'Java', level: 3 },
            ],
        };
    },
};
</script>

<style scoped>
.technical-skills {
    font-family: Arial, sans-serif;
}

.technical-skills h2 {
    margin-bottom: 1em;
}

.technical-skills ul {
    list-style-type: none;
    padding: 0;
}

.technical-skills li {
    display: flex;
    align-items: center;
    margin-bottom: 0.5em;
}

.technical-skills .stars {
    margin-left: 1em;
}

.technical-skills .star {
    color: #ccc;
    font-size: 1.2em;
}

.technical-skills .star.filled {
    color: #f39c12;
}
</style>