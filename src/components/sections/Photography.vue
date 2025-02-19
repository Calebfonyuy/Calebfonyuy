<template>
    <div class="gallery">
        <div v-for="photo in photos" :key="photo.id" class="photo-item">
            <img :src="photo.url" :alt="photo.title" />
        </div>
    </div>
</template>

<script>
import BASE_URL from '../../api.js';

export default {
    name: 'Photography',
    data() {
        fetch(BASE_URL + 'gallery')
            .then(response => response.json())
            .then(data => {
                this.photos = data;
            })
            .catch(error => {
                console.error(process.env.NODE_ENV);
                console.error('Error:', error);
            });
        return {
            photos: [
            ],
        };
    },
};
</script>

<style scoped>
.gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
}

.photo-item {
    flex: 1 1 calc(33.333% - 16px);
    box-sizing: border-box;
}

.photo-item img {
    width: 100%;
    height: auto;
    display: block;
}

.photo-item p {
    text-align: center;
    margin-top: 8px;
}
</style>