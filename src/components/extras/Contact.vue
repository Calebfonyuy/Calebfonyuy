<template>
    <div>
        <span class="page-title">Contact</span>
        <div class="page-content">
            <div class="container-fluid mb-3">
                <h2>Contact Information</h2>
                <p><strong>Address:</strong> Rennes, France</p>
                <p><strong>Email:</strong> fonyuy (dash) asheri (dot) caleb (at) inria (dot) fr</p>
                <p><strong>Phone:</strong> +33 (0)7 64 24 74 75</p>
            </div>
            <div class="container-fluid contact-form mt-5">
                <h2>Leave me a message</h2>
                <p>Feel free to reach out to me. I will get back to you as soon as possible.</p>
                <hr />
                <form @submit.prevent="handleSubmit" class="form">
                    <div class="input-group mb-3">
                        <span for="name" class="input-group-text">Name:</span>
                        <input type="text" id="name" v-model="name" class="form-control" required />
                    </div>
                    <div class="input-group mb-3">
                        <span for="email" class="input-group-text">Email:</span>
                        <input type="email" id="email" class="form-control" v-model="email" required />
                    </div>
                    <div class="ms-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea id="message" class="form-control" rows="5" v-model="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 w-50">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            email: '',
            message: ''
        };
    },
    methods: {
        handleSubmit() {
            // Send the message to the backend
            fetch('/api/send-email', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Origin': 'https://calebfonyuy.suuynyuy.com',
                },
                body: JSON.stringify({
                    name: this.name,
                    email: this.email,
                    message: this.message
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
                // Clear the form
                this.name = '';
                this.email = '';
                this.message = '';
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }
    }
};
</script>

<style scoped>
</style>