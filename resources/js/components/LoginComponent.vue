<template>
    <div>
        <h1>Login</h1>
        <form @submit.prevent="handleSubmit">
            <label for="email">Email:</label>
            <input type="email" name="email" v-model="email">
            <div class="form-group">
        <label for="password">Password</label>
        <input
          type="password"
          v-model="password"
          id="password"
          required
          placeholder="Enter your password"
        />
      </div>

      <button type="submit">Login</button>
        </form>
    <p v-if="error">{{ error }}</p>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'LoginComponent',
    data() { return {
            email: '',
            password: '',
            error: '',
        };
    },
    methods: {
        async handleSubmit() {
            if (!this.email || !this.password) {
                this.error = "Please fill in both fields.";
                return;
            }
        try {
                // Send a POST request to the login endpoint
                const response = await axios.post('/api/login', {
                    email: this.email,
                    password: this.password
                });
                

        // Assuming the response contains a token for successful login
        if (response.data.token) {
            alert('login')
          // Store token or user info (e.g., in local storage)
          localStorage.setItem('token', response.data.token);
          alert("Login successful!");
          // Redirect or perform other actions after login
          this.$router.push('/'); // Redirect to the home page
        } else {
          this.error = "Invalid email or password.";
        }
      } catch (error) {
        this.error = "An error occurred. Please try again.";
        console.error(error); // Log the error for debugging
      }
    }

    }
}
</script>
<style scoped>

</style>
