    <template>
        <div>
            <div id="div1">
                <h1>Hello</h1>
                <a href="/login">Login</a>
            </div>
        </div>
    </template>
    <script>
        export  default {
            name: 'HomeComponent',
        };

    </script>
    <style scoped>
    #div1{
        margin: 0 auto;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #e0f7fa; /* Light blue background */
        border-radius: 8px; /* Rounds the corners */
        text-align: center; /* Centers text inside the div */
    }
    </style>