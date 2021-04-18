            @csrf
            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form4Example3" rows="4" name="body">{{ $article->body ?? old('body') }}</textarea>
            </div>
