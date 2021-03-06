            @csrf
            <!-- Message input -->
            <div class="form-outline mb-4">
                <div class="form-group">
                    <article-tags-input
                        :initial-tags='@json($tagNames ?? [])'
                        :autocomplete-items='@json($allTagNames ?? [])'>
                    </article-tags-input>
                </div>
                <textarea class="form-control" id="form4Example3" rows="4"
                    name="body">{{ $article->body ?? old('body') }}</textarea>
            </div>
