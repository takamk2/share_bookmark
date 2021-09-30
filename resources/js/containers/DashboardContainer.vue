<template>
    <div class="container">
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
