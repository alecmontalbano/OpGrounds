@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="columns">
            <div class="column">
                <h3 class="title">Projects</h3>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-plus m-r-10"></i>New Project</a>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-one-third">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Project #</p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                            <span class="icon">
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <p># project description.</p>
                        </div>
                      </div>
                      <footer class="card-footer">
                        <a href="#" class="card-footer-item">Save</a>
                        <a href="#" class="card-footer-item">Edit</a>
                        <a href="#" class="card-footer-item">Delete</a>
                      </footer>
                </div>
            </div>
            <div class="column is-one-third">                
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Project $</p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                            <span class="icon">
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <p>$ project description.</p>
                        </div>
                      </div>
                      <footer class="card-footer">
                        <a href="#" class="card-footer-item">Save</a>
                        <a href="#" class="card-footer-item">Edit</a>
                        <a href="#" class="card-footer-item">Delete</a>
                      </footer>
                </div>
            </div>
            <div class="column is-one-third">                
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Project @</p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                            <span class="icon">
                              <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <p>@ project description.</p>
                        </div>
                      </div>
                      <footer class="card-footer">
                        <a href="#" class="card-footer-item">Save</a>
                        <a href="#" class="card-footer-item">Edit</a>
                        <a href="#" class="card-footer-item">Delete</a>
                      </footer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
