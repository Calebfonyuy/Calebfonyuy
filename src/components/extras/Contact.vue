<template>
    <div>
        <h2>Contact Me</h2>
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Address:</strong> 123 Main Street, Anytown, USA</p>
            <p><strong>Email:</strong> example@example.com</p>
            <p><strong>Phone:</strong> (123) 456-7890</p>
        </div>
        <div class="contact-form">
            <form @submit.prevent="handleSubmit">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" v-model="name" required />
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" v-model="email" required />
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" v-model="message" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
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
            console.log('Name:', this.name);
            console.log('Email:', this.email);
            console.log('Message:', this.message);
            // Clear the form
            this.name = '';
            this.email = '';
            this.message = '';
        }
    }
};
</script>

<style scoped>
.contact-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 1em;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.contact-form div {
    margin-bottom: 1em;
}

.contact-form label {
    display: block;
    margin-bottom: 0.5em;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 0.5em;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.contact-form button {
    padding: 0.7em 1.5em;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #0056b3;
}
</style>