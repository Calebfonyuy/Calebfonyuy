<template>
    <div class="service-section">
        <h2>Volunteering Positions</h2>
        <ul>
            <li v-for="position in volunteeringPositions" :key="position.id">
                <h3>{{ position.title }}</h3>
                <p>{{ position.organization }}</p>
                <p>{{ position.description }}</p>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'ServiceSection',
    data() {
        return {
            volunteeringPositions: [
                {
                    id: 1,
                    title: 'Volunteer Teacher',
                    organization: 'Local Community Center',
                    description: 'Teaching basic computer skills to adults.'
                },
                {
                    id: 2,
                    title: 'Event Organizer',
                    organization: 'Charity Run',
                    description: 'Organizing annual charity run events.'
                },
                {
                    id: 3,
                    title: 'Food Bank Helper',
                    organization: 'City Food Bank',
                    description: 'Assisting in sorting and distributing food donations.'
                }
            ]
        };
    }
};
</script>

<style scoped>
.service-section {
    padding: 20px;
}

.service-section h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.service-section ul {
    list-style-type: none;
    padding: 0;
}

.service-section li {
    margin-bottom: 15px;
}

.service-section h3 {
    font-size: 20px;
    margin: 0;
}

.service-section p {
    margin: 5px 0;
}
</style>