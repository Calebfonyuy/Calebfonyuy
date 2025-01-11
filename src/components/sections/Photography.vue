<template>
    <div class="gallery">
        <div v-for="photo in photos" :key="photo.id" class="photo-item">
            <img :src="photo.url" :alt="photo.title" />
        </div>
    </div>
</template>

<script>
export default {
    name: 'Photography',
    data() {
        fetch('https://calebapi.suuynyuy.com/api/gallery')
            .then(response => response.json())
            .then(data => {
                this.photos = data;
            })
            .catch(error => {
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