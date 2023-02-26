<script setup>

import { useCounterStore } from "@/stores/counter.js"

const store = useCounterStore()

</script>

<template>
  <main>
    <TheWelcome />
    <h1>{{ store.counter }}</h1>
    <button @click="store.increment">Click</button>
  </main>
</template>
