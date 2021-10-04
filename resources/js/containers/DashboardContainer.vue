<template>
    <v-app>
        <v-navigation-drawer app>
        </v-navigation-drawer>

        <v-app-bar app>
        </v-app-bar>

        <!-- アプリケーションのコンポーネントに基づいてコンテンツのサイズを決定 -->
        <v-main>
            <v-container fluid>
                <v-btn
                    href="/auth/google/redirect"
                    color="primary"
                    elevation="2"
                >GOOGLEログイン</v-btn>
                <v-btn
                    href="/logout"
                    elevation="2"
                >ログアウト</v-btn>
            </v-container>
            <v-card
                v-for="bookmark in bookmarks"
                :key="bookmark.id"
                elevation="2"
            >
                <v-card-title>
                    {{ bookmark.title }}
                </v-card-title>
                <v-card-title>
                    {{ bookmark.url }}
                </v-card-title>
            </v-card>
        </v-main>

        <v-footer app>
        </v-footer>
    </v-app>


    <!--    <div class="container">-->
    <!--        <v-alert-->
    <!--            dense-->
    <!--            prominent-->
    <!--            type="success"-->
    <!--        ></v-alert>-->
    <!--        <div><a href="/auth/google/redirect">Googleログイン</a></div>-->
    <!--        <div><a href="/logout">ログアウト</a></div>-->
    <!--        <ul>-->
    <!--            <li v-for="bookmark in bookmarks" :key="bookmark.id"><a :href="bookmark.url" target="_blank">{{ bookmark.title }}</a></li>-->
    <!--        </ul>-->
    <!--    </div>-->
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
