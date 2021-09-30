<template>
    <div class="container">
        <div><a href="/auth/google/redirect">Googleログイン</a></div>
        <div><a href="/logout">ログアウト</a></div>
        <ul>
            <li v-for="bookmark in bookmarks" :key="bookmark.id"><a :href="bookmark.url" target="_blank">{{ bookmark.title }}</a></li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'DashboardContainer',
    mounted() {
        console.log('Component mounted.')
    },
    props: {
        bookmarks: {
            type: Array,
            required: true,
        }
    }
}
</script>
