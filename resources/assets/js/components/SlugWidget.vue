<style scoped>
    .slug-widget {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .wrapper {
        margin-left: 8px;
    }

    .slug {
        background-color: #fdfd96; 
        padding: 3px 5px;
    }

    .input {
        width: auto;
    }

    .url-wrapper {
        height: 30px;
        display: flex;
        align-items: center;
    }
</style>

<template>
    <div class="slug-widget">
        <div class="icon-wrapper wrapper">
            <i class="fa fa-link"></i>
        </div>
        <div class="url-wrapper wrapper">
            <span class="root-url">{{url}}</span>
            <span class="subdirectory-url">/{{subdirectory}}/</span>
            <span class="slug" v-show="slug && !isEditing">{{slug}}</span>
            <input type="text" name="slug-edit" class="input is-small" v-show="isEditing" v-model="customSlug">
        </div>
        <div class="button-wrapper wrapper">
            <button class="button is-small" v-show="!isEditing" @click.prevent="editSlug">Edit</button>
            <button class="button is-small" v-show="isEditing" @click.prevent="saveSlug">Save</button>
            <button class="button is-small" v-show="isEditing" @click.prevent="resetSlug">Reset</button>
        </div>
    </div>
</template>

<script>
    export default {    
        props: {
            url: {
                type: String,
                required: true
            },
            subdirectory: {
                type: String,
                required: true
            },
            title: {
                type: String,
                required: true
            }
        },
        data: function() {
            return {
                slug: this.convertTitle(),
                isEditing: false,
                customSlug: '',
                wasEditted: false
            }
        },
        methods: {
            convertTitle: function () {
                return Slug(this.title)
            },
            editSlug: function() {
                this.customSlug = this.slug
                this.isEditing = true
            },
            saveSlug: function() {
                if (this.customSlug !== this.slug) {
                    this.wasEditted = true
                }
                this.slug = Slug(this.customSlug)
                this.isEditing = false
            },
            resetSlug: function() {
                this.slug = this.convertTitle()
                this.wasEditted = false
                this.isEditing = false
            }
        },
        watch: {
            title: _.debounce(function() {
                if (!this.wasEditted) {
                    this.slug = this.convertTitle()
                }
            }, 250),
            slug: function(val) {
                this.$emit('slug-changed', val)
            }
        }
    }
</script>