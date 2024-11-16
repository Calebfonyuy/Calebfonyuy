<template>
    <div class="publications">
        <span class="page-title">Scientific Publications</span>
        <ul>
            <li v-for="publication in publications" :key="publication.id">
                <span class="list-element list-title">{{ publication.title }}</span>
                <span class="list-element list-detail">{{ publication.authors }}</span>
                <span class="list-element list-detail">{{ publication.journal }}</span>
                <span class="list-element list-date">{{ publication.year }}</span>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Publications',
    data() {
        return {
            publications: [
                {
                    id: 1,
                    title: 'TGVM: Live Migration of Virtual Machines on Heterogenous Same ISA Processors',
                    authors: 'Caleb FONYUY-ASHERI, Djob Mvondo, Fred FABO ONANINA, Alain TCHANA',
                    journal: 'SPMA 2022',
                    year: 2022
                }
            ]
        };
    }
};
</script>

<style scoped>
</style>