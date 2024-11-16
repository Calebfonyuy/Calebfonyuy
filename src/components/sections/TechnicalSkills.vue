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
export default {
    name: 'TechnicalSkills',
    data() {
        return {
            skills: [
                { name: 'PHP Laravel', level: 4 },
                { name: 'Vue.js', level: 5 },
                { name: 'HTML/CSS', level: 4 },
                { name: 'Python', level: 3 },
                { name: 'JavaScript', level: 3 },
            ],
            certifications: [
                {
                    id: 1,
                    name: "Database systems Specialization",
                    issuer: "coursera.org",
                    description: "Relational database systems, Business Intelligence and DataWarehousing, NoSQL systems, Designing data-intensive applications",
                    url: "https://www.coursera.org/account/accomplishments/specialization/certificate/SYXS4VPHEPJ6",
                },
                {
                    id: 2,
                    name: "Python for Everybody",
                    issuer: "coursera.org",
                    description: "Python for Everybody, Python Data Structures, Using Python to Access Web Data, Using Databases with Python",
                    url: "https://www.coursera.org/account/accomplishments/specialization/certificate/BTV29R5SY9XE",
                },
                {
                    id: 3,
                    name: "Introduction to Cloud Identity(Google Cloud Training)",
                    issuer: "coursera.org",
                    description: "Introduction to Cloud Identity, Google Cloud Platform Fundamentals: Core Infrastructure, Essential Cloud Infrastructure: Foundation",
                    url: "https://www.coursera.org/account/accomplishments/certificate/7SGN6VL9QHLB",
                },
                {
                    id: 4,
                    name: "Business Intelligence fundamentals",
                    issuer: "simplilearn.org",
                    description: "Introduction to Business Intelligence, Data Warehousing and OLAP, Data Mining, Data Visualization",
                    url: "https://simpli-web.app.link/e/97xfcNo9Rwb",
                },
                {
                    id: 5,
                    name: "Getting started with Docker",
                    issuer: "simplilearn.org",
                    description: "Introduction to Docker, Docker Installation and Configuration, Docker Commands, Docker Networking",
                    url: "https://simpli-web.app.link/e/l4BZNchbsDb",
                },
                {
                    id: 6,
                    name: "Introduction to DevOps",
                    issuer: "simplilearn.org",
                    description: "Introduction to DevOps, DevOps Tools, Continuous Integration and Continuous Deployment, DevOps Security",
                    url: "https://simpli-web.app.link/e/7ZbZQ9o9Rwb",
                },
                {
                    id: 7,
                    name: "Introduction to AWS",
                    issuer: "simplilearn.org",
                    description: "Introduction to AWS, AWS Management Console, AWS Storage Services, AWS Compute Services",
                    url: "https://simpli-web.app.link/e/7ZbZQ9o9Rwb",
                }
            ]
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