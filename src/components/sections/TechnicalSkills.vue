<template>
    <div class="technical-skills">
        <span class="page-title">Technical Skills</span>
        <span class="page-subtitle">Certifications</span>
        <div class="page-content">
            <ul>
                <li v-for="cert in certifications" :key="cert.id">
                    <span class="list-element list-title">{{ cert.name }}</span>
                    <span class="list-element list-institution">{{ cert.issuer }}</span>
                    <span class="list-eleemnt list-detail">{{ cert.description }}</span>
                    <a :href="cert.url" class="list-element list-date" target="_blank">View Certificate</a>
                </li>
            </ul>
        </div>
        <span class="page-subtitle">Technologies</span>
        <div class="page-content">
            <ul>
                <li v-for="skill in skills" :key="skill.name">
                    <span>{{ skill.name }}</span>
                    <span class="stars">
                        <i v-for="n in 5" :key="n" class="star" :class="{ filled: n <= skill.level }">★</i>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import BASE_URL from '../../api.js';

export default {
    name: 'TechnicalSkills',
    data() {
        fetch(BASE_URL + 'skills')
            .then(response => response.json())
            .then(data => {
                this.skills = data['skills'];
                this.certifications = data['certifications'];
            })
            .catch(error => {
                console.error('Error:', error);
            });
        return {
            skills: [],
            certifications: []
        };
    },
};
</script>

<style scoped>
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