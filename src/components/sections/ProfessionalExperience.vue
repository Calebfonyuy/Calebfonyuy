<template>
    <div class="professional-experience">
        <span class="page-title">Professional Experience</span>
        <ul>
            <li v-for="experience in experiences" :key="experience.id">
                <span class="list-element list-title">{{ experience.title }}</span>
                <span class="list-element list-institution">{{ experience.company }}</span>
                <span class="list-element list-date">{{ experience.duration }}</span>
                <span class="list-element list-detail">{{ experience.description }}</span>
                <ul class="mt-2">
                    <li class="list-element list-detail" v-for="detail in experience.details" :key="detail">
                        <b>{{ detail.title }}</b>: {{ detail.info }}
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</template>

<script>
import BASE_URL from '../../api.js';

export default {
    name: 'ProfessionalExperience',
    data() {
        fetch(BASE_URL + 'experience')
            .then(response => response.json())
            .then(data => {
                this.experiences = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
        return {
            experiences: []
        };
    },
    mounted() {
        // Add mounted code here
    },
    methods: {

    },
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