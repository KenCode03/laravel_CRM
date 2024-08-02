//PagesにComponentTest.vueを作成
<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import Label from '@/Components/InputLabel.vue'
</script>

<template>
<GuestLayout>
    //タイトルと記述はあるがvalueが指定されているため、そちらが優先される。
    <Label value="件名">タイトル</Label>
</GuestLayout>
</template>