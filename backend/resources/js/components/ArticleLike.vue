<template>
  <div>
    <button type="button" class="btn m-0 p-1 shadow-none">
      <i class="fas fa-heart mr-1"
            :class="{'red-text':this.isLikedBy}"/>
    </button>
    {{ likesCount }}
  </div>
</template>

<script>
export default {
    props: {
        initialIsLikedBy: {
            type: Boolean,
            default: false,
        },
        initialLikesCount: {
            type: Number,
            default: 0
        }
    },
    data() {
        return {
            isLikedBy: this.initialIsLikedBy,
            likesCount: this.initialLikesCount,
        }
    }
}
</script>

<style scoped>
.red-text{color:red;}
</style>
