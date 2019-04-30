<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Achievements</h1>

        <input type="text" class="border p-2 rounded w-full" placeholder="API Token" v-model="token" @keyup.enter="fetchAchievements">

        <p class="text-red italic text-sm" v-if="message" v-text="message"></p>

        <ul>
            <li v-for="achievement in achievements" v-text="achievement.name" ></li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return { achievements: [], token: '', message: ''};
        },
        methods: {
            fetchAchievements() {
                axios.get(`http://api.test/api/achievements?api_token=${this.token}`)
                    .catch(error => {
                        console.log(error);
                        this.message = error.response.data.error;
                    })
                    .then(response => {
                        this.achievements = response.data;
                        this.message = null;
                    })
            }
        }
    }
</script>

<style scoped>

</style>
