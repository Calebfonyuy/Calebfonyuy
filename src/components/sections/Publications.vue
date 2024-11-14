<template>
    <div class="publications">
        <h2>Scientific Publications</h2>
        <ul>
            <li v-for="publication in publications" :key="publication.id">
                <h3>{{ publication.title }}</h3>
                <p>{{ publication.authors }}</p>
                <p>{{ publication.journal }}</p>
                <p>{{ publication.year }}</p>
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
                    title: 'Publication Title 1',
                    authors: 'Author 1, Author 2',
                    journal: 'Journal Name 1',
                    year: 2021
                },
                {
                    id: 2,
                    title: 'Publication Title 2',
                    authors: 'Author 3, Author 4',
                    journal: 'Journal Name 2',
                    year: 2020
                }
                // Add more publications as needed
            ]
        };
    }
};
</script>

<style scoped>
.publications {
    padding: 20px;
}

.publications h2 {
    margin-bottom: 20px;
}

.publications ul {
    list-style-type: none;
    padding: 0;
}

.publications li {
    margin-bottom: 20px;
}

.publications h3 {
    margin: 0;
}

.publications p {
    margin: 5px 0;
}
</style>