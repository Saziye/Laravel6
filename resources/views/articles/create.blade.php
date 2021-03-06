@extends('layout')

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" rel="stylesheet" />
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
           <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

           <form method="POST" action="/articles">
                @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="conrtol">
                        <input 
                            class="input @error('title') is-danger @enderror" 
                            type="text" 
                            name="title" 
                            id="title"
                            value="{{old('title')}}"
                        >
                        <!-- @if ($errors->has('title'))
                            <p class="help is-danger">{{$errors->first('title')}}</p>
                        @endif -->
                        @error ('title')
                            <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="conrtol">
                        <textarea 
                            name="excerpt" 
                            id="excerpt" 
                            class="textarea @error('excerpt') is-danger @enderror"
                            value="{{old('excerpt')}}" 
                        ></textarea>
                        @error ('excerpt')
                            <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="conrtol">
                        <textarea 
                            name="body" 
                            id="body" 
                            class="textarea @error('body') is-danger @enderror" 
                            value="{{old('body')}}" 
                        ></textarea>
                        @error ('body')
                            <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="tags">Tags</label>

                    <div class="select is-multiple conrtol">
                        <select 
                            name="tags[]"
                            multiple
                        >
                            @foreach ($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        @error ('tags')
                            <p class="help is-danger">{{$messages}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                    <div class="control">
                        <button class="button is-text">Cancel</button>
                    </div>
                </div>
           </form>
        </div>
    </div>
@endsection


