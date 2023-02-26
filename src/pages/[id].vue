<script setup>
const route = useRoute();
</script>

<template>
  <h1>{{ route.params.id }}</h1>
</template>
