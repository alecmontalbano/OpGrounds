@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10 m-b-0">
            <div class="column">
                <h1 class="title is-admin is-4">Create a Post</h1>
            </div>
        </div>
        <hr class="m-t-0">

        <form action="{{route('posts.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="columns">
                <div class="column is-three-quarters-desktop">
                    <b-field>
                        <b-input placeholder="Post Title" size="is-large" v-model="title">
                        </b-input>
                    </b-field>
                <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @slug-changed="updateSlug"></slug-widget>
                    <b-field class="m-t-40">
                        <b-input type="textarea" placeholder="Compose your post..." rows="30"></b-input>
                    </b-field>
                </div>

                <div class="is-column is-one-quarter-desktop is-narrow-tablet">
                    <div class="card card-widget">
                        <div class="card-content no-padding">
                            <div class="author-widget widget-area">
                                <div class="selected-author">
                                    <img src="https://placehold.it/50x50">
                                    <div class="author">
                                        <h4>By: Alec Montalbano</h4>
                                        <p class="subtitle">
                                            (alecmonty)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-status-widget widget-area">
                                <div class="status">
                                    <div class="status-icon">
                                        <span class="icon">
                                            <i class="fa fa-file-text" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="status-details">
                                        <h4><span class="status-emphasis">Draft</span> Saved</h4>
                                        <p>A Few Minutes Ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="publish-buttons-widget widget-area">
                                <div class="secondary-action-button">
                                    <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
                                </div>
                                <div class="primary-action-button">
                                    <button class="button is-primary is-fullwidth">Publish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                title: '',
                slug: ''
            },
            methods: {
                updateSlug: function(val) {
                    this.slug = val
                }
            }
        })
    </script>
@endsection
