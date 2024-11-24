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
export default {
    name: 'Projects',
    data() {
        return {
            projects: [
                {
                    id: 1,
                    name: 'DigiMarket',
                    description: 'DigiMarket is a personal product, a software for management of restaurants and lounges. It provides for centralised management of multiple sites. It integrates creation and editing of orders and receipts as well as financial statistics and stock management.',
                    duration: 'August - September 2022',
                    technologies: 'Laravel, ReactJs, MySQL, PHP Swagger',
                    tasks: [],
                },
                {
                    id: 2,
                    name: 'Cloud Computing Project',
                    description: 'Conception and implementation of a monitoring tool for virtual machines managed by qemu to detect depth of clusters in qcow2 disks and the frequency of read-write operations in these disks.',
                    duration: 'November 2020 - January 2021',
                    technologies: 'Linux qemu, C, Python',
                    tasks: [],
                },
                {
                    id: 3,
                    name: 'Communication interface between Clinical Equipment and SIGELAM',
                    description: 'Conception and implementation of a means of information exchange between clinical equipment and SIGELAM. The project was aimed at connecting analysers to the information system of the laboratory to provide for result forwarding from the analyser to the information system of the laboratory.',
                    duration: 'August 2020 - September 2020',
                    technologies: 'Python-FTP, Python-astm, Python-xml, Postgresql',
                    tasks: [],
                },
            ],
        };
    },
};
</script>

<style scoped>
</style>