<template>
    <div class="teaching-experiences">
        <span class="page-title">Teaching Experiences</span>

        <ul>
            <li v-for="experience in experiences" :key="experience.id">
                <span class="list-element list-title">{{ experience.title }}</span>
                <span class="list-element list-institution">{{ experience.institution }}</span>
                <span class="list-element list-date">{{ experience.duration }}</span>
                <span class="list-element list-detail">{{ experience.description }}</span>
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
                    title: 'Introduction to Live migration',
                    institution: 'National Advanced School of Engineering Yaounde, Cameroon',
                    duration: 'December 2021',
                    description: 'Taught the basics live migration of virtual machines to undergraduate students.'
                },
                {
                    id: 2,
                    title: 'Live Migration of Virtual Machines',
                    institution: 'ENS Lyon, France',
                    duration: '9th October 2024',
                    description: 'Taught the basics live migration of virtual machines to undergraduate students. The class included a practical session to present the challenges faced by this procedure in heterogeneous environments.'
                }
            ],
        };
    }
};
</script>

<style scoped>
</style>